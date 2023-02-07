<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <blockquote>
        <h2>Header in PHP: The Ultimate Guide to Header Function</h2>
        <p>The header in PHP is a PHP built-in function for sending a raw HTTP header. The HTTP functions are those that manipulate information sent by the webserver to the client or browser before it sends any further output. The header() function in PHP sends a raw HTTP header to a client or browser. Before HTML, XML, JSON, or other output is given to a browser or client, the server sends raw data as header information with the request (particularly HTTP Request). Headers in PHP contain additional details about the object delivered in the message body, as well as the request and response.</p>
        <p>Syntax</p>
        <p>void header( $header, $replace = TRUE, $http_response_code )</p>
        <p>It includes a header string in the string. There are two types of header calls in general. One is a header that begins with the string "HTTP/" and is used to determine the HTTP status code to send. Another is the "Location," which is required.</p>
        <p>
            replace: This is an optional parameter that specifies whether the header should add a new header or replace the previous one.
        </p>
        <p>
            http response code is an optional parameter that sets the HTTP response code to a specific value (available in PHP 4.3 and higher).
        </p>
        <p>
            The header() method is a built-in function that allows you to deliver a raw HTTP header to a client. HTTP functions allow you to manipulate data supplied to the browser by the webserver before it sends any additional output. You must call it before any actual output is sent, whether from HTML tags, blank lines in a file, or a PHP file.
        </p>
        <pre>
        header("Expires: Sun, 22 Jun 1997 04:00:00 GMT");
        
        header("Cache-Control: no-cache, must-revalidate");
        
        header("Pragma: no-cache");
        
        print_r(headers_list());
    </pre>
        <ul>
            <li> Change page location</li>
            <li> Set timezone header("Expires: Sun, 25 Jul 1997 06:02:34 GMT");</li>
            <li> Set caching control header("Cache-Control: no-cache"); header("Pragma: no-cache");</li>
            <li> Initiate force download</li>
            <li> Send HTTP Status</li>
        </ul>
        <h2>Parameter Values of the Header Function Along With the Use</h2>
        <ul>
            <li aria-level="1">$header: The header in the PHP string is stored in this argument. Header calls can be divided into two categories. The first header begins with the string "HTTP/," which is used to determine which HTTP status code should be sent.&nbsp;</li>
            <li aria-level="1">The “Location”: It is the second type of header. It is a required parameter.</li>
            <li aria-level="1">$replacement: It is a parameter that can be turned off. It shows whether the header should replace or add a second header. True is the default value (will replace). If $replace is False, it forces additional headers of the same kind.</li>
            <li aria-level="1">$http response code: It's a non-mandatory parameter. It sets the HTTP response code to the value supplied (PHP 4.3 and above).</li>
        </ul>
        <h2>How to Download Files Using a Header in PHP</h2>
        <p>To download photos, zip files, pdf documents, exe files, and other types of files, you usually don't need to use a server-side scripting language like PHP. If you store such a file in a publicly accessible folder, you can simply build a hyperlink linking to it, and the browser will instantly download the file anytime a user clicks on the link.</p>
        <p>
            Using the header in the PHP readfile() method, you can force images or other types of data to download straight to the user's hard drive. Now, make a simple image gallery here, that lets people download picture files from the browser with a single mouse click. Create a file called "image-gallery.php" and paste the code below into it.</p>
        <h2>How to Prevent Page Caching Using Headers in PHP?</h2>
        <p>Header in PHP is well-known for its ability to handle dynamic data. However, there are times when you don't want the data to be cached by the client browser (to load the website faster of course). You can override this condition by using the header() function and adding certain options that prevent web pages from being cached.</p>
        <pre>
        header("Cache-Control: no-cache, hence should-revalidate");
    
        header("Expires: Sun, 25 Jun 1999 04:00:00 GMT");
    
        // Providing some random date in the past
    
        echo('Displaying header information: Cache-Control: no-cache, hence should-revalidate' );
    </pre>
    </blockquote>
</body>
</html>
