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
    
}