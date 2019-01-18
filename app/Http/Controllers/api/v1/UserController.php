<?php

namespace App\Http\Controllers\api\v1;

use App\Repository\UserCsvRepository;
use App\Repository\UserJsonRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $userRepository;

   public function __construct(UserCsvRepository $userRepository){
       $this->userRepository = $userRepository;
   }

   public function show($id){
       $user=$this->userRepository->getById($id);
       return $user;
   }

   public function index(Request $request){

       $name=$request->input("name");
       if(isset($name))
       {
           $users=$this->userRepository->getByFirstname($name);

       }
       else {
           $users = $this->userRepository->getAll();
       }

        $offset=$request->input("offset");
        if(isset($offset))
        {
            $users = array_slice($users, $offset);
        }
        $limit=$request->input("limit");

        if(isset($limit))
        {
            if($limit>count($users)){
                $limit=count($users);
            }
           $users = array_slice($users, 0, $limit);
        }


       return json_encode($users) ?: "No user found";

   }
}
