<html>
<head><title>reverse</title>
<style>
        body {
            background-image: url("c.jpg");
            background-color: #cccccc;
        }
    </style></head>
<body>
<center><h1>
    <form method="post">        
Enter a Number: <input type="text" name="num"/><br>  <br>
<button type="submit">Check</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $num1 = $num;
        $rev = 0;
        $sum = 0;
        $rem = 0;
        while($num > 1)
        {
            $rem = $num % 10;
            $sum += $rem;
            $rev = $rev * 10 + $rem;
            $num = (int)$num / 10;
        }
        echo "The sum of the digits of $num1 is $sum"; 
        echo "</br>";
        if($num1 == $rev){  
            echo "The number $num1 is Palindrome";     
        }else{  
            echo "The number $num1 is not a Palindrome";   
        }  
}     
      ?> 
</h1>
</center>
</body>
</html>


