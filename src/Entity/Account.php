<?php

namespace App\Entity;

class Account
{
    //Attributes
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $password;
    private ?string $roles;
    private ?string $img;

    //Constructor (valeur obligatoire)
    public function __construct(
        string $firstname,
        string $lastname,
        string $email,
        string $password
    ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }

    //Getters and Setters
    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function setRoles(?string $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;
        return $this;
    }

    public function __toString(): string
    {
        return 
            $this->firstname . ', ' .
            $this->lastname . ', ' .
            $this->email;
    }
}
