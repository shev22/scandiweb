<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../public/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/js/script.js" ></script>
  
</head>
<body>

<header>
        <nav>

            <form action="/delete" method="POST">
        
            <div class="product">
                <h3>Product List</h3>
            </div>

            <div class="buttons">

                <a class="btn" style="text-decoration:none" href="add-product">Add product</a>
                
                <button  class="btn"  type="submit">Mass delete</button>

            </div>
            <div class="hr"></div>
            <hr>
        </nav>
    </header>

    <main class="big">

    
    <?php foreach ($products as $product) { ?>


                <div class="box"> 
                    <input class ='check' type="checkbox" name="checkbox[<?php echo $product[
                        'id'
                    ]; ?>]" value="<?php echo $product['id']; ?>">
                        <p class="p"> <?php echo $product['sku']; ?><br>
                        <?php echo $product['name']; ?><br>
                        <?php echo $product['price']; ?>.00$<br>

                       
                         <?php if ($product['category_id'] == 1) {
                             echo 'size:' . $product['size'] . 'MB';
                         } elseif ($product['category_id'] == 2) {
                             echo 'weight:' . $product['weight'] . 'kg';
                         } elseif ($product['category_id'] == 3) {
                             echo 'dimensions:' .
                                 $product['height'] .
                                 'x' .
                                 $product['width'] .
                                 'x' .
                                 $product['lenght'];
                         } ?>
                        </p>
                 
                </div>

                <?php } ?>
    </main>
</form>
    <footer class="footer">
        <hr class="gradient">
        <h5>Scandiweb Test assignment</h5>

    </footer>