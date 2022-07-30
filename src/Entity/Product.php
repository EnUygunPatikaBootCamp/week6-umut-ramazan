<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $productName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $productContent;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private ?int $productPiece;

    /**
     * @ORM\Column(type="float", length=255)
     */
    private ?float $productPrice;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?\DateTimeInterface $productCreatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getProductContent(): ?string
    {
        return $this->productContent;
    }

    public function setProductContent(string $productContent): self
    {
        $this->productContent = $productContent;

        return $this;
    }

    public function getProductPiece(): ?int
    {
        return $this->productPiece;
    }

    public function setProductPiece(int $productPiece): self
    {
        $this->productPiece = $productPiece;

        return $this;
    }

    public function getProductPrice(): ?float
    {
        return $this->productPrice;
    }

    public function setProductPrice(float $productPrice): self
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    public function getProductCreatedAt(): ?\DateTimeInterface
    {
        return $this->productCreatedAt;
    }

    public function setProductCreatedAt(\DateTimeInterface $productCreatedAt): self
    {
        $this->productCreatedAt = $productCreatedAt;

        return $this;
    }
}
