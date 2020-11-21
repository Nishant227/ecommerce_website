
 <html>
 <header><?php include "header.php"?></header>
<body>
  <style>
    *{
  box-sizing: ;
}

.column {
  float: left;
  width: 20%;
  padding: 15px;

}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
div a:hover{
      padding:25px;
    }

</style>
   <div class="row">
     <div class="column">
      <center> <a href="http://localhost/php/ecommerce_webpage/shirt.php"><img src="image/shirt.jpg" alt="pant"              width="180" height="180" onclick>
            <h5>  Shirt's</h5>
     </div>        
     <div class="column">
      <center> <a href="http://localhost/php/ecommerce_webpage/pant.php"><img src="image/pant.jpg" alt="pant"             width="180" height="180">
             <h5>  <justify> Pant's</h5>
    </div>         
   <div class="column">
    <center> <a href="http://localhost/php/ecommerce_webpage/mobile.php"> <img src="image/mobile1.jpg" alt="pant"               width="180" height="180">
            <h5>Mobile's</h5>
    </div>        
    <div class="column">        
      <center> <a href="http://localhost/php/ecommerce_webpage/laptop.php"> <img src="image/laptop.jpg" alt="pant"               width="180" height="180">
                <h5>Laptop's</h5>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/shoes.jpg" alt="pant"              width="180" height="180">
             <h5>Shoe's</h5>
    </div>
    <div class="column">            
      <center><a href="http://localhost/php/ecommerce_webpage/kid.php"> <img src="image/kids.jpg" alt="pant"              width="180" height="180">
             <h5>Kid's</h5>
    </div>
    <div class="column">            
      <center><a href="http://localhost/php/ecommerce_webpage/women.php"> <img src="image/women.jpg" alt="pant"              width="180" height="180">
             <h5>Women's</h5>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/book.jpg" alt="pant"              width="180" height="180">
             <h5>Book's</h5>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/electronic.jpg" alt="pant"              width="180" height="180">
             <h5>Electronic's</h5>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/home.jpg" alt="pant"              width="180" height="180">
             <h5>Home & Furniture</h5>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/daily.jpg" alt="pant"              width="180" height="180">
             <h5>Daily Essential's</h5>
    </div>
  </div>
</body>

<footer>
<?php include "footer1.php"?>
</footer>