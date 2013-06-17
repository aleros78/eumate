<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro
 * Date: 13/06/13
 * Time: 16.36
 * To change this template use File | Settings | File Templates.
 */
namespace pff\models;
use pff\AModel;

/**
 * @Entity
 * @Table(name="pl_riferimenti_posti")
 */
class PostoRiferimento extends AModel {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="posto")
     * @JoinColumn(name="id_posto", referencedColumnName="id")
     *
     */
    private $posto;

    /**
     * @ManyToOne(targetEntity="posto")
     * @JoinColumn(name="id_posto_riferimento", referencedColumnName="id")
     *
     */
    private $riferimento;


    function __construct(){
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

    /**
     * @param mixed $riferimento
     */
    public function setRiferimento($riferimento)
    {
        $this->riferimento = $riferimento;
    }

    /**
     * @return mixed
     */
    public function getRiferimento()
    {
        return $this->riferimento;
    }



}