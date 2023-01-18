<?php
if(isset($_POST['savefile']))
{

    $size=filesize(" ");
    header('content-type:application/octal-stream');
    header('content-disposition:attachment;filename=" "');
    header('content-length:'.$size);
    readfile(" ");
}


?>
<h2> Hey Yash-dodiya..</h2>
<form method="post">
    <button type="submit" name="savefile">Download</button>
</form>