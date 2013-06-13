<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro
 * Date: 13/06/13
 * Time: 16.27
 * To change this template use File | Settings | File Templates.
 */
namespace pff\models;
use pff\AModel;

/**
 * @Entity
 * @Table(name="ge_utenti")
 */
class Utente extends AModel {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(length=100)
     */
    private $nome;

    /**
     * @Column(length=100)
     */
    private $cognome;

    /**
     * @Column(length=100)
     */
    private $email;

    /**
     * @Column(length=32)
     */
    private $password;

    /**
     * @Column(type="date")
     */
    private $data_registrazione;

    /**
     * @Column(length=100)
     */
    private $ip_registrazione;

    /**
     * @Column(type="integer")
     */
    private $numero_login;

    /**
     * @Column(length=100)
     */
    private $ip_ultimo_login;

    /**
     * @Column(type="boolean",options={"default"=1})
     */
    private $attivo = 1;


    /**
     * @ManyToOne(targetEntity="TipologiaUtenti", inversedBy="utenti")
     * @JoinColumn(name="id_tipologia", referencedColumnName="id")
     *
     */
    private $tipologia;


    public function __construct() {
    }

    /**
     * @param mixed $attivo
     */
    public function setAttivo($attivo)
    {
        $this->attivo = $attivo;
    }

    /**
     * @return mixed
     */
    public function getAttivo()
    {
        return $this->attivo;
    }

    /**
     * @param mixed $cognome
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    /**
     * @return mixed
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * @param mixed $data_registrazione
     */
    public function setDataRegistrazione($data_registrazione)
    {
        $this->data_registrazione = $data_registrazione;
    }

    /**
     * @return mixed
     */
    public function getDataRegistrazione()
    {
        return $this->data_registrazione;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $ip_registrazione
     */
    public function setIpRegistrazione($ip_registrazione)
    {
        $this->ip_registrazione = $ip_registrazione;
    }

    /**
     * @return mixed
     */
    public function getIpRegistrazione()
    {
        return $this->ip_registrazione;
    }

    /**
     * @param mixed $ip_ultimo_login
     */
    public function setIpUltimoLogin($ip_ultimo_login)
    {
        $this->ip_ultimo_login = $ip_ultimo_login;
    }

    /**
     * @return mixed
     */
    public function getIpUltimoLogin()
    {
        return $this->ip_ultimo_login;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $numero_login
     */
    public function setNumeroLogin($numero_login)
    {
        $this->numero_login = $numero_login;
    }

    /**
     * @return mixed
     */
    public function getNumeroLogin()
    {
        return $this->numero_login;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $tipologia
     */
    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;
    }

    /**
     * @return mixed
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }



}
