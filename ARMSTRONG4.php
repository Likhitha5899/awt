<html>
<head><title>armstrong</title>
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
        $total=0;  
        $x=$num;  
        while($x!=0)  
        {  
        $rem=$x%10;  
        $total=$total+$rem*$rem*$rem;  
        $x=$x/10;  
        }  
        echo "The given number is $num"; 
        echo "</br>";
        echo "The sum of the digits is $total"; 
        echo "</br>";
        if($num==$total)  
        {  
        echo "Yes it is an Armstrong number";  
        }  
        else  
        {  
        echo "No it is not an armstrong number";  
        }  
    }     
?> 
</h1>
</center>
</body>
</html>


