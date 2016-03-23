<?php
  
    $product_name = 'iPad';
    $variations = array('color' => array('black', 'white'),
                        'memory' => array('16GB', '32GB', '64GB'),
                        'network' => array('Wifi Only', '3G & Wifi'));
   
    $x=0;       
    for ($i = 0; $i < count($variations['color']); $i++) 
    {
        for ($j = 0; $j < count($variations['memory']); $j++) 
        {            
            for ($k = 0; $k < count($variations['network']); $k++) 
            {
                $save[$x]=$product_name."-".$variations['color'][$i].",".$variations['memory'][$j]." , ".$variations['network'][$k]."\n";
                $x++;
            }            
        }
    }
    
    foreach ($save as $numbers) 
    {
        echo "<p>".$numbers."</p>";
    }
?>
