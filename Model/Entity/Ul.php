<?php

namespace App\Entity;

class Ul {

    private ?int $id;
    private ?string $contentUl;
    private ?string $contentLi;

    /** Ul construct
     * @param int|null $id
     * @param string|null $contentUl
     * @param string|null $contentLi
     */
    public function __construct(int $id = null, string $contentUl = null, string $contentLi = null) {
        $this->id = $id;
        $this->contentUl = $contentUl;
        $this->contentLi = $contentLi;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getContentUl(): ?string {
        return $this->contentUl;
    }

    /**
     * @param string|null $contentUl
     */
    public function setContentUl(?string $contentUl): void {
        $this->contentUl = $contentUl;
    }

    /**
     * @return string|null
     */
    public function getContentLi(): ?string {
        return $this->contentLi;
    }

    /**
     * @param string|null $contentLi
     */
    public function setContentLi(?string $contentLi): void {
        $this->contentLi = $contentLi;
    }

}