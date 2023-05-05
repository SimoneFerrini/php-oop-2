<?php 

    require_once __DIR__ . '/../Traits/Pesable.php';
    class Cuccia extends Product {
        use Pesable;
        
        protected $dimensioni;

        function __construct(string $name, string $description, int $price, string $category, string $imageUrl, string $dimensioni){
            parent::__construct($name, $description, $price, $category, $imageUrl);

            $this->dimensioni = $dimensioni;

        }

        public function getDimensioni(){
           return $this->dimensioni;
        }
    }

?>