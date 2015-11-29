<?php

namespace PI\Sweet4uBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PI\Sweet4uBundle\Entity\Coffret;
use PI\Sweet4uBundle\Form\CoffretForm;

/**
 * Description of CoffretController
 *
 * @author Zeineb
 */
class CoffretController extends Controller {

    public function ajoutAction() {


        $coff = new Coffret();
        
        $form = $this->createForm(new CoffretForm(), $coff);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->container->get('Doctrine')->getEntityManager();
                $em->persist($coff);
                $coff->setImage($file);
                $file = $coff->getImage();
                // $im->setId($id);


                $em->flush();
            }
            return $this->render('PISweet4uBundle:Coffret:succes.html.twig', array('msg' => 'Ajout affectué avec succès'));
        }
        return $this->render('PISweet4uBundle:Coffret:ajout.html.twig', array('Form' => $form->createView()));
    }
}
  

    
 