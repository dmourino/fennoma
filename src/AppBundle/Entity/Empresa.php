<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EmpresaRepository")
 */
class Empresa
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
     * @var int
     *
     * @ORM\Column(name="cuit", type="integer")
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidadEmpleados", type="string", length=255)
     */
    private $cantidadEmpleados;


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
     * @return Empresa
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
     * Set cuit
     *
     * @param integer $cuit
     * @return Empresa
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return integer 
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set cantidadEmpleados
     *
     * @param string $cantidadEmpleados
     * @return Empresa
     */
    public function setCantidadEmpleados($cantidadEmpleados)
    {
        $this->cantidadEmpleados = $cantidadEmpleados;

        return $this;
    }

    /**
     * Get cantidadEmpleados
     *
     * @return string 
     */
    public function getCantidadEmpleados()
    {
        return $this->cantidadEmpleados;
    }
}
