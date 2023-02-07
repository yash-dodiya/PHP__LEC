<?php

echo "<pre>";
echo "<br>===========================GET========================<br>";
print_r ($_GET);
echo "<br>===========================POST=======================<br>";
print_r($_POST);
echo "<br>===========================REQUEST====================<br>";
print_r($_REQUEST);
echo "<br>===========================FILES======================<br>";
print_r($_FILES);
echo "<br>===========================GLOBALS=====================<br>";
print_r($GLOBALS);
echo "</pre>";
?>
<h2>GET</h2>
<p>Get Will Send Data To The Server Using Url</p>
<p>It Is Les Secuare Beacause It Is Send Data To The Server Via Url</p>
<p>Faster Than Post</p>
<p>Form Default Method Is Get</p>
<p>Mostly use For Searching And Sending Data To Other Page</p>
<p> ? Will Be Appending Data It Is Called Quary Selector & Will Help To Send Multiple Data</p>
<p>Limitation of 1024 Byte and 2048 Char Only</p>
<p>Not Supported File Uploading</p>


<div>
    <form method="get">
        <input_ones type="text" name="usernamegetmethod" id="usernamegetmethod">
        <input type="submit" name="btnsubmit" >
    </form>
</div>

    

<h2>POST</h2>
<p>send data without URL </p>
<p>secure then get</p>
<p>supports file uploading</p>

  <!-- <form method="POST">
    <input type="text" name="usernamepostmethod" id="usernamepostmethod">
    <input type="submit" name="btnpostsubmit" id="btnpostsubmit">
  </form> -->
 <p> files </p>
  <!-- <form method="post" enctype="multipart/form-data">
    <input type="text" name="usernamepostmethod" id="usernamepostmethod">
    <input type="file" name="img" id="img">
    <input type="submit" name="btnpostmethod" id="btnpostmethod">
  </form> -->

  