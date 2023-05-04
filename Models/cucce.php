<?php 
    class Cuccia extends Product {
        public $dimensioni;

        function __construct(string $name, string $description, int $price, string $category, string $imageUrl, string $dimensioni){
            parent::__construct($name, $description, $price, $category, $imageUrl);

            $this->dimensioni = $dimensioni;

        }

        public function getLastDescription($product){
           return 'Dimensioni:' . $product->dimensioni . ' cm';
        }
    }

?>