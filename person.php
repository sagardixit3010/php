<?php

namespace family;

class person{
 private $Name;
 private $sex;
 private $brothers;
 private $sisters;
 private $sons;
 private $daughters;
 private $husband;
 private $wife;

function __construct($name,$sex){
  $this->Name=$name;
  $this->sex=$sex;
}


public function getName(){
  return $this->Name;
}

public function getSex(){
  return $this->sex;
}

public function setBrother($brother){
  $this->brothers=$brother;
}
public function getBrother(){
  return $this->brothers;
}

public function setSister($sister){
  $this->sisters=$sister;
}
public function getSister(){
  return $this->sisters;
}

public function setSon($son)
{
    $this->sons=$son;
}

public function getSon(){

  return $this->sons;
}

public function setDaughter($daughter){
  $this->daughters=$daughter;
}
public function getDaughter(){
  return $this->daughters;
}

public function setHusband($husband){
  $this->husband=$husband;
}
public function getHusband(){
  return $this->husband;
}

public function setWife($wife){
  $this->wife=$wife;
}
public function getWife(){
  return $this->wife;
}

function printMember(){
   $countGrandSon=0;
   $countGrandDaughter=0;
   echo "<h1>$this->Name</h1>
   <hr>";
   if(is_null($this->wife) && is_null($this->husband))
   {
     echo "Unmarried";
   }
   elseif(is_null($this->wife)){
     echo "<h3>Husband</h3>";
     echo $this->husband->Name;
   }
   else{
     echo "<h3>Wife</h3>";
     echo $this->wife->Name;
   }

   echo "<h3>Brother Name</h3>";
   if($this->brothers!=null){
   echo "Brothers: ".count($this->brothers).'<br>';
   foreach($this->brothers as $bro)
   {
    echo $bro->Name."<br>";
   }
   }
  else{
      echo "No brothers";
   }

  echo "<h3>Sisters Name</h3>";
  if($this->sisters!=null){
  echo "Sisters: ".count($this->sisters).'<br>';
  foreach($this->sisters as $sis)
  {
   echo $sis->Name."<br>";
  }
  }
  else{
      echo "No sisters";
  }


   if($this->sons!=null){
     echo "<h3>Sons Name</h3>";
     echo "Sons: ".count($this->sons).'<br>';
     foreach($this->sons as $sn)
     {
      echo $sn->Name."<br>";
     }
   }



   if($this->daughters!=null){
     echo "<h3>Daughters Name</h3>";
     echo "Daughters: ".count($this->daughters).'<br>';
     foreach($this->daughters as $sn)
     {
       echo $sn->Name."<br>";
     }
   }


   echo "<h3>GrandDaughter</h3>";
   if($this->sons!=null){
     foreach($this->sons as $son)
     {
      if($son->daughters != null){
        foreach($son->daughters as $secondDaughter){
          echo $secondDaughter->Name.'<br>';
          $countGrandDaughter++;
        }
      }

     }
   }
   if($this->daughters!=null){
     foreach($this->daughters as $daughter)
     {
      if($daughter->daughters != null){
        foreach($daughter->daughters as $secondDaughter){
          echo $secondDaughter->Name.'<br>';
          $countGrandDaughter++;
        }
      }
     }
   }

   echo "GrandDaughter:".$countGrandDaughter;
   echo "<h3>GrandSons</h3>";
if($this->sons!=null){
   foreach($this->daughters as $sn)
   {
    if($sn->sons != null){
      foreach($sn->sons as $m){
        echo $m->Name.'<br>';
        $countGrandSon++;
      }
    }
   }
 }
 if($this->sons!=null){
   foreach($this->sons as $son)
   {
    if($son->sons != null){
      foreach($son->sons as $secondSon){
        echo $secondSon->Name.'<br>';
        $countGrandSon++;
      }
    }
   }
 }
   echo "GrandSon:".$countGrandSon;


}

}
