<?php

namespace PI\Sweet4uBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="id_from", columns={"id_from", "id_to"}), @ORM\Index(name="id_to", columns={"id_to"}), @ORM\Index(name="IDX_CE606404323ABD72", columns={"id_from"})})
 * @ORM\Entity
 */
class Reclamation
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
     * @ORM\Column(name="sujet", type="string", length=255, nullable=false)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=false)
     */
    private $contenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="lu", type="integer", nullable=false)
     */
    private $lu;

    /**
     * @var \PI\Sweet4uBundle\Entity\Personne
     *
     * @ORM\ManyToOne(targetEntity="PI\Sweet4uBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_to", referencedColumnName="id")
     * })
     */
    private $idTo;

    /**
     * @var \PI\Sweet4uBundle\Entity\Personne
     *
     * @ORM\ManyToOne(targetEntity="PI\Sweet4uBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_from", referencedColumnName="id")
     * })
     */
    private $idFrom;


    function getId() {
        return $this->id;
    }

    function getSujet() {
        return $this->sujet;
    }

    function getContenu() {
        return $this->contenu;
    }

    function getLu() {
        return $this->lu;
    }

    function getIdTo() {
        return $this->idTo;
    }

    function getIdFrom() {
        return $this->idFrom;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSujet($sujet) {
        $this->sujet = $sujet;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    function setLu($lu) {
        $this->lu = $lu;
    }

    function setIdTo(\PI\Sweet4uBundle\Entity\Personne $idTo) {
        $this->idTo = $idTo;
    }

    function setIdFrom(\PI\Sweet4uBundle\Entity\Personne $idFrom) {
        $this->idFrom = $idFrom;
    }


}
