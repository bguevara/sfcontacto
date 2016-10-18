<?php
namespace AppBundle\Listener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

class LoginListener {
    
    private $router, $context;
    private $user = null;
    
    public function __construct(SecurityContext $context, Router $router)
    {
        $this->context = $context;
        $this->router = $router;
    }
    
    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
       $token = $event->getAuthenticationToken();
       $this->user = $token->getUser()->getNombre();
    }
    
    public function onKernelResponse(FilterResponseEvent $event)
    {
        if($this->user != null){
           
        if($this->context->isGranted('ROLE_ADMIN'))
        {
            $portada = $this->router->generate('app_homepage');
        }        
      
        
        /*if($this->context->isGranted('ROLE_ALUMN'))
        {
            $portada = $this->router->generate('app_homepage_estudiante');
        } */       
        
        $event->setResponse(new RedirectResponse($portada));
        $event->stopPropagation();
        }        
    }
    
}