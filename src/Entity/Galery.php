<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\GaleryRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"galery"}}
 * )
 * @ORM\Entity(repositoryClass=GaleryRepository::class)
 */
class Galery
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @Groups({"galery"})
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups({"galery"})
     * @ORM\ManyToOne(targetEntity=MediaObject::class)
     */
    private $file;

    /**
     * @Groups({"galery"})
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="create")
     */
    private $creatAt;

    /**
     * * @Groups({"galery"})
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFile(): ?MediaObject
    {
        return $this->file;
    }

    public function setFile(?MediaObject $file): self
    {
        $this->file = $file;

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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
