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

/*------------------------Brothers and sisters----------------------*/

//Chit brothers and sisters
echo '<h1>Brothers and Sisters</h1>
      <hr>';
$chitBrothers=array($lsh,$vich,$aras);
$chitSisters=array($satya);
echo "<h4>Chit Brothers</h4>";
$chit->setBrother($chitBrothers);
foreach($chit->getBrother() as $chitBrother){
  echo $chitBrother->getName().'<br>';
}
echo "<h4>Chit Sisters</h4>";
$chit->setSister($chitSisters);
foreach($chit->getSister() as $chitSister){
  echo $chitSister->getName().'<br>';
}

//Lsh brothers and sisters
$lshBrothers=array($chit,$vich,$aras);
$lshSisters=array($satya);
echo "<h4>Lsh Brothers</h4>";
$lsh->setBrother($lshBrothers);
foreach($lsh->getBrother() as $lshBrother){
  echo $lshBrother->getName().'<br>';
}
echo "<h4>Lsh Sisters</h4>";
$lsh->setSister($lshSisters);
foreach($lsh->getSister() as $lshSister){
  echo $lshSister->getName().'<br>';
}

//Vich brothers and sisters
$vichBrothers=array($chit,$lsh,$aras);
$vichSisters=array($satya);
echo "<h4>Vich Brothers</h4>";
$vich->setBrother($vichBrothers);
foreach($vich->getBrother() as $vichBrother){
  echo $vichBrother->getName().'<br>';
}
echo "<h4>Vich Sisters</h4>";
$vich->setSister($vichSisters);
foreach($vich->getSister() as $vichSister){
  echo $vichSister->getName().'<br>';
}

//Aras brothers and sisters
$arasBrothers=array($chit,$lsh,$vich);
$arasSisters=array($satya);
echo "<h4>Aras Brothers</h4>";
$aras->setBrother($arasBrothers);
foreach($aras->getBrother() as $arasBrother){
  echo $arasBrother->getName().'<br>';
}
echo "<h4>Aras Sisters</h4>";
$aras->setSister($arasSisters);
foreach($aras->getSister() as $arasSister){
  echo $arasSister->getName().'<br>';
}

//Satya brothers
echo "<h4>Satya Brothers</h4>";
$satyaBrothers=array($chit,$lsh,$vich,$aras);
$satya->setBrother($satyaBrothers);
foreach($satya->getBrother() as $satyaBrother){
  echo $satyaBrother->getName().'<br>';
}

//Dritha brothers and sisters
$drithaBrothers=array($vritha);
$drithaSisters=array($tritha);
echo "<h4>Dritha Brothers</h4>";
$dritha->setBrother($drithaBrothers);
foreach($dritha->getBrother() as $drithaBrother){
  echo $drithaBrother->getName().'<br>';
}
echo "<h4>Dritha Sisters</h4>";
$dritha->setSister($drithaSisters);
foreach($dritha->getSister() as $drithaSister){
  echo $drithaSister->getName().'<br>';
}

//Tritha brothers and sisters
$trithaBrothers=array($vritha);
$trithaSisters=array($dritha);
echo "<h4>Tritha Brothers</h4>";
$tritha->setBrother($trithaBrothers);
foreach($tritha->getBrother() as $trithaBrother){
  echo $trithaBrother->getName().'<br>';
}
echo "<h4>Tritha Sisters</h4>";
$tritha->setSister($trithaSisters);
foreach($tritha->getSister() as $trithaSister){
  echo $trithaSister->getName().'<br>';
}

//Vritha sisters
echo "<h4>Vich Sisters</h4>";
$vrithaSisters=array($dritha,$tritha);
$vritha->setSister($vrithaSisters);
foreach($vritha->getSister() as $vrithaSister){
  echo $vrithaSister->getName().'<br>';
}

//Villa sister
echo "<h4>Villa Sisters</h4>";
$villaSisters=array($chika);
$villa->setSister($villaSisters);
foreach($villa->getSister() as $villaSister){
  echo $villaSister->getName().'<br>';
}

//Chika sister
echo "<h4>Chika Sisters</h4>";
$chikaSisters=array($villa);
$chika->setSister($chikaSisters);
foreach($chika->getSister() as $chikaSister){
  echo $chikaSister->getName().'<br>';
}


//Jnki brother
echo "<h4>Jnki Brothers</h4>";
$jnkiBrothers=array($ahit);
$jnki->setBrother($jnkiBrothers);
foreach($jnki->getBrother() as $jnkiBrother){
  echo $jnkiBrother->getName().'<br>';
}

//Ahit sister
echo "<h4>Ahit Sisters</h4>";
$ahitSisters=array($jnki);
$ahit->setSister($ahitSisters);
foreach($ahit->getSister() as $ahitSister){
  echo $ahitSister->getName().'<br>';
}


