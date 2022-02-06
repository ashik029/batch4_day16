<?php


namespace App\classes;


class person
{
   public $district = "savar";
   protected $division = "Dhaka" ;
   private $country = "Bangladesh";

   public function  district ()
   {
      echo 'Savar';
   }
   protected function  division()
   {
       echo 'Dhaka';
   }
   private function country ()
   {
       echo 'Bangladesh';
   }

   public function methodThree ()
   {
       echo  'Dhaka';
   }
}