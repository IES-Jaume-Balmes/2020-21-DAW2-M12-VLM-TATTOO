<?php

namespace App\Entity;

use App\Repository\ReservaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservaRepository::class)
 */
class Reserva
{
    const RESERVA = 'Reserva exitosa.';

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $talla;

    /**
     * @ORM\Column(type="string", length=1024)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="decimal", precision=4, scale=2)
     */
    private $deposito;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cliente", inversedBy="reservas")
     */
    private $cliente;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tatuador", inversedBy="reservas")
     */
    private $tatuador;

    /**
     * @ORM\Column(type="string")
     */
    private $imagen;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaInicio;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaFinal;

    /**
     * Reserva constructor.
     */
    public function __construct()
    {
        $this->deposito = 0;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTalla(): ?string
    {
        return $this->talla;
    }

    public function setTalla(string $talla): self
    {
        $this->talla = $talla;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen): void
    {
        $this->imagen = $imagen;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente): void
    {
        $this->cliente = $cliente;
    }

    /**
     * @return mixed
     */
    public function getTatuador()
    {
        return $this->tatuador;
    }

    /**
     * @param mixed $tatuador
     */
    public function setTatuador($tatuador): void
    {
        $this->tatuador = $tatuador;
    }

    public function getDeposito(): ?string
    {
        return $this->deposito;
    }

    public function setDeposito(string $deposito): self
    {
        $this->deposito = $deposito;

        return $this;
    }

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio(\DateTimeInterface $fechaInicio): self
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    public function getFechaFinal(): ?\DateTimeInterface
    {
        return $this->fechaFinal;
    }

    public function setFechaFinal(\DateTimeInterface $fechaFinal): self
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }
}
