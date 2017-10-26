<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuario
 *
 * @ORM\Table(name="USUARIOS")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario
{
    /**
     * @var int
     *
     * @ORM\Column(name="codigousuario", type="integer", unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigousuario;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=50)
     * @Assert\NotBlank()
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=255, nullable=true)
     */
    private $clave;

    /**
     * @var int
     *
     * @ORM\Column(name="edad", type="integer")
     * @Assert\Range(
     *      min = 18,
     *      minMessage = "Por Introduzca un numero de DNI válido con solo numeros"
     * )
     */
    private $edad;

    /**
     * Get codigousuario
     *
     * @return int
     */
    public function getCodigousuario()
    {
        return $this->codigousuario;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return Usuario
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }
}

