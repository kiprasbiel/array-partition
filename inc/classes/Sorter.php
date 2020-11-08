<?php


namespace inc\classes;


class Sorter
{
    private $list;
    private $sums;
    private $results = [];

    public function __construct($array) {
        rsort($array);
        $this->list = $array;
        $this->sums = [0, 0, 0];
    }

    private function algorithm(){
        foreach($this->list as $number){
            $index = array_search(min($this->sums), $this->sums);
            $this->sums[$index] += $number;
            $this->results[$index][] = $number;
        }
    }

    private function result(){
        $strArray = [];
        foreach($this->results as $key => $result){
            $strPartition = implode(', ', $result) . ' = ' . $this->sums[$key];
            $strArray[] = $strPartition;
        }
        return $strArray;
    }

    public function sort(){
        $this->algorithm();
        return $this->result();
    }
}