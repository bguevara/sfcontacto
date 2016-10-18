<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="mensajes")
 * @ORM\Entity()
 */
class Mensajes {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $name;
    
    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $e_mail;
    
    
    /**
     * @ORM\Column(type="string", length=80)
     */
    protected $website;
    
    
    /**
     * @ORM\Column(type="string", length=150)
     */
    protected $mensaje;
    
    
       

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Mensajes
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     *
     * @return Mensajes
     */
    public function setEMail($eMail)
    {
        $this->e_mail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string
     */
    public function getEMail()
    {
        return $this->e_mail;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Mensajes
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return Mensajes
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }
}
