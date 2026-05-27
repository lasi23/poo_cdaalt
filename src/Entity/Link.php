<?php

namespace App\Entity;

use App\Entity\Account;
use App\Entity\Category;

class Link
{
    //Attributes
    private int $id;
    private string $name;
    private string $url;
    private ?string $icon;
    private ?string $description;
    private \DateTime $createdAt;
    //relations manyToOne /ManyToMany
    private ?Account $account;
    private array $categories;

    //Constructeur (valeurs obligatoires)
    public function __construct(
        string $name,
        string $url
    )
    {
        $this->name = $name;
        $this->url = $url;
        $this->createdAt = new \DateTime();
        $this->categories = [];
    }

    //Getters
    //Getters and Setters
    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function getAccount(): ?Account
    {
        return $this->account;
    }
    
    public function getCategories(): array
    {
        return $this->categories;
    }
    
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    
    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }
    
    public function setCreatedAt(\Datetime $createdAt): self 
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function setAccount(?Account $account): self
    {
        $this->account = $account;
        return $this;
    }

    public function addCategory(Category $category): self 
    {
        $this->categories[] = $category;
        return $this;
    }

    public function removeCategory(Category $category): self
    {
        unset($this->categories[array_search($category, $this->categories)]);
        sort($this->categories);
        return $this;
    }
}
