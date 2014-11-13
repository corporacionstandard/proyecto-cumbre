<?php

namespace Saving\BoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="persona", uniqueConstraints={@ORM\UniqueConstraint(name="ci_UNIQUE", columns={"ci"})}, indexes={@ORM\Index(name="fk_persona_banco", columns={"banco_id"}), @ORM\Index(name="fk_persona_data", columns={"data_id"})})
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity
 */
class Persona
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
     * @var string
     *
     * @ORM\Column(name="ci", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $ci;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_1", type="text", nullable=false)
     */
    private $nombre1;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_2", type="text", nullable=false)
     */
    private $nombre2;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_1", type="text", nullable=false)
     */
    private $apellido1;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_2", type="text", nullable=false)
     */
    private $apellido2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nac", type="date", nullable=false)
     */
    private $fechaNac;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=false)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="text", nullable=true)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="tlf_movil", type="decimal", precision=11, scale=0, nullable=true)
     */
    private $tlfMovil;

    /**
     * @var string
     *
     * @ORM\Column(name="tlf_fijo", type="decimal", precision=11, scale=0, nullable=true)
     */
    private $tlfFijo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="text", nullable=true)
     */
    private $facebookId;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter_id", type="text", nullable=true)
     */
    private $twitterId;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="text", nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="n_cuenta", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $nCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="t_cuenta", type="string", length=1, nullable=true)
     */
    private $tCuenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuario_id", type="integer", nullable=false)
     */
    private $usuarioId;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=80, nullable=false)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \Banco
     *
     * @ORM\ManyToOne(targetEntity="Banco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="banco_id", referencedColumnName="id")
     * })
     */
    private $banco;

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
    
    public function __toString() 
    {
        //return $this->getNombre1()." ".$this->getApellido1();
        return $this->getNombre1();
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
     * Set ci
     *
     * @param string $ci
     * @return Persona
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return string 
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * Set nombre1
     *
     * @param string $nombre1
     * @return Persona
     */
    public function setNombre1($nombre1)
    {
        $this->nombre1 = $nombre1;

        return $this;
    }

    /**
     * Get nombre1
     *
     * @return string 
     */
    public function getNombre1()
    {
        return $this->nombre1;
    }

    /**
     * Set nombre2
     *
     * @param string $nombre2
     * @return Persona
     */
    public function setNombre2($nombre2)
    {
        $this->nombre2 = $nombre2;

        return $this;
    }

    /**
     * Get nombre2
     *
     * @return string 
     */
    public function getNombre2()
    {
        return $this->nombre2;
    }

    /**
     * Set apellido1
     *
     * @param string $apellido1
     * @return Persona
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Get apellido1
     *
     * @return string 
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     * @return Persona
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Get apellido2
     *
     * @return string 
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set fechaNac
     *
     * @param \DateTime $fechaNac
     * @return Persona
     */
    public function setFechaNac($fechaNac)
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }

    /**
     * Get fechaNac
     *
     * @return \DateTime 
     */
    public function getFechaNac()
    {
        return $this->fechaNac;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Persona
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Persona
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set tlfMovil
     *
     * @param string $tlfMovil
     * @return Persona
     */
    public function setTlfMovil($tlfMovil)
    {
        $this->tlfMovil = $tlfMovil;

        return $this;
    }

    /**
     * Get tlfMovil
     *
     * @return string 
     */
    public function getTlfMovil()
    {
        return $this->tlfMovil;
    }

    /**
     * Set tlfFijo
     *
     * @param string $tlfFijo
     * @return Persona
     */
    public function setTlfFijo($tlfFijo)
    {
        $this->tlfFijo = $tlfFijo;

        return $this;
    }

    /**
     * Get tlfFijo
     *
     * @return string 
     */
    public function getTlfFijo()
    {
        return $this->tlfFijo;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Persona
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set facebookId
     *
     * @param string $facebookId
     * @return Persona
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string 
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set twitterId
     *
     * @param string $twitterId
     * @return Persona
     */
    public function setTwitterId($twitterId)
    {
        $this->twitterId = $twitterId;

        return $this;
    }

    /**
     * Get twitterId
     *
     * @return string 
     */
    public function getTwitterId()
    {
        return $this->twitterId;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Persona
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
     * Set nCuenta
     *
     * @param string $nCuenta
     * @return Persona
     */
    public function setNCuenta($nCuenta)
    {
        $this->nCuenta = $nCuenta;

        return $this;
    }

    /**
     * Get nCuenta
     *
     * @return string 
     */
    public function getNCuenta()
    {
        return $this->nCuenta;
    }

    /**
     * Set tCuenta
     *
     * @param string $tCuenta
     * @return Persona
     */
    public function setTCuenta($tCuenta)
    {
        $this->tCuenta = $tCuenta;

        return $this;
    }

    /**
     * Get tCuenta
     *
     * @return string 
     */
    public function getTCuenta()
    {
        return $this->tCuenta;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     * @return Persona
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
     * @return Persona
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
     * @return Persona
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
     * @param \DateTime $updatedAt
     * @return Persona
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set banco
     *
     * @param \Saving\BoxBundle\Entity\Banco $banco
     * @return Persona
     */
    public function setBanco(\Saving\BoxBundle\Entity\Banco $banco = null)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco
     *
     * @return \Saving\BoxBundle\Entity\Banco 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set data
     *
     * @param \Saving\BoxBundle\Entity\Data $data
     * @return Persona
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
