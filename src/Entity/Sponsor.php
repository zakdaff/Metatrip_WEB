<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


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
     * @Assert\NotBlank
     * @ORM\Column(name="tel", type="string", length=20, nullable=false)
     */
    private $tel;

    /**
     * @var string
     * @Assert\NotBlank
     * @ORM\Column(name="email", type="string", length=20, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @Assert\NotBlank

     * @ORM\Column(name="date_sp", type="date", nullable=false)
     */
    private $dateSp;

    /**
     * @var float
     * @Assert\NotBlank
     * @ORM\Column(name="prix_sp", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixSp;

    /**
     * @var string
     * @Assert\NotBlank
     * @Assert\Positive
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ide", referencedColumnName="Ide")
     * })
     */
    private $ide;

    public function getIds(): ?int
    {
        return $this->ids;
    }

    public function getNomsponsor(): ?string
    {
        return $this->nomsponsor;
    }

    public function setNomsponsor(string $nomsponsor): self
    {
        $this->nomsponsor = $nomsponsor;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateSp(): ?\DateTimeInterface
    {
        return $this->dateSp;
    }

    public function setDateSp(\DateTimeInterface $dateSp): self
    {
        $this->dateSp = $dateSp;

        return $this;
    }

    public function getPrixSp(): ?float
    {
        return $this->prixSp;
    }

    public function setPrixSp(float $prixSp): self
    {
        $this->prixSp = $prixSp;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getIde(): ?Evenement
    {
        return $this->ide;
    }

    public function setIde(?Evenement $ide): self
    {
        $this->ide = $ide;

        return $this;
    }


}
