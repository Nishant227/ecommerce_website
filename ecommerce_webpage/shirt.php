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
  float:center;
  width: 95%;
  height: 30%;
  padding: 15px;
  border-bottom: 2px solid grey;
  margin: 8px;
}

/* Clearfix (clear floats) */
.row::after {
  float: left;
  content: "";
  clear: both;
  display: table;
  
}
div a:hover{
      padding:25px;
    }
    h5{
      float:right;
    }
    h4{
      text-decoration: line-through;
    }

</style>
<div class="row">
   <div class="column">
      <center> <a href=""><img src="image/shirt/shirt1.jpg"  width="100" height="180" onclick>
      <h5><center>Diverse</a><h2>₹499 <h4>₹1199 </h4><h3>save ₹700</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
     </div>        
     <div class="column">
      <center> <a href=""><img src="image/shirt/shirt2.jpg"  width="100" height="180">
             <h5>  <center>Tryme Fashion</a><h2>₹699 <h4>₹2999 </h4><h3>save ₹2300</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>         
   <div class="column">
    <center> <a href=""> <img src="image/shirt/shirt3.jpg"  width="100" height="180">
            <h5><center>Traci</a><h2>₹625 <h4>₹999 </h4><h3>save ₹374</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>        
    <div class="column">        
      <center> <a href=""> <img src="image/shirt/shirt4.jpg"  width="100" height="180">
                <h5><center>Dennis Lingo</a><h2>₹549 <h4>₹1849 </h4><h3>save ₹1300</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/shirt/shirt5.jpg"   width="100" height="180">
             <h5><center>Krishma Emporia</a><h2>₹1999 <h4>₹699 </h4><h3>save ₹1300</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/shirt/shirt6.jpg"  width="100" height="180">
            <h5><center>Gritstones</a><h2>₹349 <h4>₹999 </h4><h3>save ₹650</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/shirt/shirt7.jpg"  width="100" height="180">
            <h5><center>Finivo</a><h2>₹697 <h4>₹999 </h4><h3>save ₹302</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/shirt/shirt8.jpg"  width="100" height="180">
            <h5><center>Accox</a><h2>₹539 <h4>₹1480 </h4><h3>save ₹941</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    
  </div>
</body>

	<footer>

       <?php include "footer1.php"?>
     
     </footer>