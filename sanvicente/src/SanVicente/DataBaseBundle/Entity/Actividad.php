<?php

namespace SanVicente\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 *
 * @ORM\Table(name="actividad")
 * @ORM\Entity
 */
class Actividad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar", type="string", length=45, nullable=true)
     */
    private $lugar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Profesor", mappedBy="actividadactividad")
     */
    private $profesor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->profesor = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set nombre
     *
     * @param string $nombre
     * @return Actividad
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

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Actividad
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set lugar
     *
     * @param string $lugar
     * @return Actividad
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string 
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Actividad
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Add profesor
     *
     * @param \SanVicente\DataBaseBundle\Entity\Profesor $profesor
     * @return Actividad
     */
    public function addProfesor(\SanVicente\DataBaseBundle\Entity\Profesor $profesor)
    {
        $this->profesor[] = $profesor;

        return $this;
    }

    /**
     * Remove profesor
     *
     * @param \SanVicente\DataBaseBundle\Entity\Profesor $profesor
     */
    public function removeProfesor(\SanVicente\DataBaseBundle\Entity\Profesor $profesor)
    {
        $this->profesor->removeElement($profesor);
    }

    /**
     * Get profesor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfesor()
    {
        return $this->profesor;
    }
}
