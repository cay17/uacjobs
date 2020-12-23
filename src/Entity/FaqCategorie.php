<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\FaqCategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"faqcat"}})
 * @ORM\Entity(repositoryClass=FaqCategorieRepository::class)
 */
class FaqCategorie
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
     * @ORM\Column(type="string", length=255)
     * @Groups({"faq"})
     * @Groups({"faqcat"})
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     * @Groups({"faq"})
     * @Groups({"faqcat"})
     */
    private $creatAt;

    /**
     * @ORM\OneToMany(targetEntity=Faq::class, mappedBy="categorie", orphanRemoval=true)
     */
    private $faqs;

    public function __construct()
    {
        $this->faqs = new ArrayCollection();
    }

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

    public function getCreatAt(): ?\DateTimeInterface
    {
        return $this->creatAt;
    }

    /**
     * @return Collection|Faq[]
     */
    public function getFaqs(): Collection
    {
        return $this->faqs;
    }

    public function addFaq(Faq $faq): self
    {
        if (!$this->faqs->contains($faq)) {
            $this->faqs[] = $faq;
            $faq->setCategorie($this);
        }

        return $this;
    }

    public function removeFaq(Faq $faq): self
    {
        if ($this->faqs->contains($faq)) {
            $this->faqs->removeElement($faq);
            // set the owning side to null (unless already changed)
            if ($faq->getCategorie() === $this) {
                $faq->setCategorie(null);
            }
        }

        return $this;
    }
}
