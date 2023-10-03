<?php

namespace App\Entity;

use App\Repository\RelUserEtatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RelUserEtatRepository::class)]
class RelUserEtat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idUser = null;

    #[ORM\Column]
    private ?int $idEtat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdEtat(): ?int
    {
        return $this->idEtat;
    }

    public function setIdEtat(int $idEtat): static
    {
        $this->idEtat = $idEtat;

        return $this;
    }
}
