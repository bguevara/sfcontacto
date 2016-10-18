<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Mensajes;
use AppBundle\Form\MensajesType;
use AppBundle\Utils\Util;


/**
 * Description of MensajesController
 *
 * @author modificado BORIS
 */
class MensajesController  extends Controller {
    
    
    /**
     * @Route("/app/admin/Mensajes", name="app_admin_mensajes")
     */
    public function indexAction(){
        
        
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        
        
        
        
        $form = $this->formConsultMensajes($em);
        
        
        $query = "SELECT p FROM AppBundle:Mensajes p "
                . "WHERE "
                . "p.name != 1 "                                        
                . "ORDER BY p.id ASC ";
        
        $entities = $em->createQuery($query);        
        
        $paginator = $this->container->get('knp_paginator');
        $pagination = $paginator->paginate($entities,$this->get('request')->query->get('page',1),10);
        
       
        
        return $this->render('AppBundle:Mensajes:index.html.twig', array(
            'form'=>$form->createView(),
            'pagination'=>$pagination
        ));
    }
    
    private function formConsultMensajes(\Doctrine\ORM\EntityManager $em){
        $form = $this->createFormBuilder()
             ->add('name', 'text', array('attr'=>array('class'=>'form-control')))
            ->add('e_mail', 'text', array('attr'=>array('class'=>'form-control')))
            ->add('website', 'text', array('attr'=>array('class'=>'form-control')))
            ->add('mensaje', 'text', array('attr'=>array('class'=>'form-control')))
                ->add('submit', 'submit', array('label'=>'Crear','attr'=>array('class'=>'btn btn-primary btn-flat')))
                ->getForm();
        return $form;
    }
    
    /**
     * @Route("/app/admin/edit/mensajes/{id}", name="app_admin_edit_mensajes")
     */
    public function editMensajesAction($id)
    {
         
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        $entity = $em->getRepository('AppBundle:Mensajes')->find($id);
        $form = $this->formEditMensajes($entity, $em);
                    
        return $this->render('AppBundle:Mensajes:edit.html.twig', array(
            'form'=>$form->createView()
        ));
    }
    
     private function formEditMensajes(Mensajes $entity, \Doctrine\ORM\EntityManager $em)
    {
        $form = $this->createForm(new MensajesType($em), $entity, array(
            'action'=>$this->generateUrl('app_admin_update_mensajes', array('id'=>$entity->getId())),
            'method'=>'PUT')) 
             ->add('submit', 'submit', array('label'=>'Guardar','attr'=>array('class'=>'btn btn-primary btn-flat','style' => 'float: left')))              
                            ;
        return $form;
    }
       
    
    /**
     * @Route("/app/admin/update/mensajes/{id}", name="app_admin_update_mensajes", requirements={"_method":"PUT"})
     */
    public function updateMensajesAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        $entity = $em->getRepository('AppBundle:Mensajes')->find($id);
        $form = $this->formEditMensajes($entity, $em);
        
        $form->handleRequest($request);
        if($form->isValid())
        {
            
           if ($form->get('submit')->isClicked()) {
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('msg-success', 'Registro modificado con exito!');
           } 
            
            return $this->redirect($this->generateUrl('app_admin_mensajes'));
        }
        
        return $this->render('AppBundle:Mensajes:edit.html.twig', array(
            'form'=>$form->createView()
        ));
    }
    
   
    /**
     * @Route("/app/admin/new/mensajes", name="app_admin_new_mensajes")
     */
    public function newMensajesAction()
    {
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        $entity = new Mensajes();
        $form = $this->formCreateMensajes($entity, $em);
        
        return $this->render('AppBundle:Mensajes:new.html.twig', array(
            'form'=>$form->createView()
        ));
    }
    
    /**
     * @Route("/app/admin/create/mensajes", name="app_admin_create_mensajes", requirements={"_method":"POST"})
     */
    public function createMensajesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        $entity = new Mensajes();
        $form = $this->formCreateMensajes($entity, $em);
        
        $form->handleRequest($request);
        if($form->isValid())
        {
            
         if ($form->get('submit')->isClicked()) 
        { 
            $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('msg-success', 'Registro creado con exito!');
        }
            
            return $this->redirect($this->generateUrl('app_homepage'));
        }
       
     
        
        return $this->render('AppBundle:Mensajes:new.html.twig', array(
            'form'=>$form->createView()
        ));
    }
    
    private function formCreateMensajes(Mensajes $entity, \Doctrine\ORM\EntityManager $em)
    {
        $form = $this->createForm(new MensajesType($em), $entity, array(
            'action'=>$this->generateUrl('app_admin_create_mensajes'),
            'method'=>'POST'            
        ))
             ->add('submit', 'submit', array('label'=>'Guardar','attr'=>array('class'=>'btn btn-primary btn-flat','style' => 'float: left')))              
                     ;
        return $form;
    }
    
    /**
     * @Route("/app/admin/search/mensajes", name="app_admin_mensajes_search")
     */
    public function searchAction(Request $request){
        
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        $text = $request->get('text');
        $query = "SELECT p FROM AppBundle:Mensajes p "
                . " WHERE "
                . " p.name LIKE :text or "
                . " p.e_mail LIKE :text OR "
                . " p.website LIKE :text OR"
                . " p.mensaje LIKE :text "
                . " ORDER BY p.id ASC ";
        $entities = $em->createQuery($query);
        $entities->setParameter('text', '%'.$text.'%');
        
        $paginator = $this->container->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entities,
                $this->get('request')->query->get('page',1),
                10          
        );
        
        return $this->render('AppBundle:Mensajes:index.html.twig', array(            
            'pagination'=>$pagination
        ));
    }
    
    
    
     /**
     * @Route("/app/admin/delete/mensajes/{id}", name="app_admin_delete_mensajes")
     */
    public function removeMensajesAction($id)
    {
        
        
        
        $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
        $entity = $em->getRepository('AppBundle:Mensajes')->find($id);
        //$form = $this->formEditMensajes($entity, $em);
        //$form->handleRequest($request);
        
        
            
                   
            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('msg-success', 'Registro Borrado con exito!');
            return $this->redirect($this->generateUrl('app_admin_mensajes'));
        
    }
   
    
    
   
  
    
    
       /**
     * @Route("/app/admin/consult_mensajes", name="opt_all_mensajes")
     */
     public function selectMensajespublico()
    {
       $em = $this->getDoctrine()->getManager($this->get('session')->get('em'));
       $entities = $em->getRepository('AppBundle:Mensajes')->findBy(array('vigente'=>'1'));
        if(count($entities) > 0){
            foreach ($entities as $value)
            {            
                
                
                $dato['codigo'] = $value->getId().'-'.$value->getName();
                
                //$dato['codigo'] = $value->getCedula();
                $dato['nombre'] = $value->getName();
                
                $response[] = $dato;
            }
        }else{
            $dato['codigo'] = NULL;            
            $dato['nombre'] = NULL;            
            $response[] = $dato;
        }
        
        
        
        $respuesta = new Response(json_encode($response));
        $respuesta->headers->set('Content-Type', 'application/json');
        return $respuesta;
    }
  
                
} 