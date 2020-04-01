<?php

namespace PanierBundle\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;

use PanierBundle\Entity\Famille;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class FamilleController extends AbstractController

{
    public  function addAction(Request $request){

        $fam = new Famille();
        $form = $this->createFormBuilder($fam)
        ->add('nomFamille',TextType::class,array(
            'attr'=>array('class'=>'form-control'),

        ))
            ->add('Save',SubmitType::class,array('label'=>'Valider'))
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($fam);
            $em->flush();
        }
        $repository = $this->getDoctrine()->getRepository(Famille::class);
        $fams=$repository->findAll();
        return $this->render('@Panier/famille/add.html.twig',['form'=>$form->createView(),'fams'=>$fams]
        );

    }

    public  function  delFamilleAction ($codeFamille=null){
        {
            $em = $this->getDoctrine()->getManager();

            $Categorie = $em->getRepository('PanierBundle:Famille')->find($codeFamille);
            $em->remove($Categorie);
            $em->flush();


            return $this->redirectToRoute('addfamille');
        }


    }

}
