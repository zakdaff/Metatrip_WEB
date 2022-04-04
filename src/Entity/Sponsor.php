<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sponsor
 *
 * @ORM\Table(name="sponsor", indexes={@ORM\Index(name="sponsor_ibfk_1", columns={"ide"})})
 * @ORM\Entity
 */
class Sponsor
{
    /**
     * @var int
     *
     * @ORM\Column(name="ids", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ids;

    /**
     * @var string
     *
     * @ORM\Column(name="nomsponsor", type="string", length=20, nullable=false)
     */
    private $nomsponsor;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=20, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=20, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sp", type="date", nullable=false)
     */
    private $dateSp;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_sp", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixSp;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ide", referencedColumnName="Ide")
     * })
     */
    private $ide;


}
