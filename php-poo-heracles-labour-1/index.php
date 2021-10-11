<?php
// First Labour : Heracles vs Nemean Lion
// use your Figher class here

require_once __DIR__ . '/src/Fighter.php'; 

$heracles = new Fighter('🧔 Herales', 20, 6);
$nemeanLion = new Fighter('🦁 Nemean Lion', 11, 13);

while($heracles->isALive()  && $nemeanLion-> isAlive() ){
    $heracles->fight($nemeanLion);
    $nemeanLion->fight($heracles);
    
   
}

