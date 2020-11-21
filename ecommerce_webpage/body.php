
 <html>
 <header><?php include "header.php"?></header>
<body>
  <style>
    * {
  box-sizing: border-box;

}

.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display:;
}
</style>
  <div class="row">
     <div class="column">
      <center> <a href=""><img src="image/shirt.jpg" alt="pant"              width="100" height="100" onclick>
            <h5>  Shirt's</h5>
     </div>        
     <div class="column">
      <center> <a href=""><img src="image/pant.jpg" alt="pant"             width="100" height="100">
             <h5>  <justify> Pant's</h5>
    </div>         
   <div class="column">
    <center> <a href=""> <img src="image/mobile1.jpg" alt="pant"               width="100" height="100">
            <h5>Mobile's</h5>
    </div>        
    <div class="column">        
      <center> <a href=""> <img src="image/laptop.jpg" alt="pant"               width="100" height="100">
                <h5>Laptop's</h5>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/shoes.jpg" alt="pant"              width="100" height="100">
             <h5>Shoe's</h5>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/kids.jpg" alt="pant"              width="100" height="100">
             <h5>Kid's</h5>
    </div>
    <div class="column">            
      <center><a href=""> <img src="image/women.jpg" alt="pant" width="100" height="100" name="Women">
            <h5>Women's</h5>
    </div>
  </div>
</body>
<footer><?php include "footer1.php"?></footer>