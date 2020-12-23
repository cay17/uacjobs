<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OpportunitiesRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=OpportunitiesRepository::class)
 */
class Opportunities
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=2048)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $qualifications;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="create")
     */
    private $creatAt;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="opportunities")
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity=MediaObject::class, cascade={"persist", "remove"})
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link_postuler;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getQualifications(): ?string
    {
        return $this->qualifications;
    }

    public function setQualifications(?string $qualifications): self
    {
        $this->qualifications = $qualifications;

        return $this;
    }

    public function getCreatAt(): ?\DateTimeInterface
    {
        return $this->creatAt;
    }

    public function setCreatAt(?\DateTimeInterface $creatAt): self
    {
        $this->creatAt = $creatAt;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getPicture(): ?MediaObject
    {
        return $this->picture;
    }

    public function setPicture(?MediaObject $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getLinkPostuler(): ?string
    {
        return $this->link_postuler;
    }

    public function setLinkPostuler(?string $link_postuler): self
    {
        $this->link_postuler = $link_postuler;

        return $this;
    }
}
