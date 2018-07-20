<?php
/**
 * Created by PhpStorm.
 * User: silve
 * Date: 05/07/2018
 * Time: 15:30
 */

namespace App\Controller;

use App\Entity\Location;
use App\Entity\Vehicule;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\HttpException;

class LocationController extends AbstractController
{
    /**
     *  @Route("/location/{id}", name="location_view", requirements={"id"="\d+"})
     */
    public function locationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $vehicule = $em->getRepository(Vehicule:: class)
            ->find($id);
        if (!$vehicule) {
            throw $this->createNotFoundException(
                'Vehicule indisponible'.$id
            );
        }elseif ($vehicule == null){
            throw new HttpException(400, "VEHICULE Absent");
        } else {
            return $this->render('user/location.html.twig', [
                'vehicule' => $vehicule
            ]);
        }
    }

    /**
     *  @Route("/facture/{id}", name="facture", requirements={"id"="\d+"})
     */
    public function factureAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $vehicule = $em->getRepository(Vehicule:: class)
            ->find($id);
        if (!$vehicule) {
            throw $this->createNotFoundException(
                'Vehicule indisponible'.$id
            );
        }elseif ($vehicule == null){
            throw new HttpException(400, "VEHICULE Absent");
        } else {
            return $this->render('user/facture.html.twig', [
                'vehicule' => $vehicule
            ]);
        }
    }

    public function PdfAction($id)
    {
        $html = $this->renderView('user/facture.html.twig');
        $pdfGenerator = $this->get('spraed.pdf.generator');
    }
}