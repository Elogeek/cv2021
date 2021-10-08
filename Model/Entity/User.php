<?php

namespace App\Entity;

class User {

    private ?int $id;
    private ?string $username;
    private ?string $password;
    private ?Role $role;

    /**
     * User constructor.
     * @param int|null $id
     * @param string|null $username
     * @param string|null $password
     * @param Role|null $role
     */
    public function __construct(int $id = null, string $username = null, string $password = null, Role $role = null) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
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
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * @param string|null $username
     */
    public function setUsername(?string $username): void {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void {
        $this->password = $password;
    }

    /**
     * @return Role|null
     */
    public function getRole(): ?Role {
        return $this->role;
    }

    /**
     * @param Role|null $role
     */
    public function setRole(?Role $role): void {
        $this->role = $role;
    }

}
