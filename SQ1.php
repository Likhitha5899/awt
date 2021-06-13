<html>
<head><title>square_root</title>
<style>
        body {
            background-image: url("c.jpg");
            background-color: #cccccc;
        }
    </style></head>
<body>
<center><h1>
<?php
    $num1 = rand(10, 100);
    $sq=sqrt($num1);
	
	echo "Square root of"." ".$num1." "."is:".$sq;
?>
</h1>
</center>
</body>
</html>