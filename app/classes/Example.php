<?php


namespace App\classes;
use App\Classes\person;


class Example extends person
{
   public $firstName;
   public $middleName;
   public $lastName;
   public $firstNumber = 10;
   protected $secondNumber = 20;
   private $lastNumber = 30;

   public function index ()
  {
//    $this->firstName = "Santo";
//    $this->firstName = "Shila";
//    $x = 'bd';
//    $x = '10.34';
//    $x = '10.34';
//    $x = true;
       $this->firstName = 'MD';
       echo  $this->firstName;
  }

  public function methodOne ()
  {
      $this->middleName = 'Habibur';
      echo $this->middleName;
  }
  public function methodTwo ()
  {
      $this->lastName = 'Rahman';
      echo $this->lastName;
  }
  public function methodThree ()
  {
      $this->district();
      $this->division();
//      $this->country();
  }
}