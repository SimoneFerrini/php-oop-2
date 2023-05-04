<?php 
    class Gioco extends Product {
        public $marca;

        function __construct(string $name, string $description, int $price, string $category, string $imageUrl, string $marca){
            parent::__construct($name, $description, $price, $category, $imageUrl);

            $this->marca = $marca;

        }

        public function getLastDescription($product){
            return 'Marca: ' . $product->marca;
         }
    }

?>