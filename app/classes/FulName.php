<?php


namespace App\classes;


class FulName
{
    public $firstName;
    public $lastName;
    protected $fullName;

    public function __construct($data= null){
//        echo '<pre>';
//        print_r($_POST);
//        exit();
        if($data){
            $this->firstName = $data['first-name'];
            $this->lastName = $data['last-name'];
        }

    }

    public function index(){
        header("Location: action.php?pages=full-name");

    }
    public function getFullName(){
        $this->fullName = $this->firstName.' '.$this->lastName;
        return $this->fullName;
    }

}