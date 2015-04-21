<?php

namespace SanVicente\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoProfesorCurso
 *
 * @ORM\Table(name="grupo_profesor_curso", indexes={@ORM\Index(name="fk_Grupo_Profesor_Curso_Grupo1_idx", columns={"Grupo_id"}), @ORM\Index(name="fk_Grupo_Profesor_Curso_Curso1_idx", columns={"Curso_id"}), @ORM\Index(name="fk_Grupo_Profesor_Curso_Profesor1_idx", columns={"Profesor_id"})})
 * @ORM\Entity
 */
class GrupoProfesorCurso
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
     * @var \Grupo
     *
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Grupo_id", referencedColumnName="id")
     * })
     */
    private $grupo;

    /**
     * @var \Curso
     *
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Curso_id", referencedColumnName="id")
     * })
     */
    private $curso;

    /**
     * @var \Profesor
     *
     * @ORM\ManyToOne(targetEntity="Profesor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Profesor_id", referencedColumnName="id")
     * })
     */
    private $profesor;



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
     * Set grupo
     *
     * @param \SanVicente\DataBaseBundle\Entity\Grupo $grupo
     * @return GrupoProfesorCurso
     */
    public function setGrupo(\SanVicente\DataBaseBundle\Entity\Grupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \SanVicente\DataBaseBundle\Entity\Grupo 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set curso
     *
     * @param \SanVicente\DataBaseBundle\Entity\Curso $curso
     * @return GrupoProfesorCurso
     */
    public function setCurso(\SanVicente\DataBaseBundle\Entity\Curso $curso = null)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \SanVicente\DataBaseBundle\Entity\Curso 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set profesor
     *
     * @param \SanVicente\DataBaseBundle\Entity\Profesor $profesor
     * @return GrupoProfesorCurso
     */
    public function setProfesor(\SanVicente\DataBaseBundle\Entity\Profesor $profesor = null)
    {
        $this->profesor = $profesor;

        return $this;
    }

    /**
     * Get profesor
     *
     * @return \SanVicente\DataBaseBundle\Entity\Profesor 
     */
    public function getProfesor()
    {
        return $this->profesor;
    }
}
