<?php

namespace SanVicente\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profesor
 *
 * @ORM\Table(name="profesor", indexes={@ORM\Index(name="fk_Profesor_Rol1_idx", columns={"Rol_id"})})
 * @ORM\Entity
 */
class Profesor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_Profesor", type="string", length=10, nullable=true)
     */
    private $codigoProfesor;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="especialidad", type="string", length=15, nullable=true)
     */
    private $especialidad;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=45, nullable=true)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=30, nullable=true)
     */
    private $direccion;

    /**
     * @var \Rol
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Rol_id", referencedColumnName="id")
     * })
     */
    private $rol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Actividad", inversedBy="profesor")
     * @ORM\JoinTable(name="profesor_actividad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Profesor_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Actividad_idActividad", referencedColumnName="id")
     *   }
     * )
     */
    private $actividadactividad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actividadactividad = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set id
     *
     * @param integer $id
     * @return Profesor
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set codigoProfesor
     *
     * @param string $codigoProfesor
     * @return Profesor
     */
    public function setCodigoProfesor($codigoProfesor)
    {
        $this->codigoProfesor = $codigoProfesor;

        return $this;
    }

    /**
     * Get codigoProfesor
     *
     * @return string 
     */
    public function getCodigoProfesor()
    {
        return $this->codigoProfesor;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Profesor
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
     * Set especialidad
     *
     * @param string $especialidad
     * @return Profesor
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    /**
     * Get especialidad
     *
     * @return string 
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Set correo
     *
     * @param string $correo
     * @return Profesor
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Profesor
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Profesor
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

    /**
     * Set rol
     *
     * @param \SanVicente\DataBaseBundle\Entity\Rol $rol
     * @return Profesor
     */
    public function setRol(\SanVicente\DataBaseBundle\Entity\Rol $rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \SanVicente\DataBaseBundle\Entity\Rol 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Add actividadactividad
     *
     * @param \SanVicente\DataBaseBundle\Entity\Actividad $actividadactividad
     * @return Profesor
     */
    public function addActividadactividad(\SanVicente\DataBaseBundle\Entity\Actividad $actividadactividad)
    {
        $this->actividadactividad[] = $actividadactividad;

        return $this;
    }

    /**
     * Remove actividadactividad
     *
     * @param \SanVicente\DataBaseBundle\Entity\Actividad $actividadactividad
     */
    public function removeActividadactividad(\SanVicente\DataBaseBundle\Entity\Actividad $actividadactividad)
    {
        $this->actividadactividad->removeElement($actividadactividad);
    }

    /**
     * Get actividadactividad
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActividadactividad()
    {
        return $this->actividadactividad;
    }
}
