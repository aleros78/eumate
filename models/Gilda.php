<?php
/**
 * Created by JetBrains PhpStorm.
 * User: alessandro
 * Date: 13/06/13
 * Time: 19.04
 * To change this template use File | Settings | File Templates.
 */
namespace pff\models;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="pg_gilde")
 */
class Gilda extends \pff\AModel {

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
    private $descrizione;

    /**
     * @OneToMany(targetEntity="personaggio", mappedBy="gilda")
     */
    private $personaggi;

    /**
     * @Column(type="boolean")
     */
    private $attivo;

    function __construct(){
        $this->personaggi = new ArrayCollection();
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
     * @param mixed $personaggi
     */
    public function setPersonaggi($personaggi)
    {
        $this->personaggi = $personaggi;
    }

    /**
     * @return mixed
     */
    public function getPersonaggi()
    {
        return $this->personaggi;
    }



}