//Asva brothers and sisters
echo "<h4>Asva Brothers</h4>";
$asvaBrothers=array($vyas);
$asvaSisters=array($atya);
$asva->setBrother($asvaBrothers);
foreach($asva->getBrother() as $asvaBrother){
  echo $asvaBrother->getName().'<br>';
}
echo "<h4>Asva Sisters</h4>";
$asva->setSister($asvaSisters);
foreach($asva->getSister() as $asvaSister){
  echo $asvaSister->getName().'<br>';
}

//Vyas brothers and sisters
echo "<h4>Vyas Brothers</h4>";
$vyasBrothers=array($asva);
$vyasSisters=array($atya);
$vyas->setBrother($vyasBrothers);
foreach($vyas->getBrother() as $vyasBrother){
  echo $vyasBrother->getName().'<br>';
}
echo "<h4>Vyas Sisters</h4>";
$vyas->setSister($vyasSisters);
foreach($vyas->getSister() as $vyasSister){
  echo $vyasSister->getName().'<br>';
}

//Atya brothers
echo "<h4>Atya Brothers</h4>";
$atyaBrothers=array($asva,$vyas);
$atya->setBrother($atyaBrothers);
foreach($atya->getBrother() as $atyaBrother){
  echo $atyaBrother->getName().'<br>';
}

//laki sister
echo "<h4>Laki Sisters</h4>";
$lakiSisters=array($lavnya);
$laki->setSister($lakiSisters);
foreach($laki->getSister() as $lakiSister){
  echo $lakiSister->getName().'<br>';
}
//Lavnya brother
echo "<h4>Lavnya brother</h4>";
$lavnyaBrothers=array($laki);
$lavnya->setBrother($lavnyaBrothers);
foreach($lavnya->getBrother() as $lavnyaBrother){
  echo $lavnyaBrother->getName().'<br>';
}

//Krithi brothers
echo "<h4>Krithi Brothers</h4>";
$krithiBrothers=array($kriya);
$krithi->setBrother($krithiBrothers);
foreach($krithi->getBrother() as $krithiBrother){
  echo $krithiBrother->getName().'<br>';
}

//Kriya sister
echo "<h4>Kriya Sisters</h4>";
$kriyaSisters=array($krithi);
$kriya->setSister($kriyaSisters);
foreach($kriya->getSister() as $kriyaSister){
  echo $kriyaSister->getName().'<br>';
}

/*------------------------Sons and Daughter----------------------*/

echo '<h1>Sons and Daughters</h1>
      <hr>';
//KingShan and QueenAnga sons and daughters
$kingShanSons=array($chit,$lsh,$vich,$aras);
$kingShanDaughters=array($satya);
echo "<h4>KingShan Sons</h4>";
$kingShan->setSon($kingShanSons);
foreach($kingShan->getSon() as $kingSon){
  echo $kingSon->getName().'<br>';
}
echo "<h4>KingShan Daughters</h4>";
$kingShan->setDaughter($kingShanDaughters);
foreach($kingShan->getDaughter() as $kingDaughter){
  echo $kingDaughter->getName().'<br>';
}

$queenAngaSons=array($chit,$lsh,$vich,$aras);
$queenAngaDaughters=array($satya);
echo "<h4>QueenAnga Sons</h4>";
$queenAnga->setSon($queenAngaSons);
foreach($queenAnga->getSon() as $queenSon){
  echo $queenSon->getName().'<br>';
}
echo "<h4>QueenAnga Daughters</h4>";
$queenAnga->setDaughter($queenAngaDaughters);
foreach($queenAnga->getDaughter() as $queenDaughter){
  echo $queenDaughter->getName().'<br>';
}

//Chit and Amba sons and daughters
$chitSons=array($vritha);
$chitDaughters=array($dritha,$tritha);
echo "<h4>Chit Sons</h4>";
$chit->setSon($chitSons);
foreach($chit->getSon() as $chitSon){
  echo $chitSon->getName().'<br>';
}
echo "<h4>Chit Daughters</h4>";
$chit->setDaughter($chitDaughters);
foreach($chit->getDaughter() as $chitDaughter){
  echo $chitDaughter->getName().'<br>';
}

$ambaSons=array($vritha);
$ambaDaughters=array($dritha,$tritha);
echo "<h4>Amba Sons</h4>";
$amba->setSon($ambaSons);
foreach($amba->getSon() as $ambaSon){
  echo $ambaSon->getName().'<br>';
}
$amba->setDaughter($ambaDaughters);
echo "<h4>Amba Daughters</h4>";
foreach($amba->getDaughter() as $ambaDaughter){
  echo $ambaDaughter->getName().'<br>';
}

