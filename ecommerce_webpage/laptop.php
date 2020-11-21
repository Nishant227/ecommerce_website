<html>
 <header>

 	<?php include "header.php"?>
 		
 	</header>
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
      <center> <a href="http://localhost/php/ecommerce_webpage/hp.php"><img src="image/hp.jpg" alt="pant"              width="180" height="180" onclick>
            <h5>  HP</h5>
     </div>        
     <div class="column">
      <center> <a href="http://localhost/php/ecommerce_webpage/sony.php"><img src="image/sony.jpg" alt="pant"             width="180" height="180">
             <h5>  <justify> Sony</h5>
    </div>         
   <div class="column">
    <center> <a href="http://localhost/php/ecommerce_webpage/microsoft.php"> <img src="image/microsoft.jpg" alt="pant"               width="180" height="180">
            <h5>Microsoft</h5>
    </div>        
    <div class="column">        
      <center> <a href="http://localhost/php/ecommerce_webpage/apple.php"> <img src="image/apple1.jpg" alt="pant"               width="180" height="180">
                <h5>Apple</h5>
    </div>
    <div class="column">            
      <center><a href="http://localhost/php/ecommerce_webpage/dell.php"> <img src="image/dell.jpg" alt="pant"              width="180" height="180">
             <h5>Dell</h5>
    </div>
    <div class="column">            
      <center><a href="http://localhost/php/ecommerce_webpage/lenovo.php"> <img src="image/lenovo.jpg" alt="pant"              width="180" height="180">
             <h5>Lenovo</h5>
    </div>
     <div class="column">            
      <center><a href="http://localhost/php/ecommerce_webpage/asus.php"> <img src="image/asus.jpg" alt="pant"              width="180" height="180">
             <h5>Asus</h5>
    </div>
    
  </div>
</body>

	<footer>

       <?php include "footer1.php"?>
     
     </footer>