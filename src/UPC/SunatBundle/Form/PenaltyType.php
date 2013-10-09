<?php

namespace UPC\SunatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PenaltyType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ruc')
            ->add('typePayment')
            ->add('tributaryPeriod')
            ->add('resolution')
            ->add('tributeCode')
            ->add('payment')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UPC\SunatBundle\Entity\Penalty'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'upc_sunatbundle_penalty';
    }
}
