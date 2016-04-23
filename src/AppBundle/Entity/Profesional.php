<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profesional
 *
 * @ORM\Table(name="profesional")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProfesionalRepository")
 */
class Profesional
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
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=255)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=255)
     */
    private $matricula;

    /**
     * @ORM\ManyToOne(targetEntity="Profesion", inversedBy="profesionales")
     * @ORM\JoinColumn(name="profesion_id", referencedColumnName="id")
     */
    private $profesion;

    
    /**
     * @ORM\OneToOne(targetEntity="DireccionPostal", inversedBy="profesional", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="direccionPostal_id", referencedColumnName="id")
     */
    private $direccionPostal;

    
     /**
     * @ORM\OneToOne(targetEntity="Telefono", inversedBy="profesional", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="telefono_id", referencedColumnName="id")
     */
    private $telefono;

    /**
     * @ORM\OneToOne(targetEntity="CorreoElectronico", inversedBy="profesional", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="correoElectronico_id", referencedColumnName="id")
     */
    private $correoElectronico;  

    /**
     * @var datetime
     *
     * @ORM\Column(name="inicioActividades", type="datetime")
     */
    private $inicioActividades;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Profesional
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getInicioActividades(){
        return $this->inicioActividades;
    }

    public function setInicioActividades($inicioActividades){
        $this->inicioActividades = $inicioActividades;
        return $this; 
    }

    public function getDireccionPostal(){
        return $this->direccionPostal;
    }

    public function setDireccionPostal($direccionPostal){
        $this->direccionPostal = $direccionPostal;
        return $this;
    }
    
    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
        return $this;
    }

    public function getCorreoElectronico(){
        return $this->correoElectronico;
    }

    public function setCorreoElectronico($correoElectronico){
        $this->correoElectronico = $correoElectronico;
        return $this;
    }




    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Profesional
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set matricula
     *
     * @param string $matricula
     *
     * @return Profesional
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set profesion
     *
     * @param string $profesion
     *
     * @return Profesional
     */
    public function setProfesion($profesion)
    {
        $this->profesion = $profesion;

        return $this;
    }

    /**
     * Get profesion
     *
     * @return string
     */
    public function getProfesion()
    {
        return $this->profesion;
    }
}

