<?php
namespace AppBundle\Classes;

abstract class Figura
{
    protected $tipo;
    protected $base;
    protected $altura;
    protected $superficie;
    protected $diametro;

    abstract public function getDiametro();
    abstract public function getBase();
    abstract public function getAltura();

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $base
     *
     * @return self
     */
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * @param mixed $altura
     *
     * @return self
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }


    /**
     * @param mixed $superficie
     *
     * @return self
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * @param mixed $diametro
     *
     * @return self
     */
    public function setDiametro($diametro)
    {
        $this->diametro = $diametro;

        return $this;
    }

    public function getSuperficie()
    {
        return $this->superficie;
    }
}
