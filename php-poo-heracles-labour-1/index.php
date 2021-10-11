<?php
// First Labour : Heracles vs Nemean Lion
// use your Figher class here

require_once __DIR__ . '/src/Fighter.php'; 

$heracles = new Fighter('🧔 Herales', 20, 6);
$nemeanLion = new Fighter('🦁 Nemean Lion', 11, 13);
$round = 0 ;
while($heracles->isALive()  && $nemeanLion-> isAlive() )
{
    $round += 1;
    $heracles->fight($nemeanLion);
    $nemeanLion->fight($heracles);
    
    // 💙 ⚔️ 🏆 💀

   echo "🕐 Round #$round\n";  
   echo " $heracles->name  ⚔️   $nemeanLion->name  💙  $nemeanLion->name : $nemeanLion->life pv restant\n";
   echo " $nemeanLion->name  ⚔️  $heracles->name 💙 $heracles->name : $heracles->life pv restant \n ";
   
}
if(!$heracles->isAlive() && !$nemeanLion->isAlive()){
    echo "MATCH NUL, AUCUN GAGNANT";
}
elseif( !$heracles->isAlive())
{ 
    echo " 💀  $heracles->name est mort !\n";
    echo " 🏆  $nemeanLion->name wins ! (💙 $nemeanLion->life) ";
}else{
    echo " 💀  $nemeanLion->name est mort !\n";
    echo " 🏆  $heracles->name wins !(💙 $heracles->life) ";
}
    

