<?php
require "person.php";

use family\Person as familyMember;

$atya=new familyMember("Atya","F");
$yodhan=new familyMember("Yodhan","F");
$laki=new familyMember("Laki","M");
$lavnya=new familyMember("Lavnya","F");
$vasa=new familyMember("Vasa","M");
$kriya=new familyMember("Kriya","M");
$krithi=new familyMember("Krithi","F");
$vyas=new familyMember("Vyas","M");
$krpi=new familyMember("Krpi","F");
$asva=new familyMember("Asva","M");
$satvy=new familyMember("Satvy","F");
$ahit=new familyMember("Ahit","M");
$arit=new familyMember("Arit","M");
$jnki=new familyMember("Jnki","F");
$tritha=new familyMember("Tritha","F");
$vritha=new familyMember("Vritha","M");
$villa=new familyMember("Villa","F");
$chika=new familyMember("Chika","F");
$jaya=new familyMember("Jaya","M");
$dritha=new familyMember("Dritha","F");
$vyan=new familyMember("Vyan","M");
$satya=new familyMember("Satya","F");
$aras=new familyMember("Aras","M");
$chitra=new familyMember("Chitra","F");
$lsh=new familyMember("Lsh","M");
$vich=new familyMember("Vich","M");
$lika=new familyMember("Lika","F");
$chit=new familyMember("Chit","M");
$amba=new familyMember("Amba","F");
$kingShan=new familyMember("King Shan","M");
$queenAnga=new familyMember("Queen Anga","F");

//KingShan and QueenAnga sons and daughters
$kingShanSons=array($chit,$lsh,$vich,$aras);
$kingShanDaughters=array($amba,$lika,$chitra,$satya);
$kingShan->setSon($kingShanSons);
foreach($kingShan->getSon() as $kingSon){
  echo $kingSon->getName().'<br>';
}
$kingShan->setDaughter($kingShanDaughters);
foreach($kingShan->getDaughter() as $kingDaughter){
  echo $kingDaughter->getName().'<br>';
}

$queenAngaSons=array($chit,$lsh,$vich,$aras);
$queenAngaDaughters=array($amba,$lika,$chitra,$satya);
$queenAnga->setSon($queenAngaSons);
foreach($queenAnga->getSon() as $queenSon){
  echo $queenSon->getName().'<br>';
}
$queenAnga->setDaughter($queenAngaDaughters);
foreach($queenAnga->getDaughter() as $queenDaughter){
  echo $queenDaughter->getName().'<br>';
}

//Chit and Amba sons and daughters
$chitSons=array($vritha);
$chitDaughters=array($dritha,$tritha);
$chit->setSon($chitSons);
foreach($chit->getSon() as $chitSon){
  echo $chitSon->getName().'<br>';
}
$chit->setDaughter($chitDaughters);
foreach($chit->getDaughter() as $chitDaughter){
  echo $chitDaughter->getName().'<br>';
}

$ambaSons=array($vritha);
$ambaDaughters=array($dritha,$tritha);
$amba->setSon($ambaSons);
foreach($amba->getSon() as $ambaSon){
  echo $ambaSon->getName().'<br>';
}
$amba->setDaughter($ambaDaughters);
foreach($amba->getDaughter() as $ambaDaughter){
  echo $ambaDaughter->getName().'<br>';
}

//Vich and Lika sons and daughters
$vichDaughters=array($villa,$chika);
$vich->setDaughter($vichDaughters);
foreach($vich->getDaughter() as $vichDaughter){
  echo $vichDaughter->getName().'<br>';
}

$likaDaughters=array($villa,$chika);
$lika->setDaughter($likaDaughters);
foreach($lika->getDaughter() as $likaDaughter){
  echo $likaDaughter->getName().'<br>';
}

