<?php

namespace AgiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ContratAgentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('dateDebut', TextType::class, array('required' => true, 'attr' => array('class' => 'form-control')))
            ->add('dateFin', TextType::class, array('required' => true, 'attr' => array('class' => 'form-control')))
            ->add(
                $builder->create('agent', FormType::class, array('by_reference' => false))
                    ->add('nom', TextType::class, array('label' => 'Nom de l\'agent:', 'required' => true, 'attr' => array('class' => 'form-control')))
                    ->add('prenom',TextType::class, array('label' => 'Prénom(s) de l\'agent:', 'required' => true, 'attr' => array('class' => 'form-control')))
                    ->add('telephone', TextType::class, array('label' => 'Téléphone de l\'agent:', 'required' => true, 'attr' => array('class' => 'form-control')))
                    ->add('typeContrat', ChoiceType::class, array('label' => 'Contrat:', 'choices' => array('CDD' => 'CDD', 'CDI' => 'CDI'), 'attr' => array('class' => 'form-control')))
                    ->add('dateEmbauche', TextType::class, array('required' => true, 'attr' => array('class' => 'form-control')))
                );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AgiBundle\Entity\ContratAgent'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'agibundle_contratagent';
    }


}
