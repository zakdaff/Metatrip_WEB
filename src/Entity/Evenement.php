<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="Ide", type="integer", nullable=false)
     * @ORM\Id
     * @Assert\NotBlank
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ide;

    /**
     * @var string
     *
     * @Assert\NotBlank
     * @ORM\Column(name="Type_event", type="string", length=20, nullable=false)
     */
    private $typeEvent;

    /**
     * @var string
     *
     * @Assert\NotBlank
     * @ORM\Column(name="Chanteur", type="string", length=20, nullable=false)
     */
    private $chanteur;

    /**
     * @var string
     *
     * @Assert\NotBlank
     * @ORM\Column(name="Adresse", type="string", length=20, nullable=false)
     */
    private $adresse;

    /**
     * @var \DateTime
     *
     * @Assert\DateTime
     * @Assert\NotBlank
     * @ORM\Column(name="Date_event", type="date", nullable=false)
     */
    private $dateEvent;

    /**
     * @var float
     *
     * @Assert\NotBlank
     * @Assert\Positive
     * @ORM\Column(name="prix_e", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixE;

    public function getIde(): ?int
    {
        return $this->ide;
    }

    public function getTypeEvent(): ?string
    {
        return $this->typeEvent;
    }

    public function setTypeEvent(string $typeEvent): self
    {
        $this->typeEvent = $typeEvent;

        return $this;
    }

    public function getChanteur(): ?string
    {
        return $this->chanteur;
    }

    public function setChanteur(string $chanteur): self
    {
        $this->chanteur = $chanteur;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->dateEvent;
    }

    public function setDateEvent(\DateTimeInterface $dateEvent): self
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    public function getPrixE(): ?float
    {
        return $this->prixE;
    }

    public function setPrixE(float $prixE): self
    {
        $this->prixE = $prixE;

        return $this;
    }


}
