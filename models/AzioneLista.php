<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro
 * Date: 13/06/13
 * Time: 18.49
 * To change this template use File | Settings | File Templates.
 */
namespace pff\models;

/**
 * @Entity
 * @Table(name="vv_azioni_lista")
 */
class AzioneLista extends \pff\AModel {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(length=100)
     */
    private $azione;

    /**
     * @Column(length=100)
     */
    private $descrizione;

    function __construct(){
    }

    /**
     * @param mixed $azione
     */
    public function setAzione($azione)
    {
        $this->azione = $azione;
    }

    /**
     * @return mixed
     */
    public function getAzione()
    {
        return $this->azione;
    }

    /**
     * @param mixed $descrizione
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }

    /**
     * @return mixed
     */
    public function getDescrizione()
    {
        return $this->descrizione;
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


}