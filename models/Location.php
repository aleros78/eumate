<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro
 * Date: 13/06/13
 * Time: 15.11
 * To change this template use File | Settings | File Templates.
 */
namespace pff\models;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="pl_locations")
 */
class Location extends ATranslator {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(length=100)
     */
    private $location;

        /**
     * @Column(length=100)
     */
    private $nome_it;

    /**
     * @Column(length=100)
     */
    private $nome_en;

    /**
     * @Column(type="text")
     */
    private $descrizione_it;

    /**
     * @Column(type="text")
     */
    private $descrizione_en;

    /**
     * @Column(type="boolean")
     */
    private $attivo;

    /**
     * @OneToMany(targetEntity="posto", mappedBy="location")
     */
    private $posti;

    function __construct(){
        $posti = new ArrayCollection();
    }

    public function getNome(){
        return $this->getTranslated('nome');
    }
    public function getDescrizione(){
        return $this->getTranslated('descrizione');
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
     * @param mixed $descrizione_en
     */
    public function setDescrizioneEn($descrizione_en)
    {
        $this->descrizione_en = $descrizione_en;
    }

    /**
     * @return mixed
     */
    public function getDescrizioneEn()
    {
        return $this->descrizione_en;
    }

    /**
     * @param mixed $descrizione_it
     */
    public function setDescrizioneIt($descrizione_it)
    {
        $this->descrizione_it = $descrizione_it;
    }

    /**
     * @return mixed
     */
    public function getDescrizioneIt()
    {
        return $this->descrizione_it;
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
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $nome_en
     */
    public function setNomeEn($nome_en)
    {
        $this->nome_en = $nome_en;
    }

    /**
     * @return mixed
     */
    public function getNomeEn()
    {
        return $this->nome_en;
    }

    /**
     * @param mixed $nome_it
     */
    public function setNomeIt($nome_it)
    {
        $this->nome_it = $nome_it;
    }

    /**
     * @return mixed
     */
    public function getNomeIt()
    {
        return $this->nome_it;
    }


}