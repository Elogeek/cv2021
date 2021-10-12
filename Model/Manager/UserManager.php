<?php

namespace App\Manager;

use App\Entity\Role;
use App\Entity\User;
use Model\DB;
use PDO;
use PDOException;

class UserManager {

    /**
     * Return all users.
     * @return array
     */
    public function getAllUsers(): array {
        $users = [];
        $request = DB::getInstance()->prepare("SELECT * FROM user ORDER BY id DESC");
        if($request->execute() && $data = $request->fetchAll()) {
            $roleManager = new RoleManager();
            foreach($data as $userData) {
                $role = $roleManager->getRoleById($userData['role-fk']);
                $users[] = new User($userData['id'], $role, $userData['username']);
            }
        }
        return $users;
    }

    /** Returns the role of the user via his id
     *
     * @param int $id
     * @return User|null
     */
    public function getById(int $id): ?User {
        $user = null;
        $request = DB::getInstance()->prepare("SELECT * FROM user WHERE id = :id ");
        $request->bindValue(':id', $id);
        $result = $request->execute();
        $data = $request->fetch();

        if ($result && $data) {
            $roleManager = new RoleManager();
            $role = $roleManager->getRoleById($data['role-fk']);
            $user = new User($data['id'], $role, $data['username']);
        }
        return $user;
    }


    /**
     * Return a user based on provided username if any.
     * @param string $name
     * @return User|null
     */
    public function getByUsername(string $name): ?User {
        $user = null;
        $request = DB::getInstance()->prepare("SELECT * FROM user WHERE username = :name");
        $request->bindValue(':name', $name);
        if($request->execute()) {
            $data = $request->fetch();
            if($request->rowCount() > 0) {
                $roleManager = new RoleManager();
                $role = $roleManager->getRoleById($data['role-fk']);
                $user = new User($data['id'], $role, $data['username']);
            }
        }
        return $user;
    }

    /**
     * Return an User by his user name or null
     * @param string $name
     * @return bool
     */
    public function existUser(string $name): bool
    {
        $request = DB::getInstance()->prepare("SELECT count(*) as cnt FROM user WHERE username = :name");
        $request->bindValue(':name', $name);
        $request->execute();
        return intval($request->fetch()['cnt']) > 0;
    }

    /**  Add an user
     * @param User $user
     * @return bool
     */
    public function addUser(User $user): bool {
        $request = DB::getInstance()->prepare("INSERT INTO user (username,password,roleFk) VALUES (:name,:password, :role)");
        $request->bindValue(':name', $user->getUsername());
        $request->bindValue(':password', DB::encodePassword($user->getPassword()));
        $request->bindValue(':role', $user->getRole()->getId());
        $result = $request->execute();
        $user->setId(DB::getInstance()->lastInsertId());
        return $result;
    }

    /** Delete an user
     * @param User $user
     * @return bool
     */
    public function deleteUser(User $user): bool {
        $request = DB::getInstance()->prepare("DELETE FROM user WHERE id = :id");
        $request->bindValue('id', $user->getId());
        return $request->execute();
    }

    // Modify infos an user
    public function updateUser(User $user): bool {
        $request = DB::getInstance()->prepare("UPDATE user SET username = :username, role-fk = :role WHERE id = :id");
        $request->bindValue(':id', $user->getId());
        $request->bindValue(':username', $user->getUsername());
        $request->bindValue(':role', $user->getRole()->getId());
        return $request->execute();
    }

    /**
     * Modify password user and encode new password in the BDD
     * @param User $user
     * @param string $plainPassword
     * @return bool
     */
    public function updatePassword(User $user, string $plainPassword): bool {
        $request = DB::getInstance()->prepare(" UPDATE user SET password = :pass WHERE id = :id");
        $request->bindValue(':id', $user->getId());
        $request->bindValue(':pass', DB::encodePassword($plainPassword));
        $request->execute();
        return $plainPassword;
    }

}