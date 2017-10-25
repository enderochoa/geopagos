<?php
namespace AppBundle\Classes;

class Figura
{
    protected $tipo;
    protected $base;
    protected $altura;
    protected $radio;

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @return mixed
     */
    public function getRadio()
    {
        return $this->radio;
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
     * @param mixed $radio
     *
     * @return self
     */
    public function setRadio($radio)
    {
        $this->radio = $radio;

        return $this;
    }
}
