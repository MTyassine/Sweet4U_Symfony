<?php

namespace PI\Sweet4uBundle\Form;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Form\AbstractType;

/**
 * Description of CoffretForm
 *
 * @author Zeineb
 */
class CoffretForm extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options){ 
        $builder -> add('nom')
                 -> add('nbpieces')
                 -> add('prix')
                 -> add('image')
                 -> add('stock');
                 
        
        
        
        
        
    }
    public function getName() {
        
    }

//put your code here
}
