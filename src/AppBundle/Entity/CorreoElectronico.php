<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CorreoElectronico
 *
 * @ORM\Table(name="correo_electronico")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CorreoElectronicoRepository")
 */
class CorreoElectronico
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
     * @Assert\Choice(choices = {"primario", "secundario"}, message = "Elige una de estas opciones")
     */
    private $prioridad;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
    * @ORM\OneToOne(targetEntity="Profesional", mappedBy="correoElectronico")
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

    /**
     * Set prioridad
     *
     * @param string $prioridad
     *
     * @return CorreoElectronico
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return CorreoElectronico
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
}

