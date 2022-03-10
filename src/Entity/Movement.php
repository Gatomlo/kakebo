<?php

namespace App\Entity;

use App\Repository\MovementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MovementRepository::class)
 */
class Movement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Object;

    /**
     * @ORM\Column(type="float")
     */
    private $Value;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Credit;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Reccurent;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Recurrence;

    /**
     * @ORM\ManyToOne(targetEntity=Account::class, inversedBy="movements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Account;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="movements")
     */
    private $Category;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Comment;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Valued;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Method;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObject(): ?string
    {
        return $this->Object;
    }

    public function setObject(string $Object): self
    {
        $this->Object = $Object;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->Value;
    }

    public function setValue(float $Value): self
    {
        $this->Value = $Value;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(?\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getCredit(): ?bool
    {
        return $this->Credit;
    }

    public function setCredit(bool $Credit): self
    {
        $this->Credit = $Credit;

        return $this;
    }

    public function getReccurent(): ?bool
    {
        return $this->Reccurent;
    }

    public function setReccurent(bool $Reccurent): self
    {
        $this->Reccurent = $Reccurent;

        return $this;
    }

    public function getRecurrence(): ?string
    {
        return $this->Recurrence;
    }

    public function setRecurrence(?string $Recurrence): self
    {
        $this->Recurrence = $Recurrence;

        return $this;
    }

    public function getAccount(): ?Account
    {
        return $this->Account;
    }

    public function setAccount(?Account $Account): self
    {
        $this->Account = $Account;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->Category;
    }

    public function setCategory(?Category $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->Comment;
    }

    public function setComment(?string $Comment): self
    {
        $this->Comment = $Comment;

        return $this;
    }

    public function getValued(): ?bool
    {
        return $this->Valued;
    }

    public function setValued(bool $Valued): self
    {
        $this->Valued = $Valued;

        return $this;
    }

    public function getMethod(): ?string
    {
        return $this->Method;
    }

    public function setMethod(string $Method): self
    {
        $this->Method = $Method;

        return $this;
    }
}
