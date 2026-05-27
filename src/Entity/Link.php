<?php 

namespace APP\Entity;

use App\Entity\Account;
use App\Entity\Category;

use DateTime;

class Link{

    private int $id;
    private string $url;
    private ?string $icon;
    private string $name;
    private ?string $description;
    private DateTime $create_at;

    public function __construct(string $url, string $name)
    {
        $this->url = $url;
        $this->name = $name;
        $this->create_at = new DateTime();
    }
    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of url
     *
     * @return string
     */
    public function getUrl(): string {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self {
        $this->url = $url;
        return $this;
    }

    /**
     * Get the value of icon
     *
     * @return string
     */
    public function getIcon(): string {
        return $this->icon;
    }

    /**
     * Set the value of icon
     *
     * @param string $icon
     *
     * @return self
     */
    public function setIcon(string $icon): self {
        $this->icon = $icon;
        return $this;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    /**
     * Get the value of description
     *
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self {
        $this->description = $description;
        return $this;
    }

    /**
     * Get the value of create_at
     *
     * @return DateTime
     */
    public function getCreateAt(): DateTime {
        return $this->create_at;
    }

    /**
     * Set the value of create_at
     *
     * @param DateTime $create_at
     *
     * @return self
     */
    public function setCreateAt(DateTime $create_at): self {
        $this->create_at = $create_at;
        return $this;
    }
}

?>