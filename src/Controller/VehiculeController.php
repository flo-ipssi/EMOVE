<?php
/**
 * Created by PhpStorm.
 * User: silve
 * Date: 05/07/2018
 * Time: 10:56
 */

namespace App\Controller;

use App\Entity\Agence;
use App\Entity\TypeVehicule;
use App\Entity\Vehicule;
use App\Form\VehiculeForm;
use App\Manager\VehiculeManager;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VehiculeController extends AbstractController
{

    /**
     *  @Route("/shop", name="shop")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $vehicules = $em->getRepository(Vehicule:: class)
            ->findAll();
        $form = $this->createFormBuilder()
            ->add('Paris', CheckboxType::class, [
                'mapped' => Agence::class,
            ])
            ->add('Lyon', CheckboxType::class, [
                'mapped' => Agence::class,
            ])
            ->add('Voiture', CheckboxType::class, [
                'mapped' => TypeVehicule::class,
            ])
            ->add('Scooter', CheckboxType::class, [
                'mapped' => TypeVehicule::class,
            ])
            ->add('Km_Min',TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Min',
                )))
            ->add('Km_Max',TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Max'
                )))
            ->add('Price_Min',TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Min'
                )))
            ->add('Price_Max',TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Max'
                )))
            ->add('Trie',SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-warning'
                )
            ))
            ->setAction($this->generateUrl('filter'))
            ->getForm();
        return $this->render('default/shop.html.twig', [
            'vehicules' => $vehicules,
            'form' => $form->createView()
        ]);
    }

    /**
     *  @Route("/produit/{id}", name="produit_view", requirements={"id"="\d+"})
     */
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $vehicule = $em->getRepository(Vehicule:: class)
            ->find($id);
        if (!$vehicule) {
            throw $this->createNotFoundException(
                'No vehicule found for id '.$id
            );
        }elseif ($vehicule == null){
            throw new HttpException(400, "New comment is not valid.");
        } else {
            return $this->render('default/produit.html.twig', [
                'vehicule' => $vehicule
            ]);
        }
    }

    /**
     *  @Route("/produit", name="produit_error")
     */
    public function errorAction()
    {
        throw new HttpException(400, "Aucune voiture selectionner");
    }


    /**
     * @Route("search", name="search")
     * @param Request $request
     * @param VehiculeManager $vehiculeManager
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function searchVehicule(Request $request, VehiculeManager $vehiculeManager)
    {
        $em = $this->getDoctrine()->getManager();
        $search = $request->request->get('form')['modele'];
        $vehicules = $vehiculeManager->search($search);
        return $this->render('default/shop.html.twig', [
            'vehicules' => $vehicules
        ]);
    }

    /**
     * @Route("filter", name="filter")
     * @param Request $request
     * @param VehiculeManager $vehiculeManager
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function filterVehicule(Request $request, VehiculeManager $vehiculeManager)
    {
        $em = $this->getDoctrine()->getManager();
        $agence = $request->request->get('form')['agence_id'];
        $type = $request->request->get('form')['type'];
        $km_min = $request->request->get('form')['km_min'];
        $km_max = $request->request->get('form')['km_max'];
        $price_min = $request->request->get('form')['price_min'];
        $price_max = $request->request->get('form')['price_max'];
        $color = $request->request->get('form')['color'];
        $vehicules = $vehiculeManager->filter($agence, $type, $km_min, $km_max, $price_max, $price_min, $color);
        return $this->render('default/shop.html.twig', [
            'vehicules' => $vehicules
        ]);
    }


    /**
     * @return Response
     */
    public function searchBarAction()
    {
        $form = $this->createFormBuilder()
            ->add('modele',TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Recherche',
                    'class' => 'form-control-plaintext'
                )))
            ->add('Ok',SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-outline-warning btn-sm'
                )
            ))
            ->setAction($this->generateUrl('search'))
            ->getForm();
        return $this->render('layout/search-bar.html.twig',
            [
                'form' => $form->createView()
            ]);
    }

    /**
     * @return Response
     */
    /*public function filterColAction()
    {
        $form = $this->createFormBuilder()
            ->add('Agence',  ChoiceType::class, [
                'class' => Agence::class
            ])
            ->add('Vehicule', ChoiceType::class, array(
                'choices'  => array(
                    'Scooter' => false,
                    'Voiture' => false
                )
            ))
            ->add('Km_Min',TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Min'
                )))
            ->add('Km_Max',TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Max'
                )))
            ->add('Price_Min',TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Min'
                )))
            ->add('Price_Max',TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Max'
                )))
            ->add('Couleur', ChoiceType::class, array(
                'choices'  => array(
                    'Blanc' => false,
                    'Noir' => false,
                    'Gris' => false,
                    'Beige' => false,
                    'Marron' => false,
                    'Bleu' => false,
                    'Rouge' => false,
                    'Jaune' => false,
                    'Vert' => false,
                    'Rose' => false
                )
            ))
            ->add('Trie',SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-warning'
                )
            ))
            ->setAction($this->generateUrl('filter'))
            ->getForm();
        return $this->render('layout/filter_shop.html.twig', [
            'form' => $form->createView()
        ]);
    }*/





}