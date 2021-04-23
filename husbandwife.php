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


//KingShan wife
$kingShanWife=$queenAnga;
$kingShan->setWife($kingShanWife);
echo $kingShan->getWife()->getName().'<br>';

//QueenAnga husband
$queenAngaHusband=$kingShan;
$queenAnga->setHusband($queenAngaHusband);
echo $queenAnga->getHusband()->getName().'<br>';

//Chit wife
$chitWife=$amba;
$chit->setWife($chitWife);
echo $chit->getWife()->getName().'<br>';

//Amba husband
$ambaHusband=$chit;
$amba->setHusband($ambaHusband);
echo $amba->getHusband()->getName().'<br>';

//Vich wife
$vichWife=$lika;
$vich->setWife($vichWife);
echo $vich->getWife()->getName().'<br>';

//Lika husband
$likaHusband=$vich;
$lika->setHusband($likaHusband);
echo $lika->getHusband()->getName().'<br>';

//Aras wife
$arasWife=$chitra;
$aras->setWife($arasWife);
echo $aras->getWife()->getName().'<br>';

//Chitra husband
$chitraHusband=$aras;
$chitra->setHusband($chitraHusband);
echo $chitra->getHusband()->getName().'<br>';

//Vyan wife
$vyanWife=$satya;
$vyan->setWife($vyanWife);
echo $vyan->getWife()->getName().'<br>';

//Satya husband
$satyaHusband=$vyan;
$satya->setHusband($satyaHusband);
echo $satya->getHusband()->getName().'<br>';

//Jaya wife
$jayaWife=$dritha;
$jaya->setWife($jayaWife);
echo $jaya->getWife()->getName().'<br>';

//Dritha husband
$drithaHusband=$jaya;
$dritha->setHusband($drithaHusband);
echo $dritha->getHusband()->getName().'<br>';

//Arit wife
$aritWife=$jnki;
$arit->setWife($aritWife);
echo $arit->getWife()->getName().'<br>';

//jnki husband
$jnkiHusband=$arit;
$jnki->setHusband($jnkiHusband);
echo $jnki->getHusband()->getName().'<br>';

//Asva wife
$asvaWife=$satvy;
$asva->setWife($asvaWife);
echo $asva->getWife()->getName().'<br>';

//Satvy husband
$satvyHusband=$asva;
$satvy->setHusband($satvyHusband);
echo $satvy->getHusband()->getName().'<br>';

//Vyas wife
$vyasWife=$krpi;
$vyas->setWife($vyasWife);
echo $vyas->getWife()->getName().'<br>';

//Krpi husband
$krpiHusband=$vyas;
$krpi->setHusband($krpiHusband);
echo $krpi->getHusband()->getName().'<br>';
