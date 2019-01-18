<?php

namespace App;


use Illuminate\Support\Facades\Storage;
use App\Interfaces\UserInterface;

class UserCSV implements UserInterface
{


    public function getAllUser()
    {

        $csvData = Storage::disk("local")->get("testtakers.csv");
        $lines = explode("\n", $csvData);
        $header_array = explode(",", $lines[0]);
        //delete header line
        array_shift($lines);
        $assoc_array = array();
        for ($i = 0; $i < count($lines) - 1; $i++) {

            $line_array = str_getcsv($lines[$i]);
            $tmp_array = array_fill_keys(array_merge($header_array,array("userId")), "");
            for ($b = 0; $b < count($header_array); $b++) {
                $tmp_array = array_merge($tmp_array, array($header_array[$b] => $line_array[$b]));
                $tmp_array = array_merge($tmp_array, array("userId" => $i));
            }
            $assoc_array[] = $tmp_array;

        }
       // $assoc_array = json_encode($assoc_array);
        return $assoc_array;
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
