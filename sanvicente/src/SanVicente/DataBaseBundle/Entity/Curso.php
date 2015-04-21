<?php

namespace SanVicente\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 *
 * @ORM\Table(name="curso")
 * @ORM\Entity
 */
class Curso
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Estudiante", mappedBy="curso")
     */
    private $estudiante;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estudiante = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Curso
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
     * Add estudiante
     *
     * @param \SanVicente\DataBaseBundle\Entity\Estudiante $estudiante
     * @return Curso
     */
    public function addEstudiante(\SanVicente\DataBaseBundle\Entity\Estudiante $estudiante)
    {
        $this->estudiante[] = $estudiante;

        return $this;
    }

    /**
     * Remove estudiante
     *
     * @param \SanVicente\DataBaseBundle\Entity\Estudiante $estudiante
     */
    public function removeEstudiante(\SanVicente\DataBaseBundle\Entity\Estudiante $estudiante)
    {
        $this->estudiante->removeElement($estudiante);
    }

    /**
     * Get estudiante
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstudiante()
    {
        return $this->estudiante;
    }
}
