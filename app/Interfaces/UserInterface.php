<?php

namespace App\Interfaces;

Interface UserInterface{
    public function getAllUser();
    public function getByFirstname(string $name);
    public function getUserById(int $id);
}