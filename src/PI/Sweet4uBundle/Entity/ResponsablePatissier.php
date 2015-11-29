<?php

namespace PI\Sweet4uBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponsablePatissier
 *
 * @ORM\Table(name="responsable_patissier")
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


}
