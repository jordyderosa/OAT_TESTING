<?php

namespace App\Interfaces;

Interface UserRepositoryInterface{

    public function getAll();
    public function getByFirstname(string $name);
    public function getById(int $id);
}
