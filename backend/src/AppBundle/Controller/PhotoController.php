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
            if ($photo->getEncoded()) {
                $hash = $this->upload($photo->getEncoded());
                $photo->setDescription($hash);
                $photo->setFilename($this->getImageName($hash));
            }
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

    /**
     * @Rest\View(serializerGroups={"Default"})
     * @param SpkInvestment $investment
     * @param SpkPhoto $photo
     * @return SpkPhoto
     */
    public function deletePhotoAction(SpkInvestment $investment, SpkPhoto $photo)
    {
        $em = $this->getDoctrine()->getManager();
        $this->deleteImage($photo->getDescription());
        $em->remove($photo);
        $em->flush();
        return $photo;
    }

    private function deleteImage($hash)
    {
        if (file_exists($this->getImageName($hash))) {
            unlink($this->getImageName($hash));
        }
    }

}
