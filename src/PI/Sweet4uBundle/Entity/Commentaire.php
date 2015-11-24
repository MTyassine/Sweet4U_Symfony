<?php

namespace PI\Sweet4uBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="id_p", columns={"id_p", "id_article"}), @ORM\Index(name="id_article", columns={"id_article"}), @ORM\Index(name="IDX_67F068BC459234CE", columns={"id_p"})})
 * @ORM\Entity
 */
class Commentaire
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=false)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="Signalement", type="integer", nullable=false)
     */
    private $signalement;

    /**
     * @var integer
     *
     * @ORM\Column(name="Visible", type="integer", nullable=false)
     */
    private $visible;

    /**
     * @var \PI\Sweet4uBundle\Entity\Article
     *
     * @ORM\ManyToOne(targetEntity="PI\Sweet4uBundle\Entity\Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_article", referencedColumnName="id")
     * })
     */
    private $idArticle;

    /**
     * @var \PI\Sweet4uBundle\Entity\Personne
     *
     * @ORM\ManyToOne(targetEntity="PI\Sweet4uBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_p", referencedColumnName="id")
     * })
     */
    private $idP;

    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getCommentaire() {
        return $this->commentaire;
    }

    function getSignalement() {
        return $this->signalement;
    }

    function getVisible() {
        return $this->visible;
    }

    function getIdArticle() {
        return $this->idArticle;
    }

    function getIdP() {
        return $this->idP;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate(\DateTime $date) {
        $this->date = $date;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    function setSignalement($signalement) {
        $this->signalement = $signalement;
    }

    function setVisible($visible) {
        $this->visible = $visible;
    }

    function setIdArticle(\PI\Sweet4uBundle\Entity\Article $idArticle) {
        $this->idArticle = $idArticle;
    }

    function setIdP(\PI\Sweet4uBundle\Entity\Personne $idP) {
        $this->idP = $idP;
    }


}
