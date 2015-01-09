<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of teacher
 *
 * @author niketpathak
 */
class teacher {     //this should be an abstract class actually!
    
    private $ID=0;
    private $first_name="";
    private $last_name="";
    
    public function __construct($id,$fname,$lname)
  {
      echo 'The class "', __CLASS__, '" was initiated!<br />';
      $this->ID = $id;
      $this->first_name=$fname;
      $this->last_name=$lname;
  }
  
  public function __toString()
  {
      echo "Using the toString method in Teacher Class: ";
      echo $this->getID();
      echo $this->getFirstName();
      echo $this->getLastName();
  }
  
  public function setID($newval)
  {
      $this->ID = $newval;
  }
  public function getID()
  {
      return $this->ID . "<br />";
  }
  
  public function setFirstName($newval)
  {
      $this->first_name = $newval;
  }
  public function getFirstName()
  {
      return $this->first_name . "<br />";
  }
  
  public function setLastName($newval)
  {
      $this->last_name = $newval;
  }
  public function getLastName()
  {
      return $this->last_name . "<br />";
  }
    
    
    
    
}
