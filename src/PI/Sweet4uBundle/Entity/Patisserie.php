<?php

namespace PI\Sweet4uBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patisserie
 *
 * @ORM\Table(name="patisserie", indexes={@ORM\Index(name="id_rp", columns={"id_rp"})})
 * @ORM\Entity
 */
class Patisserie
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
     * @ORM\Column(name="delegation", type="string", length=255, nullable=false)
     */
    private $delegation;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_postal", type="integer", nullable=false)
     */
    private $codePostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="x", type="integer", nullable=true)
     */
    private $x;

    /**
     * @var integer
     *
     * @ORM\Column(name="y", type="integer", nullable=true)
     */
    private $y;

    /**
     * @var \PI\Sweet4uBundle\Entity\ResponsablePatissier
     *
     * @ORM\ManyToOne(targetEntity="PI\Sweet4uBundle\Entity\ResponsablePatissier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rp", referencedColumnName="id")
     * })
     */
    private $idRp;


}
