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
      <center> <a href="http://localhost/php/ecommerce_webpage/mobile_samsung.php"><img src="image/samsung.jpg" alt="pant" width="180" height="180" onclick>
            <h5>  Samsung</h5>
     </div>        
     <div class="column">
      <center> <a href=""><img src="image/micromax.jpg" alt="pant"  width="180" height="180">
             <h5>  <justify> Micromax</h5>
    </div>         
   <div class="column">
    <center> <a href=""> <img src="image/oneplus.jpg" alt="pant"  width="180" height="180">
            <h5>Oneplus</h5>
    </div>        
    <div class="column">        
      <center> <a href=""> <img src="image/apple.jpg" alt="pant" width="180" height="180">
                <h5>Apple</h5>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/lava.jpg" alt="pant"  width="180" height="180">
             <h5>Lava</h5>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/realme.jpg" alt="pant"  width="180" height="180">
             <h5>Real Me</h5>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/oppo.jpg" alt="pant"  width="180" height="180">
             <h5>Oppo</h5>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/vivo.jpg" alt="pant"  width="180" height="180">
             <h5>Vivo</h5>
    </div>
    
  </div>
</body>

	<footer>

       <?php include "footer1.php"?>
     
     </footer>