<?php


namespace inc\classes;


class InputController
{
    private $inputStr;

    public function __construct($inputStr) {
        $this->inputStr = $inputStr;
    }

    private function validator() {
        $string = preg_replace('/\s+/', '', $this->inputStr);
        if(preg_match("/[^,\d]/", $string)) {
            echo "Blogai įvesti duomenys";
            exit();
        } else {
            $this->inputStr = $string;
        }
    }

    private function strToArray(){
        return explode(',', $this->inputStr);
    }

    public function getArray() {
        $this->validator();
        return $this->strToArray();
    }
}