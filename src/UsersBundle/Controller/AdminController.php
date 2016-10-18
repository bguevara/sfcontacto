<?php

namespace UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class AdminController extends Controller
{    
    public function loginAction(Request $request){
        $session = $request->getSession();      
        
        
        if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)){
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        }else{
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        return $this->render('AppBundle:Default:login/index.html.twig', array(
            'last_username'=> $session->get(SecurityContext::LAST_USERNAME),
            'error'=>$error,
        ));
    } 
    
    public function includeHeadAction(){
        $datenow = new \DateTime();
        return $this->render('AppBundle:Default:includes/head.html.twig', array('datenow'=>$datenow));
    }
    
    public function includeAsideLeftAction()
    {
        return $this->render('AppBundle:Default:includes/aside_left.html.twig', array());
    }
    
}
