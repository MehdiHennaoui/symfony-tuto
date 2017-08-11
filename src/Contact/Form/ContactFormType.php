<?php

namespace Contact\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ContactFormType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
        ->add("from", EmailType::class, [
            "label" => "votre adresse email"
        ])
        ->add("message", TextareaType::class, [
            "label"=>"votre message",
            "attr"=>[
                "row"=>10
            ]
        ])
        ->add("send", SubmitType::class, [
            'attr'=>[
                "class"=> "btn btn-lg btn btn-info btn-block"
            ]
        ]);

    }
}