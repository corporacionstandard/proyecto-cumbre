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

    function getId() {
        return $this->id;
    }

    function getCi() {
        return $this->ci;
    }

    function getNombre1() {
        return $this->nombre1;
    }

    function getNombre2() {
        return $this->nombre2;
    }

    function getApellido1() {
        return $this->apellido1;
    }

    function getApellido2() {
        return $this->apellido2;
    }

    function getFechaNac() {
        return $this->fechaNac;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getImg() {
        return $this->img;
    }

    function getTlfMovil() {
        return $this->tlfMovil;
    }

    function getTlfFijo() {
        return $this->tlfFijo;
    }

    function getEmail() {
        return $this->email;
    }

    function getFacebookId() {
        return $this->facebookId;
    }

    function getTwitterId() {
        return $this->twitterId;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getNCuenta() {
        return $this->nCuenta;
    }

    function getTCuenta() {
        return $this->tCuenta;
    }

    function getUsuarioId() {
        return $this->usuarioId;
    }

    function getIp() {
        return $this->ip;
    }

    function getCreatedAt() {
        return $this->createdAt;
    }

    function getUpdatedAt() {
        return $this->updatedAt;
    }

    function getBanco() {
        return $this->banco;
    }

    function getData() {
        return $this->data;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCi($ci) {
        $this->ci = $ci;
    }

    function setNombre1($nombre1) {
        $this->nombre1 = $nombre1;
    }

    function setNombre2($nombre2) {
        $this->nombre2 = $nombre2;
    }

    function setApellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }

    function setApellido2($apellido2) {
        $this->apellido2 = $apellido2;
    }

    function setFechaNac(\DateTime $fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setImg($img) {
        $this->img = $img;
    }

    function setTlfMovil($tlfMovil) {
        $this->tlfMovil = $tlfMovil;
    }

    function setTlfFijo($tlfFijo) {
        $this->tlfFijo = $tlfFijo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setFacebookId($facebookId) {
        $this->facebookId = $facebookId;
    }

    function setTwitterId($twitterId) {
        $this->twitterId = $twitterId;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setNCuenta($nCuenta) {
        $this->nCuenta = $nCuenta;
    }

    function setTCuenta($tCuenta) {
        $this->tCuenta = $tCuenta;
    }

    function setUsuarioId($usuarioId) {
        $this->usuarioId = $usuarioId;
    }

    function setIp($ip) {
        $this->ip = $ip;
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

    function setBanco(\Banco $banco) {
        $this->banco = $banco;
    }

    function setData(\Data $data) {
        $this->data = $data;
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
}
