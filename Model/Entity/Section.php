<?php

namespace App\Entity;

use App\Entity\Ul;
use App\Entity\Dd;

class Section {

    private ?int $id;
    private ?string $authorFk;
    private ?string $ul;
    private ?string $ddFk;
    private ?string $date;

    /**
     * @param int|null $id
     * @param string|null $authorFk
     * @param string|null $ul
     * @param string|null $ddFk
     * @param string|null $date
     */
    public function __construct(int $id = null, string $authorFk = null, string $ul = null, string $ddFk = null, string $date = null){
        $this->id = $id;
        $this->authorFk = $authorFk;
        $this->ul = $ul;
        $this->ddFk = $ddFk;
        $this->date = $date;
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
    public function getAuthorFk(): ?string {
        return $this->authorFk;
    }

    /**
     * @param string|null $authorFk
     */
    public function setAuthorFk(?string $authorFk): void {
        $this->authorFk = $authorFk;
    }

    /**
     * @return string|null
     */
    public function getUl(): ?string {
        return $this->ul;
    }

    /**
     * @param string|null $ul
     */
    public function setUl(?string $ul): void {
        $this->ul = $ul;
    }

    /**
     * @return string|null
     */
    public function getDdFk(): ?string {
        return $this->ddFk;
    }

    /**
     * @param string|null $ddFk
     */
    public function setDdFk(?string $ddFk): void {
        $this->ddFk = $ddFk;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string {
        return $this->date;
    }

    /**
     * @param string|null $date
     */
    public function setDate(?string $date): void {
        $this->date = $date;
    }

}