<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SpkInvestment;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use JMS\DiExtraBundle\Annotation as DI;
use AppBundle\Entity\SpkPhoto;
use AppBundle\Form\SpkPhotoType;

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
     * @Rest\View
     * @param Request $request
     * @return View|Response
     */
    public function postPhotoAction(SpkInvestment $investment, Request $request)
    {
        $entity = new SpkPhoto();
        $form = $this->createForm(new SpkPhotoType(), $entity);
        return $this->processForm($form, $request, $entity);
    }

    private function processForm(Form $form, Request $request, SpkPhoto $photo)
    {

        $form->handleRequest($request);

        if ($form->isValid()) {

            $statusCode = $photo->getSpkPhotoId() ? 204 : 201;
            $em = $this->getDoctrine()->getManager();
            $em->persist($photo);
            $em->flush();

            $response = new Response();
            $response->setStatusCode($statusCode);

            if ($statusCode == 201) {
                $response->headers->set('Location',
                    $this->generateUrl(
                        'get_photo', array('photo' => $photo->getSpkPhotoId()),
                        true // absolute
                    )
                );
            }

            return $response;
        }
        return View::create($form, 400);
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
