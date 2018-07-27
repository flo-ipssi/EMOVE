<?php
/**
 * Created by PhpStorm.
 * User: femmanuel
 * Date: 19/07/2018
 * Time: 12:46
 */

namespace App\Form;

use App\Entity\Location;
use App\Entity\User;
use App\Entity\Vehicule;
use App\Entity\StatusLocation;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class LocationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $option){
        $now = new \DateTime( 'now' );
        $builder
            ->add('vehicule', EntityType::class, [
                'class' => Vehicule::class,
                'choice_label' => 'vehicule',
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'utilisateur'
            ])
            ->add('status_location', EntityType::class, [
                'class' => StatusLocation::class,
                'choice_label' => 'location'
            ])
            ->add('start_date', DateTimeType::class,[
                'format' => 'dd/MM/yyyy H:mm',
                'widget' => 'single_text',
                'label' => false,
                'attr' => [
                    'placeholder' => 'Debut de la location',
                    'class' => 'form-control start'
                ]
            ])
            ->add('end_date', DateTimeType::class,[
                'format' => 'dd/MM/yyyy H:mm',
                'widget' => 'single_text',
                'label' => false,
                'attr' => [
                    'placeholder' => 'Fin de la location',
                    'class' => 'form-control end'
                ]
            ])
            ->add('return_km', IntegerType::class,[
                'data' => 54
            ])
            ->add('return_date', DateTimeType::class,[
                'format' => 'dd/MM/yyyy H:mm',
                'widget' => 'single_text',
                'label' => false,
                'attr' => [
                    'placeholder' => 'Fin de la location',
                    'class' => 'form-control end'
                ]
            ])
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'id' => 1
        ]);
    }


}