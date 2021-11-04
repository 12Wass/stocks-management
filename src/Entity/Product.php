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
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=13)
     */
    private $barcode;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stock;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $entries;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $exits;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $min_alert;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $max_alert;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ean13;

    /**
     * @ORM\ManyToOne(targetEntity=Provider::class, inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $provider;

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

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(string $barcode): self
    {
        $this->barcode = $barcode;

        return $this;
    }


    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getEntries(): ?int
    {
        return $this->entries;
    }

    public function setEntries(?int $entries): self
    {
        $this->entries = $entries;

        return $this;
    }

    public function getExits(): ?int
    {
        return $this->exits;
    }

    public function setExits(?int $exits): self
    {
        $this->exits = $exits;

        return $this;
    }

    public function getMinAlert(): ?int
    {
        return $this->min_alert;
    }

    public function setMinAlert(?int $min_alert): self
    {
        $this->min_alert = $min_alert;

        return $this;
    }

    public function getMaxAlert(): ?int
    {
        return $this->max_alert;
    }

    public function setMaxAlert(?int $max_alert): self
    {
        $this->max_alert = $max_alert;

        return $this;
    }

    public function getEan13(): ?string
    {
        return $this->ean13;
    }

    public function setEan13(?string $ean13): self
    {
        $this->ean13 = $ean13;

        return $this;
    }

    public function getProvider(): ?Provider
    {
        return $this->provider;
    }

    public function setProvider(?Provider $provider): self
    {
        $this->provider = $provider;

        return $this;
    }
}
