<?php 
    
    $categories = ['Cane', 'Gatto'];

     
    $prodotto1 = new Cibo('pro_cibo_gat', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum sunt odio distinctio totam! Sunt cumque ut?', 10, $categories[1],'./img/cibo.png','Settembre 2023');
    $prodotto2 = new Cuccia('pro_cuccia_gat', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum sunt odio distinctio totam! Sunt cumque ut?', 100, $categories[1],'./img/cuccia.png', '75x50x75');
    $prodotto3 = new Gioco('pro_gioco_can', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum sunt odio distinctio totam! Sunt cumque ut?', 5, $categories[0],'./img/giochi.png','Mad Dog');
    $prodotto4 = new Cibo('pro_cibo_can', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum sunt odio distinctio totam! Sunt cumque ut?', 9, $categories[0],'./img/cibo.png', 'Ottobre 2029');
    $prodotto5 = new Cuccia('pro_cuccia_can', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum sunt odio distinctio totam! Sunt cumque ut?', 99, $categories[0],'./img/cuccia.png','100x75x100');
    $prodotto6 = new Cibo('pro_cibo_gat1', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum sunt odio distinctio totam! Sunt cumque ut?', 12, $categories[1],'./img/cibo.png', 'Dicembre 2023');
    $prodotto7 = new Gioco('pro_gioco_gat', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum sunt odio distinctio totam! Sunt cumque ut?', 20, $categories[1],'./img/giochi.png','God Cat');


    try{
        $prodotto1->setWeight(250);
    }catch(Exception $e){
        echo $e->getMessage() . '<br>';
    }catch(TypeError $t){
        echo 'Il peso deve essere un numero intero <br>';
    }

    try{
        $prodotto2->setWeight(1500);
    }catch(Exception $e){
        echo $e->getMessage() . '<br>';
    }catch(TypeError $t){
        echo 'Il peso deve essere un numero intero <br>';
    }

    try{
        $prodotto4->setWeight('ciao');
    }catch(Exception $e){
        echo $e->getMessage() . '<br>';
    }catch(TypeError $t){
        echo 'Il peso deve essere un numero intero <br>';
    }

    try{
        $prodotto5->setWeight(3000);
    }catch(Exception $e){
        echo $e->getMessage() . '<br>';
    }catch(TypeError $t){
        echo 'Il peso deve essere un numero intero <br>';
    }

    try{
        $prodotto6->setWeight(-70);
    }catch(Exception $e){
        echo $e->getMessage() . '<br>';
    }catch(TypeError $t){
        echo 'Il peso deve essere un numero intero <br>';
    }
    

    $products = [
        $prodotto1,
        $prodotto2,
        $prodotto3,
        $prodotto4,
        $prodotto5,
        $prodotto6,
        $prodotto7,
    ]
   

?>