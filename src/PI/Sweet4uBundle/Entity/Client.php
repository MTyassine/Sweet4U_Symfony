<?php

namespace PI\Sweet4uBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", indexes={@ORM\Index(name="id_p", columns={"id_p"})})
 * @ORM\Entity
 */
class Client
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
     * @var \PI\Sweet4uBundle\Entity\Personne
     *
     * @ORM\ManyToOne(targetEntity="PI\Sweet4uBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_p", referencedColumnName="id")
     * })
     */
    private $idP;


}
