<?php

namespace PI\Sweet4uBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponsablePatissier
 *
 * @ORM\Table(name="responsable_patissier", indexes={@ORM\Index(name="id_p", columns={"id_p"})})
 * @ORM\Entity
 */
class ResponsablePatissier
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
     * @ORM\Column(name="patisserie", type="string", length=255, nullable=false)
     */
    private $patisserie;

    /**
     * @var \PI\Sweet4uBundle\Entity\Personne
     *
     * @ORM\ManyToOne(targetEntity="PI\Sweet4uBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_p", referencedColumnName="id")
     * })
     */
    private $idP;


}
