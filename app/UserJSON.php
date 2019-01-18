<?php

namespace App;

use App\Interfaces\UserInterface;
use Illuminate\Support\Facades\Storage;


class UserJSON implements UserInterface{

    public function getAllUser(){

        $allUsers = Storage::disk("local")->get("testtakers.json");
        $allUsers = json_decode($allUsers, true);

        $id=0;
        $array_with_id = array();
        foreach ($allUsers as $value)
        {
            $value = array_merge($value, array("userId"=>$id));
            $array_with_id [] = $value;
            $id++;
        }
        return $array_with_id;

    }
    public function getByFirstname(string $name)
    {
        $array=$this->getAllUser();

        $result = array_filter($array, function ($item) use ($name) {
            if (stripos($item['firstname'], $name) !== false) {
                return $item;
            }
            return false;
        });
        $filtered = array();
        foreach ($result as $value)
        {
            $filtered[] = $value;
        }
        return $filtered;
    }

    public function getUserById(int $id)
    {
        $array=$this->getAllUser();

        $result = array_filter($array, function ($item) use ($id) {
            if ($item['userId'] == $id) {
                return $item;
            }
            return false;
        });
        $filtered = array();
        foreach ($result as $value)
        {
            $filtered[] = $value;
        }
        return $filtered[0];

    }

}
