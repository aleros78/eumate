<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro
 * Date: 13/06/13
 * Time: 15.17
 * To change this template use File | Settings | File Templates.
 */
namespace pff\models;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="pl_posti")
 */
class Posto extends \pff\AModel {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="text")
     */
    private $posto;

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
     * @Column(type="text")
     */
    private $storia_it;

    /**
     * @Column(type="text")
     */
    private $storia_en;

    /**
     * @Column(type="text")
     */
    private $back_it;

    /**
     * @Column(type="text")
     */
    private $back_en;

    /**
     * @Column(type="text")
     */
    private $note_it;

    /**
     * @Column(type="text")
     */
    private $note_en;

    /**
     * @Column(type="boolean")
     */
    private $attivo;

    /**
     * @ManyToOne(targetEntity="location", inversedBy="posti")
     * @JoinColumn(name="id_location", referencedColumnName="id")
     *
     */
    private $location;

    /**
     * @ManyToOne(targetEntity="citta", inversedBy="posti")
     * @JoinColumn(name="id_citta", referencedColumnName="id")
     *
     */
    private $citta;

    /**
     * @ManyToOne(targetEntity="regione", inversedBy="posti")
     * @JoinColumn(name="id_regione", referencedColumnName="id")
     *
     */
    private $regione;

    /**
     * @OneToMany(targetEntity="personaggio", mappedBy="posto")
     */
    private $personaggi;


    function __construct(){
        $this->personaggi = new ArrayCollection();
    }

    public function getNome(){
        return $this->getTranslated('nome');
    }
    public function getDescrizione(){
        return $this->getTranslated('descrizione');
    }
    public function getStoria(){
        return $this->getTranslated('storia');
    }
    public function getBack(){
        return $this->getTranslated('back');
    }
    public function getNote(){
        return $this->getTranslated('note');
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
     * @param mixed $back_en
     */
    public function setBackEn($back_en)
    {
        $this->back_en = $back_en;
    }

    /**
     * @return mixed
     */
    public function getBackEn()
    {
        return $this->back_en;
    }

    /**
     * @param mixed $back_it
     */
    public function setBackIt($back_it)
    {
        $this->back_it = $back_it;
    }

    /**
     * @return mixed
     */
    public function getBackIt()
    {
        return $this->back_it;
    }

    /**
     * @param mixed $citta
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;
    }

    /**
     * @return mixed
     */
    public function getCitta()
    {
        return $this->citta;
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

    /**
     * @param mixed $note_en
     */
    public function setNoteEn($note_en)
    {
        $this->note_en = $note_en;
    }

    /**
     * @return mixed
     */
    public function getNoteEn()
    {
        return $this->note_en;
    }

    /**
     * @param mixed $note_it
     */
    public function setNoteIt($note_it)
    {
        $this->note_it = $note_it;
    }

    /**
     * @return mixed
     */
    public function getNoteIt()
    {
        return $this->note_it;
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
     * @param mixed $regione
     */
    public function setRegione($regione)
    {
        $this->regione = $regione;
    }

    /**
     * @return mixed
     */
    public function getRegione()
    {
        return $this->regione;
    }

    /**
     * @param mixed $storia_en
     */
    public function setStoriaEn($storia_en)
    {
        $this->storia_en = $storia_en;
    }

    /**
     * @return mixed
     */
    public function getStoriaEn()
    {
        return $this->storia_en;
    }

    /**
     * @param mixed $storia_it
     */
    public function setStoriaIt($storia_it)
    {
        $this->storia_it = $storia_it;
    }

    /**
     * @return mixed
     */
    public function getStoriaIt()
    {
        return $this->storia_it;
    }



}