
<?php
if (isset($_REQUEST['savefile'])) {
    # code...
    $size = filesize("C:\xampp\htdocs\PHP___LEC\Lecture_2\Session_Cookie\header_file_download\images.png");
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="C:\xampp\htdocs\PHP___LEC\Lecture_2\Session_Cookie\header_file_download\images.png"');
    header('Content-Length: ' . $size);
    readfile("C:\xampp\htdocs\PHP___LEC\Lecture_2\Session_Cookie\header_file_download\images.png");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="savefile">Download</button>
    </form>
<table>
    <tbody>
        <tr>
            <th>Type</th>
            <th>Values</th>
        </tr>
        <tr>
            <td>Application</td>
            <td>application/EDI-X12<br>
                application/EDIFACT<br>
                application/javascript<br>
                application/octet-stream<br>
                application/ogg<br> 
                application/pdf<br>
                application/xhtml+xml<br>
                application/x-shockwave-flash<br>
                application/json<br>
                application/ld+json<br>
                application/xml<br>
                application/zip<br>
                application/x-www-form-urlencoded
            </td>

        </tr>
        <tr>
            <td>Audio</td>
            <td>audio/mpeg<br
            >audio/x-ms-wma<br>
            audio/vnd.rn-realaudio<br>
            audio/x-wav
            </td>
        </tr>
        <tr>
            <td>Image</td>
            <td>image/gif<br>
            image/jpeg<br>
            image/png<br>
            image/tiff<br>
            image/vnd.microsoft.icon<br>
            image/x-icon<br>
            image/vnd.djvu<br>
            image/svg+xml
            </td>
        </tr>
        <tr>
            <td>Multipart</td>
            <td>multipart/mixed<br>
            multipart/alternative<br>
            multipart/related (using by MHTML (HTML mail).)<br>
            multipart/form-data
            </td>
        </tr>
        <tr>
            <td>Text</td>
            <td>text/css<br>
            text/csv<br>
            text/html<br>
            text/javascript (obsolete)<br>
            text/plain<br>
            text/xml
            </td>
        </tr>
        <tr>
            <td>Video</td>
            <td>video/mpeg<br>
            video/mp4<br>
            video/quicktime<br>
            video/x-ms-wmv<br>
            video/x-msvideo<br>
            video/x-flv<br>
            video/webm
        </td>
        </tr>
        <tr>
            <td>VND</td>
            <td>application/vnd.oasis.opendocument.text<br>
            application/vnd.oasis.opendocument.spreadsheet<br>
            application/vnd.oasis.opendocument.presentation<br>
            application/vnd.oasis.opendocument.graphics<br>
            application/vnd.ms-excel<br>
            application/vnd.openxmlformats-officedocument.spreadsheetml.sheet<br>
            application/vnd.ms-powerpoint<br>
            application/vnd.openxmlformats-officedocument.presentationml.presentation<br>
            application/msword<br>
            application/vnd.openxmlformats-officedocument.wordprocessingml.document<br>
            application/vnd.mozilla.xul+xml
            </td>
        </tr>
    </tbody>
</table>
</body>