<?php

namespace PI\Sweet4uBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catalogue
 *
 * @ORM\Table(name="catalogue", indexes={@ORM\Index(name="id_rp", columns={"id_art"})})
 * @ORM\Entity
 */
class Catalogue
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="string", length=255, nullable=false)
     */
    private $pic;

    /**
     * @var \PI\Sweet4uBundle\Entity\Article
     *
     * @ORM\ManyToOne(targetEntity="PI\Sweet4uBundle\Entity\Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_art", referencedColumnName="id")
     * })
     */
    private $idArt;


}
