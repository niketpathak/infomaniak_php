<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of campus
 *
 * @author niketpathak
 */
class campus {
    //put your code here
    private $city="";
    private $region="";
    private $capacity=0;
   
  public function __construct($city,$region,$cap)
  {
      echo 'The class "', __CLASS__, '" was initiated!<br />';
      $this->city = $city;
      $this->region=$region;
      $this->capacity=$cap;
  }
  
  public function __toString()
  {
      echo "Using the toString method in campus class: ";
      echo $this->getCity();
      echo $this->getRegion();
      echo $this->getCapacity();
  }
  
  public function setCity($newval)
  {
      $this->city = $newval;
  }
  public function getCity()
  {
      return $this->city . "<br />";
  }
  
  public function setRegion($newval)
  {
      $this->region = $newval;
  }
  public function getRegion()
  {
      return $this->region . "<br />";
  }
  
  public function setCapacity($newval)
  {
      $this->capacity = $newval;
  }
  public function getCapacity()
  {
      return $this->capacity . "<br />";
  }
  
  
  
}
  
