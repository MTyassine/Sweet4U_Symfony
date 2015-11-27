<?php
namespace PI\Sweet4uBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegisterFormType
 *
 * @author Zeineb
 */
class RegisterFormType extends AbstractType {
     
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
         $builder  ->add('nom')
                ->add('prenom')
                ->add('adresse')
//                ->add('date_naissance')
                ->add('cin')
                ->add('nompatisserie')
                ->add('roles', 'collection', array(
                    'type' => 'choice',
                    'label' => 'Rôles',
                    'options' => array(
                        'label' => false,
                        'choices' => array('ROLE_CLIENT' => 'Client', 'ROLE_RESPONSABLE' => 'Responsable'),
                        'multiple' => false,
                        'data' => 1
                    ),));
                 
                 
    }
     public function getParent()
    {
        return 'fos_user_registration';
    }
    
      public function getName() {
        return 'app_user_registration';
    }
}
