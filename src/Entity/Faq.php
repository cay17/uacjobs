<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\FaqRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"faq"}})
 * @ORM\Entity(repositoryClass=FaqRepository::class)
 */
class Faq
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"faq"})
     * @Groups({"faqcat"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=9000)
     * @Groups({"faq"})
     * @Groups({"faqcat"})
     */
    private $question;

    /**
     * @ORM\Column(type="string", length=9000)
     * @Groups({"faq"})
     * @Groups({"faqcat"})
     */
    private $reponse;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     * @Groups({"faq"})
     * @Groups({"faqcat"})
     */
    private $creatAt;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"faq"})
     * @Groups({"faqcat"})
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=FaqCategorie::class, inversedBy="faqs")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"faq"})
     */
    private $categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }

    public function getCreatAt(): ?\DateTimeInterface
    {
        return $this->creatAt;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCategorie(): ?FaqCategorie
    {
        return $this->categorie;
    }

    public function setCategorie(?FaqCategorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}
