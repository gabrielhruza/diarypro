<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Telefono
 *
 * @ORM\Table(name="telefono")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TelefonoRepository")
 */
class Telefono
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prioridad", type="string", length=255)
     */
    private $prioridad;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="boolean")
     */
    private $celular;

   
    /**
     * @ORM\OneToOne(targetEntity="Profesional", mappedBy="telefono")
     */
    private $profesional;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        //$this->profesionales = new ArrayCollection();
    }

    /**
     * Set prioridad
     *
     * @param string $prioridad
     *
     * @return Telefono
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return string
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Telefono
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set celular
     *
     * @param string $celular
     *
     * @return Telefono
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

}

