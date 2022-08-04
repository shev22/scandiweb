<?php

 class Controller {


   public function index(Router $router)
   {
      $products = $router->db->getProducts();

      $router->renderView('index', ['products' => $products]);
      
   }

   
   public function create(Router $router)
   {
    
    $category = $router->db->getCategory();
    

    $router->renderView('create', ['category' => $category]);

    $productData = [

      'sku' => '',
       'name' => '',
       'price' => '',
       'category_id' => '',
        'size' => '',
        'weight' => '',
        'height' => '',
        'width' => '',
        'length' => ''
     
    ];



    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $productData['sku'] = $_POST['sku'];
        $productData['name'] = $_POST['name'];
        $productData['price'] =  (float)$_POST['price'];
        $productData['category_id'] = $_POST['category_id'];
        $productData['size'] = (float)$_POST['size'];
        $productData['weight'] = (float)$_POST['weight'];
        $productData['height'] =(float) $_POST['height'];
        $productData['width'] = (float)$_POST['width'];
        $productData['length'] =(float) $_POST['length'];

        $product = new Product();
        $product -> load($productData);
        $product -> save();
    }

    $router->renderView('create',['products' => $productData]);
      
   }

   public function delete(Router $router)
   {

    //$id = implode(',' , $_POST['checkbox']);
    $checkbox = $_POST['checkbox']
;    $router -> db -> deleteProduct($checkbox);

    header("Location: /");

   }
 
  }