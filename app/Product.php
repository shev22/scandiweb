<?php
 
 class Product {

        public ?string $sku = null;
        public ?string $name =  null;
        public ?float $price =  null;
        public ?string $category_id =  null;
        public ?float $size =  null;
        public ?float $weight =  null;
        public ?float $height =  null;
        public ?float $width =  null;
        public ?float $lenght =  null;


        public function load($data)
        {
            $this->sku = $data['sku'];
            $this->name =  $data['name'];
            $this->price =  $data['price'];
            $this->category_id =  $data['category_id'];
            $this->size =  $data['size'];
            $this->weight =  $data['weight'];
            $this->height =  $data['height'];
            $this->width =  $data['width'];
            $this->lenght =  $data['length'];

        }

        public function save()
        {
           $db = Database::$db;
           $db -> setProducts($this);

        }

 }