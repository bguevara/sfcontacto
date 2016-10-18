<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Mensajes;
use AppBundle\Form\MensajesType;

use AppBundle\Utils\Util;



class DefaultController extends Controller {
    
    /**
     * @Route("/", name="_app_homepage")
     */
    public function indexRedirectAction()
    {
        
        return $this->redirect($this->generateUrl('app_homepage'));
    }
    
    
    
    
    /**
     * @Route("/app/admin", name="app_homepage")
     */
    public function indexAction()
    {
            
        
        $entity = $this->getUser()->getSede()->getCodigo();
        $this->get('session')->set('em', $entity);
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        
        $entitym = new Mensajes();
        $form = $this->formCreateMensajesM($entitym, $em);
     
        
         return $this->render('AppBundle:Default:index.html.twig', array(
            'form'=>$form->createView()
        ));
        
            }
            
            
   /**
     * @Route("/app/admin/create/mensajesm", name="app_admin_create_mensajesm", requirements={"_method":"POST"})
     */
    public function createMensajesmAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        $entity = new Mensajes();
        $form = $this->formCreateMensajesM($entity, $em);
        
        $form->handleRequest($request);
        if($form->isValid())
        {
            
         if ($form->get('submit')->isClicked()) 
        { 
             
              $email=$form['e_mail']->getData();
              $mensaje=$form['mensaje']->getData();
            $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
            $em->persist($entity);
            $em->flush();
            
            
            Util::enviarEmail(trim($email),$mensaje);
         
            
            
        }
            
            return $this->redirect($this->generateUrl('app_homepage'));
        }
       
     
        
         return $this->redirect($this->generateUrl('app_homepage'));
    }
          
            
private function formCreateMensajesM(Mensajes $entity, \Doctrine\ORM\EntityManager $em)
    {
        $form = $this->createForm(new MensajesType($em), $entity, array(
            'action'=>$this->generateUrl('app_admin_create_mensajesm'),
            'method'=>'POST'            
        ))
             ->add('submit', 'submit', array('label'=>'Send','attr'=>array('class'=>'btn btn-primary btn-flat','style' => 'float: left')))              
                     ;
        return $form;
    }
                

   
            
}