//Vich and Lika sons and daughters
$vichSons=array();
$vichDaughters=array($villa,$chika);
$vich->setSon($vichSons);
echo "<h4>Vich Daughters</h4>";
$vich->setDaughter($vichDaughters);
foreach($vich->getDaughter() as $vichDaughter){
  echo $vichDaughter->getName().'<br>';
}
$likaSons=array();
$likaDaughters=array($villa,$chika);
$lika->setSon($likaSons);
echo "<h4>Lika Daughters</h4>";
$lika->setDaughter($likaDaughters);
foreach($lika->getDaughter() as $likaDaughter){
  echo $likaDaughter->getName().'<br>';
}

//Aras and Chitra sons and daughters
$arasSons=array($ahit);
$arasDaughters=array($jnki);
echo "<h4>Aras Sons</h4>";
$aras->setSon($arasSons);
foreach($aras->getSon() as $arasSon){
  echo $arasSon->getName().'<br>';
}
echo "<h4>Aras Daughters</h4>";
$aras->setDaughter($arasDaughters);
foreach($aras->getDaughter() as $arasDaughter){
  echo $arasDaughter->getName().'<br>';
}

$chitraSons=array($ahit);
$chitraDaughters=array($jnki);
$chitra->setSon($chitraSons);
echo "<h4>Chitra sons</h4>";
foreach($chitra->getSon() as $chitraSon){
  echo $chitraSon->getName().'<br>';
}
echo "<h4>Chitra Daughters</h4>";
$chitra->setDaughter($chitraDaughters);
foreach($chitra->getDaughter() as $chitraDaughter){
  echo $chitraDaughter->getName().'<br>';
}

//Vyan and satya sons and daughters
$vyanSons=array($asva,$vyas);
$vyanDaughters=array($atya);
echo "<h4>Vyan Sons</h4>";
$vyan->setSon($vyanSons);
foreach($vyan->getSon() as $vyanSon){
  echo $vyanSon->getName().'<br>';
}
echo "<h4>Vyan Daughters</h4>";
$vyan->setDaughter($vyanDaughters);
foreach($vyan->getDaughter() as $vyanDaughter){
  echo $vyanDaughter->getName().'<br>';
}

$satyaSons=array($asva,$vyas);
$satyaDaughters=array($atya);
echo "<h4>Satya Sons</h4>";
$satya->setSon($satyaSons);
foreach($satya->getSon() as $satyaSon){
  echo $satyaSon->getName().'<br>';
}
echo "<h4>Satya Daughters</h4>";
$satya->setDaughter($satyaDaughters);
foreach($satya->getDaughter() as $satyaDaughter){
  echo $satyaDaughter->getName().'<br>';
}

//Jaya and Dritha sons and daughters
$jayaSons=array($yodhan);
$jayaDaughters=array();
echo "<h4>Jaya Sons</h4>";
$jaya->setSon($jayaSons);
$jaya->setDaughter($jayaDaughters);
foreach($jaya->getSon() as $jayaSon){
  echo $jayaSon->getName().'<br>';
}
$drithaSons=array($yodhan);
$drithaDaughters=array();
echo "<h4>Dritha Sons</h4>";
$dritha->setSon($jayaSons);
$dritha->setDaughter($drithaDaughters);
foreach($dritha->getSon() as $drithaSon){
  echo $drithaSon->getName().'<br>';
}

//Arit and Jnki sons and daughters
$aritSons=array($laki);
$aritDaughters=array($lavnya);
echo "<h4>Arit Sons</h4>";
$arit->setSon($aritSons);
foreach($arit->getSon() as $aritSon){
  echo $aritSon->getName().'<br>';
}
echo "<h4>Arit Daughters</h4>";
$arit->setDaughter($aritDaughters);
foreach($arit->getDaughter() as $aritDaughter){
  echo $aritDaughter->getName().'<br>';
}

echo "<h4>Jnki Sons</h4>";
$jnkiSons=array($laki);
$jnkiDaughters=array($lavnya);
$jnki->setSon($jnkiSons);
foreach($jnki->getSon() as $jnkiSon){
  echo $jnkiSon->getName().'<br>';
}
echo "<h4>Jnki Daughters</h4>";
$jnki->setDaughter($jnkiDaughters);
foreach($jnki->getDaughter() as $jnkiDaughter){
  echo $jnkiDaughter->getName().'<br>';
}

//Asva and Satvy sons and daughters
$asvaSons=array($vasa);
$asvaDaughters=array();
echo "<h4>Asva Sons</h4>";
$asva->setSon($asvaSons);
$asva->setDaughter($asvaDaughters);
foreach($asva->getSon() as $asvaSon){
  echo $asvaSon->getName().'<br>';
}
$satvySons=array($vasa);
echo "<h4>Satya Sons</h4>";
$satvy->setSon($satvySons);
foreach($satvy->getSon() as $satvySon){
  echo $satvySon->getName().'<br>';
}

