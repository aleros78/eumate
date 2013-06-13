<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro
 * Date: 13/06/13
 * Time: 16.31
 * To change this template use File | Settings | File Templates.
 */
namespace pff\models;

/**
 * @Entity
 * @Table(name="vv_tipologia_utenti")
 */
class TipologiaUtenti extends \pff\AModel {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(length=100)
     */
    private $tipologia;

    /**
     * @OneToMany(targetEntity="Utente", mappedBy="tipologia")
     * @OrderBy({"ordine" = "DESC"})
     */
    private $utenti;

    function __construct(){
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTipologia($tipologia)
    {
        $this->tipologia = $tipologia;
    }

    public function getTipologia()
    {
        return $this->tipologia;
    }

    public function setUtenti($utenti)
    {
        $this->utenti = $utenti;
    }

    public function getUtenti()
    {
        return $this->utenti;
    }



}