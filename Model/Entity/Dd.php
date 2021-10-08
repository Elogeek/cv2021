<?php

namespace App\Entity;

class Dd {
    private ?int $id;
    private ?string $contentDd;
    private ?string $contentDt;

    /** Dd construct
     * @param int|null $id
     * @param string|null $contentDd
     * @param string|null $contentDt
     */
    public function __construct(int $id = null, string $contentDd = null, string $contentDt = null) {
        $this->id = $id;
        $this->contentDd = $contentDd;
        $this->contentDt = $contentDt;
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
    public function getContentDd(): ?string {
        return $this->contentDd;
    }

    /**
     * @param string|null $contentDd
     */
    public function setContentDd(?string $contentDd): void {
        $this->contentDd = $contentDd;
    }

    /**
     * @return string|null
     */
    public function getContentDt(): ?string {
        return $this->contentDt;
    }

    /**
     * @param string|null $contentDt
     */
    public function setContentDt(?string $contentDt): void {
        $this->contentDt = $contentDt;
    }

}