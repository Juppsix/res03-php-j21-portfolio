<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $firsttechno = null;

    #[ORM\Column(length: 255)]
    private ?string $secondtechno = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirsttechno(): ?string
    {
        return $this->firsttechno;
    }

    public function setFirsttechno(string $firsttechno): self
    {
        $this->firsttechno = $firsttechno;

        return $this;
    }

    public function getSecondtechno(): ?string
    {
        return $this->secondtechno;
    }

    public function setSecondtechno(string $secondtechno): self
    {
        $this->secondtechno = $secondtechno;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
