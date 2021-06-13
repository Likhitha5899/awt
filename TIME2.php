<html>
<head>
    <title>time</title>
    <style type="text/css">

        body {
            background-image: url("c.jpg");
            background-color: #cccccc;
        }
    </style>
</head>
<body>
<center><h1>
<p>
   The current time is:
    <?php    
        date_default_timezone_set("Asia/Kolkata");
        echo date('h:i:s A');
    ?>.
</p>
</h1></center>
</body>
</html>