//Vyas and Krpi sons and daughters
$vyasSons=array($kriya);
$vyasDaughters=array($krithi);
echo "<h4>Vyas Sons</h4>";
$vyas->setSon($vyasSons);
foreach($vyas->getSon() as $vyasSon){
  echo $vyasSon->getName().'<br>';
}
echo "<h4>Vyas Daughters</h4>";
$vyas->setDaughter($vyasDaughters);
foreach($vyas->getDaughter() as $vyasDaughter){
  echo $vyasDaughter->getName().'<br>';
}

$krpiSons=array($kriya);
$krpiDaughters=array($krithi);
$krpi->setSon($vyasSons);
echo "<h4>Krpi Sons</h4>";
foreach($krpi->getSon() as $krpiSon){
  echo $krpiSon->getName().'<br>';
}
$krpi->setDaughter($krpiDaughters);
echo "<h4>Krpi Daughters</h4>";
foreach($krpi->getDaughter() as $krpiDaughter){
  echo $krpiDaughter->getName().'<br>';
}

/*------------------------Husband and wife----------------------*/

echo '<h1>Husband and Wife</h1>
      <hr>';
//KingShan wife
echo "<h4>KingShan Wife</h4>";
$kingShanWife=$queenAnga;
$kingShan->setWife($kingShanWife);
echo $kingShan->getWife()->getName().'<br>';

//QueenAnga husband
echo "<h4>Queen Husband</h4>";
$queenAngaHusband=$kingShan;
$queenAnga->setHusband($queenAngaHusband);
echo $queenAnga->getHusband()->getName().'<br>';

//Chit wife
echo "<h4>Chit Wife</h4>";
$chitWife=$amba;
$chit->setWife($chitWife);
echo $chit->getWife()->getName().'<br>';

//Amba husband
echo "<h4>Amba Husband</h4>";
$ambaHusband=$chit;
$amba->setHusband($ambaHusband);
echo $amba->getHusband()->getName().'<br>';

//Vich wife
echo "<h4>Vich Wife</h4>";
$vichWife=$lika;
$vich->setWife($vichWife);
echo $vich->getWife()->getName().'<br>';

//Lika husband
echo "<h4>Lika Husband</h4>";
$likaHusband=$vich;
$lika->setHusband($likaHusband);
echo $lika->getHusband()->getName().'<br>';

//Aras wife
echo "<h4>Aras Wife</h4>";
$arasWife=$chitra;
$aras->setWife($arasWife);
echo $aras->getWife()->getName().'<br>';

//Chitra husband
echo "<h4>Chitra Husband</h4>";
$chitraHusband=$aras;
$chitra->setHusband($chitraHusband);
echo $chitra->getHusband()->getName().'<br>';

//Vyan wife
echo "<h4>Vyan Wife</h4>";
$vyanWife=$satya;
$vyan->setWife($vyanWife);
echo $vyan->getWife()->getName().'<br>';

//Satya husband
echo "<h4>Satya Husband</h4>";
$satyaHusband=$vyan;
$satya->setHusband($satyaHusband);
echo $satya->getHusband()->getName().'<br>';

//Jaya wife
echo "<h4>Jaya Wife</h4>";
$jayaWife=$dritha;
$jaya->setWife($jayaWife);
echo $jaya->getWife()->getName().'<br>';

//Dritha husband
echo "<h4>Dritha Husband</h4>";
$drithaHusband=$jaya;
$dritha->setHusband($drithaHusband);
echo $dritha->getHusband()->getName().'<br>';

//Arit wife
echo "<h4>Arit Wife</h4>";
$aritWife=$jnki;
$arit->setWife($aritWife);
echo $arit->getWife()->getName().'<br>';

//jnki husband
echo "<h4>Jnki Husband</h4>";
$jnkiHusband=$arit;
$jnki->setHusband($jnkiHusband);
echo $jnki->getHusband()->getName().'<br>';

//Asva wife
echo "<h4>Asva Wife</h4>";
$asvaWife=$satvy;
$asva->setWife($asvaWife);
echo $asva->getWife()->getName().'<br>';

//Satvy husband
echo "<h4>Satvy Husband</h4>";
$satvyHusband=$asva;
$satvy->setHusband($satvyHusband);
echo $satvy->getHusband()->getName().'<br>';

//Vyas wife
echo "<h4>Vyas Wife</h4>";
$vyasWife=$krpi;
$vyas->setWife($vyasWife);
echo $vyas->getWife()->getName().'<br>';

//Krpi husband
echo "<h4>Krpi Husband</h4>";
$krpiHusband=$vyas;
$krpi->setHusband($krpiHusband);
echo $krpi->getHusband()->getName().'<br>';

$chitra->printMember();
