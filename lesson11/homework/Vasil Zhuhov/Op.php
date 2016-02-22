<?php
 $anaboli = Array(
   
        0=> Array(
            "description" => Array(
                'firm'=>'Fit Spo',
                'item'=>'Protein',
                'weight' =>'1kg'
            ),
            "pieces" =>2,
            "price" => 30
        ),
        
        
        1=> Array(
            "description" => Array(
                'firm'=>'Anabol',
                'item'=>'Creatin',
                'weight' =>'500g'
            ),
            "pieces" =>1,
            "price" =>16
        )
   );
 $anaboli[2]['description']['frim'] = 'Aleko';
    $anaboli[2]['description']['item'] = '';
    $anaboli[2]['description']['weight'] = '';
    $anaboli[2]['pieces'] = 2;
    $anaboli[2]['price'] = 30;
    
    $anaboli[3]['description']['firm'] = 'Aleko';
    $anaboli[3]['description']['item'] = '';
    $anaboli[3]['description']['weight'] = '';
    $anaboli[3]['pieces'] = 1;
    $anaboli[3]['price'] = 16;
    print_r($anaboli);
 ?>