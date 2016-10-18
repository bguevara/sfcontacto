<?php

namespace AppBundle\Messenger;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;  
use Symfony\Component\HttpFoundation\Session\Session;  
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Description of Flash
 *
 * @author josemorlet
 */
class Flash {
    
    protected $session;
    
    public function __construct(Session $session) {
        $this->session = $session;
    }
    
    public function onKernelResponse(FilterResponseEvent $event)
    {
        $response = $event->getResponse();
        
        // modify JSON response object
        if($response instanceof JsonResponse)
        {
            $flashMessages = $this->session->getFlashBag()->all();
            
            if (!empty($flashMessages)) {
                // Decode the JSON response before encoding it again with additional data
                $data = json_decode($response->getContent(), true);
                $data['messages'] = $flashMessages;
                $response->setData($data);
            }
        }
    }
    
}
