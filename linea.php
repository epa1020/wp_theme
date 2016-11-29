<?php require_once 'header.php';?>
<style>
div.relative {
    position: relative;
    vertical-align:middle;
    text-align:left;
} 
div.relative h3{
font-family;fuentes;
margin: 0;
display:inline;
padding:0 6px 0 0;
background-color:#fff;
}
div.relative span{
 color:#c9c9c9;
  background-image:url('images/elipse.png');
  background-repeat:no-repeat;
  	background-position: center; 
}
div.absolute {
    position: absolute;
    top: 13px;
    width: 100%;
    background-color:#c9c9c9;
    height: 1px;
    border: 1px solid #c9c9c9;
    z-index:-1;
}

</style>

<br><br>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="relative"><h3>¿QUIENES SOMOS?</h3><span>O</span>
  <div class="absolute"></div>
</div>
</div>
</div>
</div>
<br><br>
<?php require_once 'footer.php';?>