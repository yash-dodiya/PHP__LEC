<?php
if(isset($_POST['savefile']))
{
      $size=filesize("video1702975532.mp4");
      header('content-type:application/octal-stream');
      header('content-disposition:attachment;filename="video1702975532.mp4"');
      header('content-length'.$size);
      readfile("video1702975532.mp4");

}


?>
<h2> Hey Yash-dodiya..</h2>
<form method="post">
    <button type="submit" name="savefile">Download</button>
</form>