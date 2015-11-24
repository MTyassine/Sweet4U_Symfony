<?php

namespace PI\Sweet4uBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unecommande
 *
 * @ORM\Table(name="unecommande", indexes={@ORM\Index(name="id_commande", columns={"id_commande"})})
 * @ORM\Entity
 */
class Unecommande
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
     * @var integer
     *
     * @ORM\Column(name="id_article", type="integer", nullable=false)
     */
    private $idArticle;

    /**
     * @var float
     *
     * @ORM\Column(name="quantite", type="float", precision=10, scale=0, nullable=false)
     */
    private $quantite;

    /**
     * @var \PI\Sweet4uBundle\Entity\Commande
     *
     * @ORM\ManyToOne(targetEntity="PI\Sweet4uBundle\Entity\Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commande", referencedColumnName="id")
     * })
     */
    private $idCommande;


    function getId() {
        return $this->id;
    }

    function getIdArticle() {
        return $this->idArticle;
    }

    function getQuantite() {
        return $this->quantite;
    }

    function getIdCommande() {
        return $this->idCommande;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdArticle($idArticle) {
        $this->idArticle = $idArticle;
    }

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    function setIdCommande(\PI\Sweet4uBundle\Entity\Commande $idCommande) {
        $this->idCommande = $idCommande;
    }


}
