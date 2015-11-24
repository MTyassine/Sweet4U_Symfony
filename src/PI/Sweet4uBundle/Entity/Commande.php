<?php

namespace PI\Sweet4uBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="id_c", columns={"id_c", "id_rp"}), @ORM\Index(name="id_rp", columns={"id_rp"}), @ORM\Index(name="articles", columns={"articles"}), @ORM\Index(name="IDX_6EEAA67DC12C7510", columns={"id_c"})})
 * @ORM\Entity
 */
class Commande
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
     * @var boolean
     *
     * @ORM\Column(name="payement", type="boolean", nullable=false)
     */
    private $payement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validation", type="boolean", nullable=false)
     */
    private $validation;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_p", type="string", length=255, nullable=false)
     */
    private $modeP;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_l", type="string", length=255, nullable=false)
     */
    private $modeL;

    /**
     * @var string
     *
     * @ORM\Column(name="articles", type="string", length=255, nullable=false)
     */
    private $articles;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixTotal;

    /**
     * @var \PI\Sweet4uBundle\Entity\ResponsablePatissier
     *
     * @ORM\ManyToOne(targetEntity="PI\Sweet4uBundle\Entity\ResponsablePatissier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rp", referencedColumnName="id")
     * })
     */
    private $idRp;

    /**
     * @var \PI\Sweet4uBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="PI\Sweet4uBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_c", referencedColumnName="id")
     * })
     */
    private $idC;


    function getId() {
        return $this->id;
    }

    function getPayement() {
        return $this->payement;
    }

    function getValidation() {
        return $this->validation;
    }

    function getModeP() {
        return $this->modeP;
    }

    function getModeL() {
        return $this->modeL;
    }

    function getArticles() {
        return $this->articles;
    }

    function getPrixTotal() {
        return $this->prixTotal;
    }

    function getIdRp() {
        return $this->idRp;
    }

    function getIdC() {
        return $this->idC;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPayement($payement) {
        $this->payement = $payement;
    }

    function setValidation($validation) {
        $this->validation = $validation;
    }

    function setModeP($modeP) {
        $this->modeP = $modeP;
    }

    function setModeL($modeL) {
        $this->modeL = $modeL;
    }

    function setArticles($articles) {
        $this->articles = $articles;
    }

    function setPrixTotal($prixTotal) {
        $this->prixTotal = $prixTotal;
    }

    function setIdRp(\PI\Sweet4uBundle\Entity\ResponsablePatissier $idRp) {
        $this->idRp = $idRp;
    }

    function setIdC(\PI\Sweet4uBundle\Entity\Client $idC) {
        $this->idC = $idC;
    }


}
