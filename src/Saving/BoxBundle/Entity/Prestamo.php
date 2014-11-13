<?php

namespace Saving\BoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestamo
 *
 * @ORM\Table(name="prestamo", indexes={@ORM\Index(name="fk_prestamo_1_idx", columns={"persona_id"}), @ORM\Index(name="fk_prestamo_data_idx", columns={"data_id"})})
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity
 */
class Prestamo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_prestamo_id", type="integer", nullable=false)
     */
    private $tipoPrestamoId;

    /**
     * @var string
     *
     * @ORM\Column(name="n_solicitud", type="string", length=100, nullable=true)
     */
    private $nSolicitud;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_cuotas", type="integer", nullable=false)
     */
    private $nCuotas;

    /**
     * @var float
     *
     * @ORM\Column(name="porcentaje_interes", type="float", precision=10, scale=0, nullable=false)
     */
    private $porcentajeInteres;

    /**
     * @var float
     *
     * @ORM\Column(name="prestamo_anterior", type="float", precision=10, scale=0, nullable=true)
     */
    private $prestamoAnterior;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_cheque", type="float", precision=10, scale=0, nullable=false)
     */
    private $montoCheque;

    /**
     * @var float
     *
     * @ORM\Column(name="gastos_administrativos", type="float", precision=10, scale=0, nullable=true)
     */
    private $gastosAdministrativos;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pago", type="string", length=100, nullable=true)
     */
    private $tipoPago;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_solicitud", type="datetime", nullable=false)
     */
    private $fechaSolicitud;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_solicitud", type="float", precision=10, scale=0, nullable=false)
     */
    private $montoSolicitud;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_cuota", type="float", precision=10, scale=0, nullable=false)
     */
    private $montoCuota;

    /**
     * @var float
     *
     * @ORM\Column(name="monto_interes", type="float", precision=10, scale=0, nullable=true)
     */
    private $montoInteres;

    /**
     * @var float
     *
     * @ORM\Column(name="reintegro_interes", type="float", precision=10, scale=0, nullable=true)
     */
    private $reintegroInteres;

    /**
     * @var float
     *
     * @ORM\Column(name="total_prestamo", type="float", precision=10, scale=0, nullable=true)
     */
    private $totalPrestamo;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuario_id", type="integer", nullable=true)
     */
    private $usuarioId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=50, nullable=true)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_at", type="string", length=45, nullable=true)
     */
    private $updatedAt;

    /**
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     * })
     */
    private $persona;

    /**
     * @var \Data
     *
     * @ORM\ManyToOne(targetEntity="Data")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="data_id", referencedColumnName="id")
     * })
     */
    private $data;
    

    public function __construct() {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
    }
    
    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->created_at = new \DateTime();
    }
    
    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
       $this->setUpdatedAt(new \DateTime());
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
     * Set tipoPrestamoId
     *
     * @param integer $tipoPrestamoId
     * @return Prestamo
     */
    public function setTipoPrestamoId($tipoPrestamoId)
    {
        $this->tipoPrestamoId = $tipoPrestamoId;

        return $this;
    }

    /**
     * Get tipoPrestamoId
     *
     * @return integer 
     */
    public function getTipoPrestamoId()
    {
        return $this->tipoPrestamoId;
    }

    /**
     * Set nSolicitud
     *
     * @param string $nSolicitud
     * @return Prestamo
     */
    public function setNSolicitud($nSolicitud)
    {
        $this->nSolicitud = $nSolicitud;

        return $this;
    }

    /**
     * Get nSolicitud
     *
     * @return string 
     */
    public function getNSolicitud()
    {
        return $this->nSolicitud;
    }

    /**
     * Set nCuotas
     *
     * @param integer $nCuotas
     * @return Prestamo
     */
    public function setNCuotas($nCuotas)
    {
        $this->nCuotas = $nCuotas;

        return $this;
    }

    /**
     * Get nCuotas
     *
     * @return integer 
     */
    public function getNCuotas()
    {
        return $this->nCuotas;
    }

    /**
     * Set porcentajeInteres
     *
     * @param float $porcentajeInteres
     * @return Prestamo
     */
    public function setPorcentajeInteres($porcentajeInteres)
    {
        $this->porcentajeInteres = $porcentajeInteres;

        return $this;
    }

    /**
     * Get porcentajeInteres
     *
     * @return float 
     */
    public function getPorcentajeInteres()
    {
        return $this->porcentajeInteres;
    }

    /**
     * Set prestamoAnterior
     *
     * @param float $prestamoAnterior
     * @return Prestamo
     */
    public function setPrestamoAnterior($prestamoAnterior)
    {
        $this->prestamoAnterior = $prestamoAnterior;

        return $this;
    }

    /**
     * Get prestamoAnterior
     *
     * @return float 
     */
    public function getPrestamoAnterior()
    {
        return $this->prestamoAnterior;
    }

    /**
     * Set montoCheque
     *
     * @param float $montoCheque
     * @return Prestamo
     */
    public function setMontoCheque($montoCheque)
    {
        $this->montoCheque = $montoCheque;

        return $this;
    }

    /**
     * Get montoCheque
     *
     * @return float 
     */
    public function getMontoCheque()
    {
        return $this->montoCheque;
    }

    /**
     * Set gastosAdministrativos
     *
     * @param float $gastosAdministrativos
     * @return Prestamo
     */
    public function setGastosAdministrativos($gastosAdministrativos)
    {
        $this->gastosAdministrativos = $gastosAdministrativos;

        return $this;
    }

    /**
     * Get gastosAdministrativos
     *
     * @return float 
     */
    public function getGastosAdministrativos()
    {
        return $this->gastosAdministrativos;
    }

    /**
     * Set tipoPago
     *
     * @param string $tipoPago
     * @return Prestamo
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;

        return $this;
    }

    /**
     * Get tipoPago
     *
     * @return string 
     */
    public function getTipoPago()
    {
        return $this->tipoPago;
    }

    /**
     * Set fechaSolicitud
     *
     * @param \DateTime $fechaSolicitud
     * @return Prestamo
     */
    public function setFechaSolicitud($fechaSolicitud)
    {
        $this->fechaSolicitud = $fechaSolicitud;

        return $this;
    }

    /**
     * Get fechaSolicitud
     *
     * @return \DateTime 
     */
    public function getFechaSolicitud()
    {
        return $this->fechaSolicitud;
    }

    /**
     * Set montoSolicitud
     *
     * @param float $montoSolicitud
     * @return Prestamo
     */
    public function setMontoSolicitud($montoSolicitud)
    {
        $this->montoSolicitud = $montoSolicitud;

        return $this;
    }

    /**
     * Get montoSolicitud
     *
     * @return float 
     */
    public function getMontoSolicitud()
    {
        return $this->montoSolicitud;
    }

    /**
     * Set montoCuota
     *
     * @param float $montoCuota
     * @return Prestamo
     */
    public function setMontoCuota($montoCuota)
    {
        $this->montoCuota = $montoCuota;

        return $this;
    }

    /**
     * Get montoCuota
     *
     * @return float 
     */
    public function getMontoCuota()
    {
        return $this->montoCuota;
    }

    /**
     * Set montoInteres
     *
     * @param float $montoInteres
     * @return Prestamo
     */
    public function setMontoInteres($montoInteres)
    {
        $this->montoInteres = $montoInteres;

        return $this;
    }

    /**
     * Get montoInteres
     *
     * @return float 
     */
    public function getMontoInteres()
    {
        return $this->montoInteres;
    }

    /**
     * Set reintegroInteres
     *
     * @param float $reintegroInteres
     * @return Prestamo
     */
    public function setReintegroInteres($reintegroInteres)
    {
        $this->reintegroInteres = $reintegroInteres;

        return $this;
    }

    /**
     * Get reintegroInteres
     *
     * @return float 
     */
    public function getReintegroInteres()
    {
        return $this->reintegroInteres;
    }

    /**
     * Set totalPrestamo
     *
     * @param float $totalPrestamo
     * @return Prestamo
     */
    public function setTotalPrestamo($totalPrestamo)
    {
        $this->totalPrestamo = $totalPrestamo;

        return $this;
    }

    /**
     * Get totalPrestamo
     *
     * @return float 
     */
    public function getTotalPrestamo()
    {
        return $this->totalPrestamo;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     * @return Prestamo
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return integer 
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Prestamo
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Prestamo
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param string $updatedAt
     * @return Prestamo
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return string 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set persona
     *
     * @param \Saving\BoxBundle\Entity\Persona $persona
     * @return Prestamo
     */
    public function setPersona(\Saving\BoxBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \Saving\BoxBundle\Entity\Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set data
     *
     * @param \Saving\BoxBundle\Entity\Data $data
     * @return Prestamo
     */
    public function setData(\Saving\BoxBundle\Entity\Data $data = null)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \Saving\BoxBundle\Entity\Data 
     */
    public function getData()
    {
        return $this->data;
    }
}
