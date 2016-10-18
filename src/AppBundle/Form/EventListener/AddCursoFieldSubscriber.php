<?php

namespace AppBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

use AppBundle\Entity\Especialidad;
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
class AddCursoFieldSubscriber implements EventSubscriberInterface{
    
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
    
    private function addCursoForm($form, $province)
    {
        $form->add($this->factory->createNamed('curso','entity',null,array(
            'class'=>'AppBundle:Cursos',
            'empty_value'=>'Seleccione..',
            'em'=>$this->em,
            'auto_initialize'=>false,
            'query_builder'=>function(EntityRepository $er) use ($province){
                $qb = $er->createQueryBuilder('curso')
                        ->innerJoin('curso.planestudio', 'planestudio')
                        ->innerJoin('planestudio.especialidad', 'especialidad');
                if($province instanceof Especialidad){
                    $qb->where('planestudio.especialidad = :province')
                       ->setParameter('province',$province);
                } elseif (is_numeric($province)){
                    $qb->where('especialidad.id = :province')
                       ->setParameter('province',$province);
                } else {
                    $qb->where('especialidad.nombre = :province')
                       ->setParameter('province',null);
                }
                return $qb;
            },
             'attr'=>array('class'=>'form-control'),
             'required'=>true
                    
        )));
    }
    
    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
 
        $province = ($data->getCurso()) ? $data->getEspecialidad() : null ;
        $this->addCursoForm($form, $province);
    }
 
    public function preBind(FormEvent $event)
    {
        $data = $event->getData();        
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
 
        $province = array_key_exists('especialidad', $data) ? $data['especialidad'] : null;
        $this->addCursoForm($form, $province);
    }

//put your code here
}
