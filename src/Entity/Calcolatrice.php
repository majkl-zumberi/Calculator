<?php

namespace App\Entity;

class Calcolatrice {

    private  $input1;
    private  $input2;
    private $operazione;
    public function __construct($firstInput,$secondInput,$typeop){
        $this->input1=$firstInput;
        $this->input2=$secondInput;
        $this->operazione=$typeop;
        //echo "Sono nel costruttore di Calcolatrice \n";
    }

    public function getResult(){
        switch($this->operazione){
            case "+":
                return $this->getinput1()+$this->getinput2();
                break;
            case "-":
                return $this->getinput1()-$this->getinput2();
                break;
            case "*":
                return $this->getinput1()*$this->getinput2();
                break;
            case "/":
                $res=$this->getinput2() == 0 ?  "Non calcolabile!" :  $this->getinput1()/$this->getinput2();
                return $res;
                break;
        }
    }

    public function getinput1(){
        return $this->input1;
    }
    public function setinput1($val){
        $this->input1=$val;
    }
    public function getoperazione(){
        return $this->operazione;
    }
    public function setoperazione($val){
        $this->operazione=$val;
    }
    
    public function setinput2($val){
        $this->input2=$val;
    }
    public function getinput2(){
        return $this->input2;
    }
    
    public function toString(){
        return "input1=".$this->getinput1()."&input2=".$this->getinput2()."&operazione=".$this->getoperazione();
    }

}