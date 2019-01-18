<?php


namespace App\Repository;

use App\Interfaces\UserRepositoryInterface;
use App\UserJSON;

class UserJsonRepository implements UserRepositoryInterface
{
    public $user;

    function __construct(UserJSON $user) {

        $this->user = $user;

    }
    public function getAll() {


        return $this->user->getAllUser();
    }
    public function getByFirstname(string $name)
    {
        return $this->user->getByFirstname($name);
    }
    public function getById(int $id)
    {
        return $this->user->getUserById($id);
    }
}
