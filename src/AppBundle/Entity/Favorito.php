<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Pago
 *
 * @ORM\Table(name="FAVORITOS")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FavoritoRepository")
 */
class Favorito
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
      * @ORM\ManyToOne(targetEntity="Usuario")
      * @ORM\JoinColumn(name="codigousuario", referencedColumnName="codigousuario", nullable=false)
      * @Assert\NotBlank()
      */
    private $codigousuario;

    /**
      * @ORM\ManyToOne(targetEntity="Usuario")
      * @ORM\JoinColumn(name="codigousuariofavorito", referencedColumnName="codigousuario", nullable=false)
      * @Assert\NotBlank()
      */
    private $codigousuariofavorito;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigousuario()
    {
        return $this->codigousuario;
    }

    /**
     * @param mixed $codigousuario
     *
     * @return self
     */
    public function setCodigousuario($codigousuario)
    {
        $this->codigousuario = $codigousuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigousuariofavorito()
    {
        return $this->codigousuariofavorito;
    }

    /**
     * @param mixed $codigousuariofavorito
     *
     * @return self
     */
    public function setCodigousuariofavorito($codigousuariofavorito)
    {
        $this->codigousuariofavorito = $codigousuariofavorito;

        return $this;
    }
}
