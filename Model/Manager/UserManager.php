<?php

namespace App\Manager;

use App\Entity\Role;
use App\Entity\User;
use Model\DB;
use PDO;
use PDOException;

class UserManager {

    /**  Add an user
     * @param User $user
     * @return bool
     */
    public function addUser(User &$user): bool {
        $request = DB::getInstance()->prepare("INSERT INTO user (name,password,role-fk) VALUES (:name,:password, :role)");
        $request->bindValue(':name', $user->getName());
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
    public function deleteUser(User $user) {
        $request = DB::getInstance()->prepare("DELETE FROM user WHERE id = :id");
        $request->bindValue('id', $user->getId());
        return $request->execute();
    }

    // Modify infos an user
    public function updateUser(User $user) {
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