<!-- Created by: Aden Rao -->
<!-- Created on: Tuesday, July 30, 2019 -->
<!-- This file is all the html for this page and it calls the other php files for things like the navbar, head, footer and scripts -->

<!DOCTYPE html>
<html lang="en">

<head>

<?php include 'includes/head.php' ;?>

</head>

<body>

<!-- Navbar file -->
<?php include 'includes/navbar.php' ;?>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">The Largest Public Companies</h1>
        <h2 class="masthead-subheading mb-0">Sorted By Market Cap</h2>
        <a href="#down" class="btn btn-primary btn-xl rounded-pill mt-5">Show List</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

<style>

/*h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}*/


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #46aeb0, #8cd0d1);
  background: linear-gradient(to right, #46aeb0, #8cd0d1);
/*  font-family: 'Roboto', sans-serif;*/
}
section{
  margin: 50px;
}


/* follow me template */
/*.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}
*/

/* for custom scrollbar for webkit browser*/

/*::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); */
}</style>
</head>
<body>


<!-- <div id="down" class="row mt-2">
  <div class="col-12 text-center mt-2">
    <h3 style="font-size:70px;">List of the Companies:</h3>
    <p style="font-size:30px;">*All prices are USD and in billions*</p>
  </div>
</div>

<div class="cities">
  <h2 style="font-size:40px;">1. Microsoft (MSFT)</h2>
  <p style="font-size:30px;">London is the capital of England.</p>
  <h2 align="center" style="font-size:40px;">1. Microsoft (MSFT)</h2>
  <p align="center" style="font-size:30px;">London is the capital of England.</p>
  <h2 align="right" style="font-size:40px;">1. Microsoft (MSFT)</h2>
  <p align="right" style="font-size:30px;">London is the capital of England.</p>
  <h2 style="font-size:40px;">1. Microsoft (MSFT)</h2>
  <p style="font-size:30px;">London is the capital of England.</p>
</div> -->

<section>
  <!--for demo wrap-->

</section>

<div id="down" class="row mt-2">
  <div class="col-12 text-center mt-2">
    <h3 style="font-size:80px;">List of the Companies:</h3>
    <p style="font-size:30px;">*All prices are USD and in billions*</p>
  </div>
</div>
<div class="row mt-3">
  <div class="col-12 text-center mt-3">
    <h3 style="font-size:70px;">1.</h3>
    <p style="font-size:60px;">Microsoft (MSFT): 1,044.2</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:70px;">2.</h3>
    <p style="font-size:60px;">Apple (AAPL): 980.2</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:70px;">3.</h3>
    <p style="font-size:60px;">Amazon.com (AMZN): 923.4</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:70px;">4.</h3>
    <p style="font-size:60px;">Alphabet (GOOGL): 844.2</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:70px;">5.</h3>
    <p style="font-size:60px;">Facebook (FB): 554.1</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:70px;">6.</h3>
    <p style="font-size:60px;">Berkshire Hathaway (BRK.A): 504.3</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:70px;">7.</h3>
    <p style="font-size:60px;">Alibaba (BABA): 450.7</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:70px;">8.</h3>
    <p style="font-size:60px;">Visa (V): 386.8</p>
  </div>
</div><div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:70px;">9.</h3>
    <p style="font-size:60px;">JPMorgan Chase (JPM): 386.8</p>
  </div>
</div><div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:70px;">10.</h3>
    <p style="font-size:60px;">Johnson & Johnson (JNJ): 343.7</p>
  </div>
</div>

<?php include 'includes/footer.php' ;?> 

<!-- Bootstrap core JavaScript -->
<?php include 'includes/scripts.php' ;?>
</body>

<script type="text/javascript" src="index.js"></script>

</html>