<?php

namespace AppBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

use AppBundle\Entity\Estados;
/*
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AddEspecialidadFieldSubscriber
 *
 * @author josemorlet
 */
class AddCiudadFieldSubscriber implements EventSubscriberInterface{
    
    private $factory;
    private $em;
    
    public function __construct(FormFactoryInterface $factory, EntityManager $em = null) {
        $this->factory = $factory;
        $this->em = $em;
    }
    
    public static function getSubscribedEvents() {
        return array(
            FormEvents::PRE_SET_DATA =>'preSetData',
            FormEvents::PRE_BIND =>'preBind'
        );
    }
    
    private function addCiudadForm($form, $province)
    {
        $form->add($this->factory->createNamed('ciudad','entity',null,array(
            'class'=>'AppBundle:Ciudades',
            'empty_value'=>'.:Seleccione:.',
            'em'=>$this->em,
            'auto_initialize'=>false,
            'query_builder'=>function(EntityRepository $er) use ($province){
                $qb = $er->createQueryBuilder('ciudad')
                        ->innerJoin('ciudad.estado', 'estado');
                if($province instanceof Estados){
                    $qb->where('ciudad.estado = :province')
                       ->setParameter('province',$province);
                } elseif (is_numeric($province)){
                    $qb->where('estado.id = :province')
                       ->setParameter('province',$province);
                } else {
                    $qb->where('estado.nombre = :province')
                       ->setParameter('province',null);
                }
                return $qb;
            },
             'attr'=>array('class'=>'form-control'),
              'required'=>false
                    
        )));
    }
    
    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
 
        $province = ($data->getCiudad()) ? $data->getCiudad()->getEstado() : null ;
        $this->addCiudadForm($form, $province);
    }
 
    public function preBind(FormEvent $event)
    {
        $data = $event->getData();        
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
 
        $province = array_key_exists('estado', $data) ? $data['estado'] : null;
        $this->addCiudadForm($form, $province);
    }

//put your code here
}
