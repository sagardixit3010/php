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

//Chit brothers and sisters
$chitBrothers=array($lsh,$vich,$aras);
$chitSisters=array($satya);
$chit->setBrother($chitBrothers);
foreach($chit->getBrother() as $chitBrother){
  echo $chitBrother->getName().'<br>';
}
$chit->setSister($chitSisters);
foreach($chit->getSister() as $chitSister){
  echo $chitSister->getName().'<br>';
}

//Lsh brothers and sisters
$lshBrothers=array($chit,$vich,$aras);
$lshSisters=array($satya);
$lsh->setBrother($lshBrothers);
foreach($lsh->getBrother() as $lshBrother){
  echo $lshBrother->getName().'<br>';
}
$lsh->setSister($lshSisters);
foreach($lsh->getSister() as $lshSister){
  echo $lshSister->getName().'<br>';
}

//Vich brothers and sisters
$vichBrothers=array($chit,$lsh,$aras);
$vichSisters=array($satya);
$vich->setBrother($vichBrothers);
foreach($vich->getBrother() as $vichBrother){
  echo $vichBrother->getName().'<br>';
}
$vich->setSister($vichSisters);
foreach($vich->getSister() as $vichSister){
  echo $vichSister->getName().'<br>';
}

//Aras brothers and sisters
$arasBrothers=array($chit,$lsh,$vich);
$arasSisters=array($satya);
$aras->setBrother($arasBrothers);
foreach($aras->getBrother() as $arasBrother){
  echo $arasBrother->getName().'<br>';
}
$aras->setSister($arasSisters);
foreach($aras->getSister() as $arasSister){
  echo $arasSister->getName().'<br>';
}

//Satya brothers
$satyaBrothers=array($chit,$lsh,$vich,$aras);
$satya->setBrother($satyaBrothers);
foreach($satya->getBrother() as $satyaBrother){
  echo $satyaBrother->getName().'<br>';
}

//Dritha brothers and sisters
$drithaBrothers=array($vritha);
$drithaSisters=array($tritha);
$dritha->setBrother($drithaBrothers);
foreach($dritha->getBrother() as $drithaBrother){
  echo $drithaBrother->getName().'<br>';
}
$dritha->setSister($drithaSisters);
foreach($dritha->getSister() as $drithaSister){
  echo $drithaSister->getName().'<br>';
}

//Tritha brothers and sisters
$trithaBrothers=array($vritha);
$trithaSisters=array($dritha);
$tritha->setBrother($trithaBrothers);
foreach($tritha->getBrother() as $trithaBrother){
  echo $trithaBrother->getName().'<br>';
}
$tritha->setSister($trithaSisters);
foreach($tritha->getSister() as $trithaSister){
  echo $trithaSister->getName().'<br>';
}

//Vritha sisters
$vrithaSisters=array($dritha,$tritha);
$vritha->setSister($vrithaSisters);
foreach($vritha->getSister() as $vrithaSister){
  echo $vrithaSister->getName().'<br>';
}

//Villa sister
$villaSisters=array($chika);
$villa->setSister($villaSisters);
foreach($villa->getSister() as $villaSister){
  echo $villaSister->getName().'<br>';
}

//Chika sister
$chikaSisters=array($villa);
$chika->setSister($chikaSisters);
foreach($chika->getSister() as $chikaSister){
  echo $chikaSister->getName().'<br>';
}


//Jnki brother
$jnkiBrothers=array($ahit);
$jnki->setBrother($jnkiBrothers);
foreach($jnki->getBrother() as $jnkiBrother){
  echo $jnkiBrother->getName().'<br>';
}

//Ahit sister
$ahitSisters=array($jnki);
$ahit->setSister($ahitSisters);
foreach($ahit->getSister() as $ahitSister){
  echo $ahitSister->getName().'<br>';
}


//Asva brothers and sisters
$asvaBrothers=array($vyas);
$asvaSisters=array($atya);
$asva->setBrother($asvaBrothers);
foreach($asva->getBrother() as $asvaBrother){
  echo $asvaBrother->getName().'<br>';
}
$asva->setSister($asvaSisters);
foreach($asva->getSister() as $asvaSister){
  echo $asvaSister->getName().'<br>';
}

//Vyas brothers and sisters
$vyasBrothers=array($asva);
$vyasSisters=array($atya);
$vyas->setBrother($vyasBrothers);
foreach($vyas->getBrother() as $vyasBrother){
  echo $vyasBrother->getName().'<br>';
}
$vyas->setSister($vyasSisters);
foreach($vyas->getSister() as $vyasSister){
  echo $vyasSister->getName().'<br>';
}

//Atya brothers
$atyaBrothers=array($asva,$vyas);
$atya->setBrother($atyaBrothers);
foreach($atya->getBrother() as $atyaBrother){
  echo $atyaBrother->getName().'<br>';
}

//laki sister
$lakiSisters=array($lavnya);
$laki->setSister($lakiSisters);
foreach($laki->getSister() as $lakiSister){
  echo $lakiSister->getName().'<br>';
}

//Krithi brothers
$krithiBrothers=array($kriya);
$krithi->setBrother($krithiBrothers);
foreach($krithi->getBrother() as $krithiBrother){
  echo $krithiBrother->getName().'<br>';
}

//Kriya sister
$kriyaSisters=array($krithi);
$kriya->setSister($kriyaSisters);
foreach($kriya->getSister() as $kriyaSister){
  echo $kriyaSister->getName().'<br>';
}
