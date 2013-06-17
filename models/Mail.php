<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro
 * Date: 13/06/13
 * Time: 19.14
 * To change this template use File | Settings | File Templates.
 */
namespace pff\models;

/**
 * @Entity
 * @Table(name="pg_mail")
 */
class Mail extends \pff\AModel {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="personaggio", inversedBy="mail_inviate")
     * @JoinColumn(name="invia", referencedColumnName="id")
     *
     */
    private $invia;

    /**
     * @ManyToOne(targetEntity="personaggio", inversedBy="mail_ricevute")
     * @JoinColumn(name="ricevi", referencedColumnName="id")
     *
     */
    private $ricevi;

    /**
     * @Column(type="text")
     */
    private $messaggio;

    /**
     * @Column(length=100)
     */
    private $soggetto;

    /**
     * @Column(type="date")
     */
    private $data;

    /**
     * @Column(type="boolean")
     */
    private $aperta;

    /**
     * @Column(type="boolean")
     */
    private $vista_invia;

    /**
     * @Column(type="boolean")
     */
    private $vista_ricevi;

    function __construct(){
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $aperta
     */
    public function setAperta($aperta)
    {
        $this->aperta = $aperta;
    }

    /**
     * @return mixed
     */
    public function getAperta()
    {
        return $this->aperta;
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
     * @param mixed $invia
     */
    public function setInvia($invia)
    {
        $this->invia = $invia;
    }

    /**
     * @return mixed
     */
    public function getInvia()
    {
        return $this->invia;
    }

    /**
     * @param mixed $messaggio
     */
    public function setMessaggio($messaggio)
    {
        $this->messaggio = $messaggio;
    }

    /**
     * @return mixed
     */
    public function getMessaggio()
    {
        return $this->messaggio;
    }

    /**
     * @param mixed $ricevi
     */
    public function setRicevi($ricevi)
    {
        $this->ricevi = $ricevi;
    }

    /**
     * @return mixed
     */
    public function getRicevi()
    {
        return $this->ricevi;
    }

    /**
     * @param mixed $soggetto
     */
    public function setSoggetto($soggetto)
    {
        $this->soggetto = $soggetto;
    }

    /**
     * @return mixed
     */
    public function getSoggetto()
    {
        return $this->soggetto;
    }

    /**
     * @param mixed $vista_invia
     */
    public function setVistaInvia($vista_invia)
    {
        $this->vista_invia = $vista_invia;
    }

    /**
     * @return mixed
     */
    public function getVistaInvia()
    {
        return $this->vista_invia;
    }

    /**
     * @param mixed $vista_ricevi
     */
    public function setVistaRicevi($vista_ricevi)
    {
        $this->vista_ricevi = $vista_ricevi;
    }

    /**
     * @return mixed
     */
    public function getVistaRicevi()
    {
        return $this->vista_ricevi;
    }
    
}