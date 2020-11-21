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
      <center> <a href=""><img src="image/pant/pant1.jpg"  width="100" height="180" onclick>
      <h5><center>Ben Martin</a><h2>₹698 <h4>₹2699 </h4><h3>save ₹2001</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
     </div>        
     <div class="column">
      <center> <a href=""><img src="image/pant/pant2.jpg"  width="100" height="180">
             <h5>  <center>Ben Martin</a><h2>₹522 <h4>₹2499 </h4><h3>save ₹1977</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>         
   <div class="column">
    <center> <a href=""> <img src="image/pant/pant3.jpg"  width="100" height="180">
            <h5><center>Peppyzone</a><h2>₹529 <h4>₹1299 </h4><h3>save ₹770</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>        
    <div class="column">        
      <center> <a href=""> <img src="image/pant/pant4.jpg"  width="100" height="180">
                <h5><center>Dennis Lingo</a><h2>₹522 <h4>₹2998 </h4><h3>save ₹2476</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/pant/pant5.jpg"   width="100" height="180">
             <h5><center>Ben Martin</a><h2>₹945 <h4>₹1999 </h4><h3>save ₹1054</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/pant/pant6.jpg"  width="100" height="180">
            <h5><center>Romano</a><h2>₹594 <h4>₹999 </h4><h3>save ₹405</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/pant/pant7.jpg"  width="100" height="180">
            <h5><center>Urbano fashion</a><h2>₹595 <h4>₹1199 </h4><h3>save ₹604</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    <div class="column">            
      <center> <a href=""> <img src="image/pant/pant8.jpg"  width="100" height="180">
            <h5><center>Ben Martin</a><h2>₹698 <h4>₹2699 </h4><h3>save ₹2001</h3></h2> </h5>
          <h3> <button onclick="document.location='cart.php'">ADD TO CART</button>
           <button onclick="document.location='buy.php'">BUY NOW</button></h3></center>
    </div>
    
  </div>
</body>

	<footer>

       <?php include "footer1.php"?>
     
     </footer>