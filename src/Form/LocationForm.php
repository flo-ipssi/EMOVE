<?php
/**
 * Created by PhpStorm.
 * User: femmanuel
 * Date: 19/07/2018
 * Time: 12:46
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;


class LocationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $option){

    }
    public function locationForm(FormBuilderInterface $builder, array $option){
        $builder
            ->add('status_location', IntegerType::class)
            ->add('vehicule', IntegerType::class)
            ->add('user', IntegerType::class)
            ->add('start_date', DateTimeType::class)
            ->add('end_date', DateTimeType::class)
            ->add('return_date', DateTimeType::class)
            ->add('return_km', IntegerType::class)
        ;
    }


}