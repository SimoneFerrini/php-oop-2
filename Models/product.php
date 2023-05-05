<?php 
    
    class Product {
        protected $name;
        protected $description;
        protected $price;
        protected $category;
        protected $imageUrl;
    

    function __construct(string $name, string $description, int $price, string $category, string $imageUrl){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->imageUrl = $imageUrl;

    }

    public function getName(){
        return $this->name;
     }

     public function getDescription(){
        return $this->description;
     }

     public function getPrice(){
        return $this->price;
     }

     public function getCategory(){
        return $this->category;
     }
    
     public function getImage(){
        return $this->imageUrl;
     }
}

?>
