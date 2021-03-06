<?php
/**
 * Created by PhpStorm.
 * User: silve
 * Date: 05/07/2018
 * Time: 15:30
 */

namespace App\Controller;

use App\Entity\DispoVehicule;
use App\Entity\Location;
use App\Entity\StatusLocation;
use App\Entity\Vehicule;
use App\Form\LocationForm;
use App\Entity\User;
use App\Service\Html2Pdf;
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
    public function locationAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $vehicule = $em->getRepository(Vehicule:: class)
            ->findOneBy(
                ['id' => $id ,'dispoVehicule' => 1],
                ['id' => 'ASC']
            );
        $statut = $em->getRepository(StatusLocation:: class)
            ->findOneBy(
                ['id' => 2],
                ['id' => 'ASC']
            );
        $location = new Location();
        $location->setVehicule($vehicule);
        $location->setStatusLocation($statut);
        $location->setReturnKm(null);
        $location->setReturnDate(null);
        $form = $this->createForm(LocationForm::class, $location);
        $form->handleRequest($request);
        if (!$vehicule)
        {
            throw $this->createNotFoundException(
                "VEHICULE Absent"
            );
        }
        elseif ($vehicule == null)
        {
            throw new HttpException(400, "VEHICULE Absent");
        }
        elseif ($form->isSubmitted() && $form->isValid())
        {
            $loue = $em->getRepository(Location:: class)
                ->findOneBy(
                    ['statusLocation' => 1 ,'vehicule' => $id],
                    ['vehicule' => 'ASC']
                );
            $reserve = $em->getRepository(Location:: class)
                ->findOneBy(
                    ['statusLocation' => 2 ,'vehicule' => $id],
                    ['vehicule' => 'ASC']
                );
            if (!$loue || !$reserve) {
                $start = $form["start_date"]->getData();
                $end = $form["end_date"]->getData();
                if ($start >= $end){
                    throw new HttpException(400, "Mauvaise date");
                }else {
                    $dispo = $em->getRepository(DispoVehicule:: class)
                        ->find(2);
                    $em = $this->getDoctrine()->getManager();
                    $vehicule->setDispoVehicule($dispo);
                    $em->persist($location, $vehicule);
                    $em->flush();
                    $em->refresh($location);
                    return $this->redirectToRoute('facture', [
                        'id' => $location->getId(),
                    ]);
                }
            }else{
                throw new HttpException(400, "VEHICULE Loue ou Reserve");
            }
        }else {
            return $this->render('user/location.html.twig', [
                'vehicule' => $vehicule,
                'form' => $form->createView()
            ]);
        }
    }


    /**
     *  @Route("/facture?vehicule={id}", name="facture", requirements={"id"="\d+"})
     */
    public function factureAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $location = $em->getRepository(Location:: class)
            ->find($id);
        if (!$location) {
            throw $this->createNotFoundException(
                'Location indisponible'.$id
            );
        }elseif ($location == null){
            throw new HttpException(400, "VEHICULE Absent");
        } else {
            $vehicule = $em->getRepository(Vehicule::class)
                ->find($location->getVehicule());
            return $this->render('user/facture.html.twig', [
                'location' => $location,
                'vehicule' => $vehicule

            ]);
        }
    }

    /**
     *  @Route("/pdf?location={id}", name="pdf", requirements={"id"="\d+"})
     *  @return Response
     */
    public function PdfAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $location = $em->getRepository(Location:: class)
            ->find($id);
        if (!$location) {
            throw $this->createNotFoundException(
                'Location indisponible'
            );
        }elseif ($location == null){
            throw new HttpException(400, "VEHICULE Absent");
        } else {
            $user = $em->getRepository(User::class)
                ->find($location->getUser());
            $vehicule = $em->getRepository(Vehicule::class)
                ->find($location->getVehicule());
            $template = $this->renderview('default/pdf.html.twig', array(
                'location' => $location,
                'vehicule' => $vehicule,
                'user' => $user
            ));
            $firstname =$user->getfirstname();
            $modele = $vehicule->getModele();
            $name = 'location_'.$firstname.'_'.$modele;
            $html2pdf = new Html2Pdf();
            $html2pdf->create('P', 'A4', 'fr', true, 'UTF-8', array(10, 15, 10, 15));
            return $html2pdf->generatePdf($template, $name);
        }
    }
}