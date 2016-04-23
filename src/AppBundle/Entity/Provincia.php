<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProvinciaRepository")
 */
class Provincia
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;


    /**
     * @ORM\OneToMany(targetEntity="Ciudad", mappedBy="provincia")
     */
    private $ciudades;

    /**
     * @ORM\OneToMany(targetEntity="DireccionPostal", mappedBy="provincia")
     */
    private $direccionesPostales;


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
        $this->ciudades = new ArrayCollection();
        $this->direccionesPostales = new ArrayCollection();
    }

    public function __toString(){
        return $this->getNombre();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Provincia
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCiudades(){
        return $this->ciudades;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudades->add($ciudad);
        return $this;
    }

    public function getDireccionPostal(){
        return $this->direccionesPostales;
    }

    public function setDireccionPostal($direccionPostal)
    {
        $this->direccionesPostales->add($direccionPostal);
        return $this;
    }
}

