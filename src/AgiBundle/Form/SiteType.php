<?php

namespace AgiBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class SiteType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomSite', TextType::class, array('label' => 'Nom du client:', 'required' => true, 'attr' => array('class' => 'form-control', 'maxlength' => '12')))
            ->add('heureOuvJour',null, array('label' => 'Heure ouverture jour'))
            ->add('heureFermJour', null, array('label' => 'Heure fermeture jour:'))
            ->add('heureOuvNuit', null, array('label' => 'Heure ouverture nuit:'))
            ->add('heureFermNuit', null, array('label' => 'Heure fermeture nuit:'));

        /*$builder->get('heureOuvJour')
            ->addModelTransformer(new \AgiBundle\DataTransformer\TimeToStringTransformer());

        $builder->get('heureFermJour')
        ->addModelTransformer(new \AgiBundle\DataTransformer\TimeToStringTransformer());

        $builder->get('heureOuvNuit')
            ->addModelTransformer(new \AgiBundle\DataTransformer\TimeToStringTransformer());

        $builder->get('heureFermNuit')
            ->addModelTransformer(new \AgiBundle\DataTransformer\TimeToStringTransformer());*/

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AgiBundle\Entity\Site'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'agibundle_site';
    }


}
