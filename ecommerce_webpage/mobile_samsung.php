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
      <center> <a href=""><img src="image/samsung/m01.jpg"  width="100" height="180" onclick>
      <h5><center>Samsung Galaxy M01 (Midnight Black, 3GB RAM, 32GB Storage)</a><h2>₹7499 <h4>₹9999 </h4><h3>save ₹2500</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
     </div>        
     <div class="column">
      <center> <a href=""><img src="image/samsung/m21.jpg"  width="100" height="180">
             <h5>  <center> Samsung Galaxy M21 (Midnight Blue, 4GB RAM, 64GB Storage)</a><h2>₹13999 <h4>₹15999 </h4><h3>save ₹2000</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>         
   <div class="column">
    <center> <a href=""> <img src="image/samsung/m31s.jpg"  width="100" height="180">
            <h5><center>Samsung Galaxy M31s (Mirage Blue, 6GB RAM, 128GB Storage)</a><h2>₹19499 <h4>₹22999 </h4><h3>save ₹3500</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>        
    <div class="column">        
      <center> <a href=""> <img src="image/samsung/m51.jpg"  width="100" height="180">
                <h5><center>Samsung Galaxy M51 (Electric Blue, 6GB RAM, 128GB Storage)</a><h2>₹24999 <h4>₹28999 </h4><h3>save ₹4000</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/samsung/m01core.jpg"   width="100" height="180">
             <h5><center>Samsung Galaxy M01 Core (Mid Blue, 2GB RAM, 32GB Storage) </a><h2>₹5999 <h4>₹8499 </h4><h3>save ₹2500</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/samsung/m31.jpg"  width="100" height="180">
            <h5><center>Samsung Galaxy M31 (Mirage Blue, 6GB RAM, 64GB Storage)</a><h2>₹17499 <h4>₹18999 </h4><h3>save ₹1500</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/samsung/m11.jpg"  width="100" height="180">
            <h5><center>Samsung Galaxy M11 (Mirage Blue, 4GB RAM, 64GB Storage)</a><h2>₹11499 <h4>₹14999 </h4><h3>save ₹3500</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/samsung/m01s.jpg"  width="100" height="180">
            <h5><center>Samsung Galaxy M01s (Mirage Blue, 4GB RAM, 64GB Storage)</a><h2>₹8999 <h4>₹10999 </h4><h3>save ₹2000</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    
  </div>
</body>

	<footer>

       <?php include "footer1.php"?>
     
     </footer>