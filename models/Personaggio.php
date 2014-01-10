<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro
 * Date: 13/06/13
 * Time: 16.57
 * To change this template use File | Settings | File Templates.
 */
namespace pff\models;

/**
 * @Entity
 * @Table(name="pg_personaggi")
 */
class Personaggio extends \pff\AModel {

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
     * @Column(type="text")
     */
    private $status;

    /**
     * @Column(type="integer")
     */
    private $att;

    /**
     * @Column(type="integer")
     */
    private $def;

    /**
     * @Column(type="integer")
     */
    private $int;

    /**
     * @Column(type="integer")
     */
    private $cha;

    /**
     * @Column(type="integer")
     */
    private $mov;

    /**
     * @Column(type="integer")
     */
    private $mov_rimanenti;

    /**
     * @Column(type="integer")
     */
    private $mov_last_reset_time;

    /**
     * @Column(type="integer")
     */
    private $pf;

    /**
     * @Column(type="integer")
     */
    private $pf_rimanenti;

    /**
     * @Column(type="integer")
     */
    private $pf_last_reset_time;

    /**
     * @Column(type="integer")
     */
    private $lev;

    /**
     * @Column(type="integer")
     */
    private $xp;

    /**
     * @Column(type="integer")
     */
    private $xp_next;

    /**
     * @ManyToOne(targetEntity="utente")
     * @JoinColumn(name="id_utente", referencedColumnName="id")
     *
     */
    private $utente;

    /**
     * @ManyToOne(targetEntity="posto", inversedBy="personaggi")
     * @JoinColumn(name="id_posto", referencedColumnName="id")
     *
     */
    private $posto;

    /**
     * @ManyToOne(targetEntity="gilda", inversedBy="personaggi")
     * @JoinColumn(name="id_gilda", referencedColumnName="id", nullable=true)
     *
     */
    private $gilda;

    function __construct(){
    }

    public function setInt($int) {
        $this->int = $int;
    }

    public function getInt() {
        return $this->int;
    }

    public function setAtt($att)
    {
        $this->att = $att;
    }

    public function getAtt()
    {
        return $this->att;
    }

    public function setCha($cha)
    {
        $this->cha = $cha;
    }

    public function getCha()
    {
        return $this->cha;
    }

    public function setDef($def)
    {
        $this->def = $def;
    }

    public function getDef()
    {
        return $this->def;
    }

    public function setGilda($gilda)
    {
        $this->gilda = $gilda;
    }

    public function getGilda()
    {
        return $this->gilda;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLev($lev)
    {
        $this->lev = $lev;
    }

    public function getLev()
    {
        return $this->lev;
    }

    public function setMov($mov)
    {
        $this->mov = $mov;
    }

    public function getMov()
    {
        return $this->mov;
    }

    public function setMovLastResetTime($mov_last_reset_time)
    {
        $this->mov_last_reset_time = $mov_last_reset_time;
    }

    public function getMovLastResetTime()
    {
        return $this->mov_last_reset_time;
    }

    public function setMovRimanenti($mov_rimanenti)
    {
        $this->mov_rimanenti = $mov_rimanenti;
    }

    public function getMovRimanenti()
    {
        return $this->mov_rimanenti;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setPf($pf)
    {
        $this->pf = $pf;
    }

    public function getPf()
    {
        return $this->pf;
    }

    public function setPfLastResetTime($pf_last_reset_time)
    {
        $this->pf_last_reset_time = $pf_last_reset_time;
    }

    public function getPfLastResetTime()
    {
        return $this->pf_last_reset_time;
    }

    public function setPfRimanenti($pf_rimanenti)
    {
        $this->pf_rimanenti = $pf_rimanenti;
    }

    public function getPfRimanenti()
    {
        return $this->pf_rimanenti;
    }

    public function setPosto($posto)
    {
        $this->posto = $posto;
    }

    public function getPosto()
    {
        return $this->posto;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setUtente($utente)
    {
        $this->utente = $utente;
    }

    public function getUtente()
    {
        return $this->utente;
    }

    public function setXp($xp)
    {
        $this->xp = $xp;
    }

    public function getXp()
    {
        return $this->xp;
    }

    public function setXpNext($xp_next)
    {
        $this->xp_next = $xp_next;
    }

    public function getXpNext()
    {
        return $this->xp_next;
    }
    
}