<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\EqualTo;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mail', EmailType::class,[
                'attr' => ['class'=>'form-control border-left-0'],
            ])
            ->add('entreprise', TextType::class,[
                'attr' => ['class'=>'form-control border-left-0'],
            ])
            ->add('name',TextType::class, [
                'attr' => ['class'=>'form-control border-left-0'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrer votre prénom',
                    ])
                ]
            ])
            ->add('lastname',TextType::class, [
                'attr' => ['class'=>'form-control border-left-0'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrer votre nom',
                    ])
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez adherer aux conditions d\'utilisation.',
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'type'=> PasswordType::class,
                'invalid_message' => 'Le mot de passe doit être identique',
                'first_options' => ['label' => 'Mot de passe', 'attr' => ['class'=>'form-control border-left-0'],],
                'second_options' => ['label' => 'Confirmer le mot de passe','attr' => ['class'=>'form-control border-left-0'],],
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
