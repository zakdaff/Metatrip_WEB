<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture", indexes={@ORM\Index(name="Idvoit", columns={"Idvoit"})})
 * @ORM\Entity
 */
class Voiture
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idvoit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvoit;

    /**
     * @var string
     *
     * @ORM\Column(name="Matricule", type="string", length=50, nullable=false)
     */
    private $matricule;

    /**
     * @var int
     *
     * @ORM\Column(name="Puissance_fiscalle", type="integer", nullable=false)
     */
    private $puissanceFiscalle;

    /**
     * @var string
     *
     * @ORM\Column(name="Image_v", type="string", length=50, nullable=false)
     */
    private $imageV;

    /**
     * @var string
     *
     * @ORM\Column(name="Modele", type="string", length=20, nullable=false)
     */
    private $modele;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    public function getIdvoit(): ?int
    {
        return $this->idvoit;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getPuissanceFiscalle(): ?int
    {
        return $this->puissanceFiscalle;
    }

    public function setPuissanceFiscalle(int $puissanceFiscalle): self
    {
        $this->puissanceFiscalle = $puissanceFiscalle;

        return $this;
    }

    public function getImageV(): ?string
    {
        return $this->imageV;
    }

    public function setImageV(string $imageV): self
    {
        $this->imageV = $imageV;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }


}
