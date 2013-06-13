<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro
 * Date: 13/06/13
 * Time: 19.08
 * To change this template use File | Settings | File Templates.
 */
namespace pff\models;

/**
 * @Entity
 * @Table(name="ge_messaggi")
 */
class Messaggi extends \pff\AModel {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(length=300)
     */
    private $messaggio;

    /**
     * @ManyToOne(targetEntity="personaggio")
     * @JoinColumn(name="id_personaggio", referencedColumnName="id")
     */
    private $personaggio;

    /**
     * @ManyToOne(targetEntity="gilda")
     * @JoinColumn(name="id_gilda", referencedColumnName="id", nullable=true)
     */
    private $gilda;

    /**
     * @ManyToOne(targetEntity="posto")
     * @JoinColumn(name="id_posto", referencedColumnName="id", nullable=true)
     *
     */
    private $posto;

    /**
     * @Column(type="date")
     */
    private $data;

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
     * @param mixed $gilda
     */
    public function setGilda($gilda)
    {
        $this->gilda = $gilda;
    }

    /**
     * @return mixed
     */
    public function getGilda()
    {
        return $this->gilda;
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
     * @param mixed $personaggio
     */
    public function setPersonaggio($personaggio)
    {
        $this->personaggio = $personaggio;
    }

    /**
     * @return mixed
     */
    public function getPersonaggio()
    {
        return $this->personaggio;
    }

    /**
     * @param mixed $posto
     */
    public function setPosto($posto)
    {
        $this->posto = $posto;
    }

    /**
     * @return mixed
     */
    public function getPosto()
    {
        return $this->posto;
    }


}