<?php

namespace AgiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class HeurePanierType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', TextType::class, array('label' => 'Libellé:', 'required' => true, 'attr' => array('class' => 'form-control')))
            ->add('heureDebut',null, array('label' => 'Heure début:', 'required' => true))
            ->add('heureFin', null, array('label' => 'Heure fin:', 'required' => true));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AgiBundle\Entity\HeurePanier'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'agibundle_heure_panier';
    }


}
