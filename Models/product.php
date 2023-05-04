<?php 
    
    class Product {
        public $name;
        public $description;
        public $price;
        public $category;
        public $imageUrl;
    

    function __construct(string $name, string $description, int $price, string $category, string $imageUrl){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->imageUrl = $imageUrl;


    }
}
