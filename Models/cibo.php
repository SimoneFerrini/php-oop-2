<?php 
    class Cibo extends Product {
        protected $dataScadenza;

        function __construct(string $name, string $description, int $price, string $category, string $imageUrl, string $dataScadenza){
            parent::__construct($name, $description, $price, $category, $imageUrl);

            $this->dataScadenza = $dataScadenza;

        }

        public function getScadenza(){
            return $this->dataScadenza;
         }
    }

?>