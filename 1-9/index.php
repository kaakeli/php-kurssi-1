<?php
$n=1; 
function getName($n) { 
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
    if($n == 'K')
    {
        echo "on se k";
    }
} 

// KESKEN

  
echo getName($n); 

?>
