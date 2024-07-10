<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastName', TextType::class, [
                'label' => 'Nom',
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Prénom'
            ] )
            ->add('email', EmailType::class, [
                'label' => 'Adresse Mail',
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'attr' => [
                    'rows' => 8,
                ]
            ])
            ->add('is_human', CheckboxType::class, [
                'label' => 'Je ne suis pas un robot',
                'mapped' => false,
                'required' => true,
            ])
            ->add('reaction_time', HiddenType::class, [
                'mapped'=> false,
            ])
            ->add('Envoyer', SubmitType::class, [
                'attr' => [
                    'class' => 'main__content--cta'
                ]
            ]
        );

    }
    
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
            'attr' => [
                'novalidate'=> 'novalidate',
            ],
        ]);
    }
}