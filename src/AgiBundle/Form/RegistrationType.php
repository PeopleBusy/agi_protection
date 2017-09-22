<?php

namespace AgiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('first_name', TextType::class, array('label' => 'Nom:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('last_name', TextType::class, array('label' => 'Prénoms:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('username', TextType::class, array('label' => 'Nom d\'utilisateur:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('password',PasswordType::class, array('label' => 'Mot de passe:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('plainPassword', PasswordType::class, array('label' => 'Téléphone de l\'agent:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('roles', ChoiceType::class, array('label' => 'Rôle:', 'choices' => array('ROLE_USER' => 'ROLE_USER', 'ROLE_ADMIN' => 'ROLE_ADMIN'), 'attr' => array('class' => 'form-control')));
    }

    /**
     * {@inheritdoc}
     */
   /* public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AgiBundle\Entity\User'
        ));
    }*/

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }


}