<?php

namespace AgiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('label' => 'Nom de l\'agent:', 'required' => true, 'attr' => array('class' => 'form-control', 'maxlength' => '7')))
            ->add('prenom',TextType::class, array('label' => 'Prénom(s) de l\'agent:', 'required' => true, 'attr' => array('class' => 'form-control', 'maxlength' => '5')))
            ->add('telephone', TextType::class, array('label' => 'Téléphone de l\'agent:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('typeContrat', ChoiceType::class, array('label' => 'Contrat:', 'choices' => array('CDD' => 'CDD', 'CDI' => 'CDI'), 'attr' => array('class' => 'form-control')));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AgiBundle\Entity\Agent'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'agibundle_agent';
    }


}