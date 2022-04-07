<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voyage
 *
 * @ORM\Table(name="voyage")
 * @ORM\Entity
 */
class Voyage
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idv;

    /**
     * @var string
     *
     * @ORM\Column(name="Pays", type="string", length=20, nullable=false)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="Image_pays", type="string", length=50, nullable=false)
     */
    private $imagePays;

    public function getIdv(): ?int
    {
        return $this->idv;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getImagePays(): ?string
    {
        return $this->imagePays;
    }

    public function setImagePays(string $imagePays): self
    {
        $this->imagePays = $imagePays;

        return $this;
    }


}
