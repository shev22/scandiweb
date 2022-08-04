
<script>
$(document).ready(function(){
    $("#name").on('change', function(){
        $(".data").hide();
        $("#" + $(this).val()).fadeIn(200);
    }).change()
       });
    </script>


<header>
      
      <nav>
          <div class="product"><h3>Product Add</h3></div>
              
          <div class= "buttons">
              <form action=""  method = "POST">
              <button class ="btn" type="submit" name="add">Save</button>
              <a href = "/" class ="btn" type="submit" name="cancel">Cancel</a>
              
         </div>
         </nav> 
         <div class="hr"><hr class = "gradient"> </div> 
     </header>
  
     <main>  
          
           <div class="forms">
        <label for="sku1">SKU :</label> 
              <input class = "form" type="text" name = "sku" id ="sku1" placeholder = "SKU">
                <label for="name1">Name :</label>
                 <input class = "form" type="text" id="name1" name = "name" placeholder = "NAME">
                   <label for="price1">Price ($) :</label>
                <input  class = "form" type="text" id ="price1" name = "price" placeholder = "PRICE">
          </div>
  
         <br>
         <br>
         <br>
                         
                <select class="select" id="name" name="category_id" value="<?php echo $item['id']?>">
                    <option>Type Switcher</option>
                     <?php foreach($category as $item) { ?>
                        <option value="<?php echo $item['id']?>"><?php echo $item['name']?></option>
                        <?php } ?>
                </select>
                          
                            <br><br>
      
          <div id= "1" class="data">
           <div class="dropboxes1">
                <p class="p2"> Size (MB):</p> <input class = "drop" type="text" name="size" placeholder="SIZE">
              
              <h5>Please enter a size in MB</h5>
          </div>
          </div>
          
            <div id= "3" class="data">
              <div class="dropboxes2">
              <p class="p2">Height (CM):</p> <input class = "drop" type="text" name="height" placeholder="HEIGHT">
              <p class="p2">  Width (CM):</p> <input class = "drop" type="text" name="width" placeholder="WIDTH">
              <p class="p2"> Length (CM):</p><input class = "drop" type="text" name="length" placeholder="LENGTH">
  
              <h5>Define the dimension HxWxL</h5>
          </div>
          </div>
          
            <div id="2" class="data">
               <div class="dropboxes3">
               <p class="p2">  Weight (KG):</p> <input class = "drop" type="text" name="weight" placeholder="WEIGHT">
              </form>
              <h5>Please specify the weight in KG</h5>
          </div>
          
          </div>                                           
     </main>
  
     <footer class="footer">
        <hr class="gradient">
        <h5>Scandiweb Test assignment</h5>

    </footer>