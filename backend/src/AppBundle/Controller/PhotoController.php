<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SpkInvestment;
use AppBundle\Form\SpkPhotoUploadType;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use JMS\DiExtraBundle\Annotation as DI;
use AppBundle\Entity\SpkPhoto;
use AppBundle\Form\SpkPhotoType;
use Symfony\Component\HttpFoundation\Response;

/**
 */
class PhotoController extends Controller
{

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @param SpkInvestment $investment
     * @return
     */
    public function getPhotosAction(SpkInvestment $investment)
    {
        return $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:SpkPhoto')
            ->findByInvestment($investment);
    }

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @param SpkInvestment $investment
     * @param SpkPhoto $photo
     * @return SpkPhoto
     */
    public function getPhotoAction(SpkInvestment $investment, SpkPhoto $photo)
    {
        return $photo;
    }

    /**
     * @Rest\View
     * @param SpkInvestment $investment
     * @param Request $request
     * @return Response|View
     */
    public function postPhotoAction(SpkInvestment $investment, Request $request)
    {
        $entity = new SpkPhoto();
        $form = $this->createForm(new SpkPhotoUploadType(), $entity);
        return $this->processForm($investment, $form, $request, $entity);
    }

    private function processForm(SpkInvestment $investment, Form $form, Request $request, SpkPhoto $photo)
    {

        $form->handleRequest($request);

        if ($form->isValid()) {

            $statusCode = $photo->getSpkPhotoId() ? 204 : 201;
            $em = $this->getDoctrine()->getManager();
            $photo->setInvestment($investment);
            $this->upload($photo->getEncoded());
            $em->persist($photo);
            $em->flush();

            $response = new Response();
            $response->setStatusCode($statusCode);

            if ($statusCode == 201) {
                $response->headers->set('Location',
                    $this->generateUrl(
                        'get_investment_photo', ['investment' => $investment->getSpkPropertyid(), 'photo' => $photo->getSpkPhotoId()]
                    )
                );
            }

            return $response;
        }
        return View::create($form, 400);
    }

    private function upload($imgDataUrl)
    {
        list($type, $data) = explode(';', $imgDataUrl);
        list(, $data) = explode(',', $data);
        $decodedData = base64_decode($data);
        $hash = md5($decodedData);
        $hash = md5($hash . microtime(1));

        $fileName = $this->getImageName($hash);
        file_put_contents($fileName, $decodedData);
        return $hash;
    }

    /**
     * @param $hash
     * @return string
     */
    private function getImageName($hash)
    {
        $uploadPath = $this->get('kernel')->getRootDir() . '/../web/public/';

        $fileName = $uploadPath . $hash . '.png';
        return $fileName;
    }

    private function deleteImage($image)
    {
        if ($image) {
            unlink($this->getImageName($image->getHash()));
        }
    }
//
//    /**
//     * Edits an existing SpkPhoto entity.
//     *
//     * @Route("/{id}", name="spkphoto_update")
//     * @Method("PUT")
//     * @Template("AppBundle:SpkPhoto:edit.html.twig")
//     */
//    public function updateAction(Request $request, $id)
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entity = $em->getRepository('AppBundle:SpkPhoto')->find($id);
//
//        if (!$entity) {
//            throw $this->createNotFoundException('Unable to find SpkPhoto entity.');
//        }
//
//        $deleteForm = $this->createDeleteForm($id);
//        $editForm = $this->createEditForm($entity);
//        $editForm->handleRequest($request);
//
//        if ($editForm->isValid()) {
//            $em->flush();
//
//            return $this->redirect($this->generateUrl('spkphoto_edit', array('id' => $id)));
//        }
//
//        return array(
//            'entity' => $entity,
//            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        );
//    }
//
//    /**
//     * Deletes a SpkPhoto entity.
//     *
//     * @Route("/{id}", name="spkphoto_delete")
//     * @Method("DELETE")
//     */
//    public function deleteAction(Request $request, $id)
//    {
//        $form = $this->createDeleteForm($id);
//        $form->handleRequest($request);
//
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $entity = $em->getRepository('AppBundle:SpkPhoto')->find($id);
//
//            if (!$entity) {
//                throw $this->createNotFoundException('Unable to find SpkPhoto entity.');
//            }
//
//            $em->remove($entity);
//            $em->flush();
//        }
//
//        return $this->redirect($this->generateUrl('spkphoto'));
//    }
//
//    /**
//     * Creates a form to delete a SpkPhoto entity by id.
//     *
//     * @param mixed $id The entity id
//     *
//     * @return \Symfony\Component\Form\Form The form
//     */
//    private function createDeleteForm($id)
//    {
//        return $this->createFormBuilder()
//            ->setAction($this->generateUrl('spkphoto_delete', array('id' => $id)))
//            ->setMethod('DELETE')
//            ->add('submit', 'submit', array('label' => 'Delete'))
//            ->getForm();
//    }

}
