<?php

namespace AppBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

use AppBundle\Entity\Pais;
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
class AddEstadoFieldSubscriber implements EventSubscriberInterface{
    
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
    
    private function addEstadoForm($form, $province)
    {
        $form->add($this->factory->createNamed('estado','entity',null,array(
            'class'=>'AppBundle:Estados',
            'empty_value'=>'Seleccione..',
            'em'=>$this->em,
            'auto_initialize'=>false,
            'query_builder'=>function(EntityRepository $er) use ($province){
                $qb = $er->createQueryBuilder('estados')
                        ->innerJoin('estados.pais', 'pais');
                if($province instanceof Pais){
                    $qb->where('estados.pais = :province')
                       ->setParameter('province',$province);
                } elseif (is_numeric($province)){
                    $qb->where('pais.id = :province')
                       ->setParameter('province',$province);
                } else {
                    $qb->where('pais.nombre = :province')
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
 
        $province = ($data->getEstado()) ? $data->getEstado()->getPais() : null ;
        $this->addEstadoForm($form, $province);
    }
 
    public function preBind(FormEvent $event)
    {
        $data = $event->getData();        
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
 
        $province = array_key_exists('pais', $data) ? $data['pais'] : null;
        $this->addEstadoForm($form, $province);
    }

//put your code here
}
