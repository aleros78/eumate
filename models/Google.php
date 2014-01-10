<?php
/**
 * Created by PhpStorm.
 * User: alessandro 
 * Date: 10/01/14
 * Time: 11.22
 * 
 * @author aleros78<at>gmail.com
 */
namespace pff\models;

/**
 * @Entity
 * @Table(name="utenti_google")
 */
class Google extends \pff\AModel {

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;
    /**
     * @Column(length=100)
     */
    private $identifier;
    /**
     * @Column(length=100)
     */
    private $profile;
    /**
     * @Column(length=100)
     */
    private $photo;
    /**
     * @Column(length=100)
     */
    private $email;
    /**
     * @ManyToOne(targetEntity="utente")
     * @JoinColumn(name="id_utente", referencedColumnName="id")
     *
     */
    private $utente;

    function __construct(){
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
    }

    public function getIdentifier() {
        return $this->identifier;
    }

    public function setPhoto($photo) {
        $this->photo = $photo;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function setProfile($profile) {
        $this->profile = $profile;
    }

    public function getProfile() {
        return $this->profile;
    }

    public function setUtente($utente) {
        $this->utente = $utente;
    }

    public function getUtente() {
        return $this->utente;
    }

}