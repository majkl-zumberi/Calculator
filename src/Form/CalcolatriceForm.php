<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormBuilderInterface;

class CalcolatriceForm extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder
        ->add('input1', NumberType::class,[

            'constraints' => [
            
            new NotBlank()
            
            ]
            
            ])
        ->add('input2', NumberType::class,[

            'constraints' => [
            
            new NotBlank()
            
            ]
            
            ])
        ->add('operazione',ChoiceType::class, [
            'choices'  => [
                '+' => "+" ,
                '-' => "-" ,
                '*' => "*" ,
                '/' =>"/"
            ],])
        ->add('calcola',SubmitType::class);
    }
}



?>