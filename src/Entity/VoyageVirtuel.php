<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoyageVirtuel
 *
 * @ORM\Table(name="voyage_virtuel", uniqueConstraints={@ORM\UniqueConstraint(name="Idvv", columns={"Idvv"})}, indexes={@ORM\Index(name="FK_abb", columns={"Ida"}), @ORM\Index(name="FK_vv", columns={"Idv"})})
 * @ORM\Entity
 */
class VoyageVirtuel
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idvv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvv;

    /**
     * @var string
     *
     * @ORM\Column(name="Image_v", type="string", length=255, nullable=false)
     */
    private $imageV;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Idv", type="integer", nullable=true)
     */
    private $idv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ida", type="integer", nullable=true)
     */
    private $ida;

    /**
     * @var string
     *
     * @ORM\Column(name="Video", type="string", length=255, nullable=false)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;


}
