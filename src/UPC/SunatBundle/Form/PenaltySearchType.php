<?php

namespace UPC\SunatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Description of PenaltySearchType
 *
 */
class PenaltySearchType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('ruc', null, array(
                    'label' => 'N° Ruc',
                    'required' => false
                ))                
                ->add('search', 'submit', array(
                    'label' => 'Consultar',
                    'attr' => array('class' => 'btn btn-primary')
                ));           
    }
    
    public function getName() {
        return 'penalty_search';
    }
    
     public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'method' => 'GET',
            'action' => ''
        ));
    }
}

?>
