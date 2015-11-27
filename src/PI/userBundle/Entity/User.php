<?php


namespace PI\userBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * @ORM\Column(type="string")
     */
    protected $nom;
    /**
     * @ORM\Column(type="string")
     */
    protected $prenom;
      /**
     * @ORM\Column(type="string")
     */
    protected $adresse;
    /**
     *
     * @ORM\Column( type="date")
     */
    protected $dateNaissance;

    /**
     *
     * @ORM\Column( type="integer")
     */
    protected $cin;

    /**
     * @ORM\Column( type="string")
     */
    protected $login;

    /**
     * @ORM\Column type="string")
     */
    protected $pwd;
    
      /**
     * @ORM\Column type="string")
     */
    protected $nompatisserie;
    
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getCin() {
        return $this->cin;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPwd() {
        return $this->pwd;
    }

    public function getNompatisserie() {
        return $this->nompatisserie;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    public function setCin($cin) {
        $this->cin = $cin;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setPwd($pwd) {
        $this->pwd = $pwd;
    }

    public function setNompatisserie($nompatisserie) {
        $this->nompatisserie = $nompatisserie;
    }

public function getParent()

 {

 return 'FOSUserBundle';

 }
    
    
}