<?php

namespace PI\Sweet4uBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coffret
 *
 * @ORM\Table(name="coffret", indexes={@ORM\Index(name="id-fos", columns={"id-fos"})})
 * @ORM\Entity
 */
class Coffret
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbPieces", type="integer", nullable=false)
     */
    private $nbpieces;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer", nullable=false)
     */
    private $stock;

//    /**
//     * @var \PI\Sweet4uBundle\Entity\FosUser
//     *
//     * @ORM\ManyToOne(targetEntity="PI\Sweet4uBundle\Entity\FosUser")
//     * @ORM\JoinColumns({
//     *   @ORM\JoinColumn(name="id-fos", referencedColumnName="id")
//     * })
//     */
//    private $idFos;

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getNbpieces() {
        return $this->nbpieces;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getImage() {
        return $this->image;
    }

    public function getStock() {
        return $this->stock;
    }

//    public function getIdFos() {
//        return $this->idFos;
//    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setNbpieces($nbpieces) {
        $this->nbpieces = $nbpieces;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setStock($stock) {
        $this->stock = $stock;
    }

//    public function setIdFos(\PI\Sweet4uBundle\Entity\FosUser $idFos) {
//        $this->idFos = $idFos;
//    }


}