//Aras and Chitra sons and daughters
$arasSons=array($ahit);
$arasDaughters=array($jnki);
$aras->setSon($arasSons);
foreach($aras->getSon() as $arasSon){
  echo $arasSon->getName().'<br>';
}
$aras->setDaughter($arasDaughters);
foreach($aras->getDaughter() as $arasDaughter){
  echo $arasDaughter->getName().'<br>';
}

$chitraSons=array($ahit);
$chitraDaughters=array($jnki);
$chitra->setSon($chitraSons);
foreach($chitra->getSon() as $chitraSon){
  echo $chitraSon->getName().'<br>';
}
$chitra->setDaughter($chitraDaughters);
foreach($chitra->getDaughter() as $chitraDaughter){
  echo $chitraDaughter->getName().'<br>';
}

//Vyan and $satyaDaughters sons and daughters
$vyanSons=array($asva,$vyas);
$vyanDaughters=array($atya);
$vyan->setSon($vyanSons);
foreach($vyan->getSon() as $vyanSon){
  echo $vyanSon->getName().'<br>';
}
$vyan->setDaughter($vyanDaughters);
foreach($vyan->getDaughter() as $vyanDaughter){
  echo $vyanDaughter->getName().'<br>';
}

$satyaSons=array($asva,$vyas);
$satyaDaughters=array($atya);
$satya->setSon($satyaSons);
foreach($satya->getSon() as $satyaSon){
  echo $satyaSon->getName().'<br>';
}
$satya->setDaughter($satyaDaughters);
foreach($satya->getDaughter() as $satyaDaughter){
  echo $satyaDaughter->getName().'<br>';
}

//Jaya and Dritha sons and daughters
$jayaSons=array($yodhan);
$jaya->setSon($jayaSons);
foreach($jaya->getSon() as $jayaSon){
  echo $jayaSon->getName().'<br>';
}
$drithaSons=array($yodhan);
$dritha->setSon($jayaSons);
foreach($dritha->getSon() as $drithaSon){
  echo $drithaSon->getName().'<br>';
}

//Arit and Jnki sons and daughters
$aritSons=array($laki);
$aritDaughters=array($lavnya);
$arit->setSon($aritSons);
foreach($arit->getSon() as $aritSon){
  echo $aritSon->getName().'<br>';
}
$arit->setDaughter($aritDaughters);
foreach($arit->getDaughter() as $aritDaughter){
  echo $aritDaughter->getName().'<br>';
}

$jnkiSons=array($laki);
$jnkiDaughters=array($lavnya);
$jnki->setSon($jnkiSons);
foreach($jnki->getSon() as $jnkiSon){
  echo $jnkiSon->getName().'<br>';
}
$jnki->setDaughter($jnkiDaughters);
foreach($jnki->getDaughter() as $jnkiDaughter){
  echo $jnkiDaughter->getName().'<br>';
}

//Asva and Satvy sons and daughters
$asvaSons=array($vasa);
$asva->setSon($asvaSons);
foreach($asva->getSon() as $asvaSon){
  echo $asvaSon->getName().'<br>';
}
$satvySons=array($vasa);
$satvy->setSon($satvySons);
foreach($satvy->getSon() as $satvySon){
  echo $satvySon->getName().'<br>';
}

//Vyas and Krpi sons and daughters
$vyasSons=array($kriya);
$vyasDaughters=array($krithi);
$vyas->setSon($vyasSons);
foreach($vyas->getSon() as $vyasSon){
  echo $vyasSon->getName().'<br>';
}
$vyas->setDaughter($vyasDaughters);
foreach($vyas->getDaughter() as $vyasDaughter){
  echo $vyasDaughter->getName().'<br>';
}

$krpiSons=array($kriya);
$krpiDaughters=array($krithi);
$krpi->setSon($vyasSons);
foreach($krpi->getSon() as $krpiSon){
  echo $krpiSon->getName().'<br>';
}
$krpi->setDaughter($krpiDaughters);
foreach($krpi->getDaughter() as $krpiDaughter){
  echo $krpiDaughter->getName().'<br>';
}
