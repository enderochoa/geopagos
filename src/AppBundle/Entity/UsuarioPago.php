<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Pago
 *
 * @ORM\Table(name="USUARIOSPAGOS")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioPagoRepository")
 */
class UsuarioPago
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
     * @ORM\ManyToOne(targetEntity="Pago")
     * @ORM\JoinColumn(name="codigopago", referencedColumnName="codigopago", nullable=false)
     * @Assert\NotBlank()
     */
     private $codigopago;

     /**
      * @ORM\ManyToOne(targetEntity="Usuario")
      * @ORM\JoinColumn(name="codigousuario", referencedColumnName="codigousuario", nullable=false)
      * @Assert\NotBlank()
      */
      private $codigousuario;



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
    public function getCodigopago()
    {
        return $this->codigopago;
    }

    /**
     * @param mixed $codigopago
     *
     * @return self
     */
    public function setCodigopago($codigopago)
    {
        $this->codigopago = $codigopago;

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
}
