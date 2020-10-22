<html>
<body>
<center>
<h1>Joshua Gabrielle F. Concepcion</h1>

<h1> CALCULATOR </h1>
<form method=POST>
Input a number: <input type=text name=a><br><br>
Input a number: <input type=text name=b><br><br>

<input type=submit name="add" value="+">
<input type=submit name="sub" value="-">
<input type=submit name="pro" value="*">
<input type=submit name="quo" value="/">

</form>

</body>
</html>

<?php
if (!empty($_POST['a']) || !empty($_POST['b'])){
    $x= $_POST['a'];
    $z= $_POST['b'];

    if (isset($_POST['add'])){
        $ans= $x+$z;
        echo "The sum is: ",$ans;
    }
    if(isset($_POST['sub'])){
        $ans= $x-$z;
        echo "The difference is: ",$ans;
    }
    if(isset($_POST['pro'])){
        $ans= $x*$z;
        echo "The product is: ",$ans;
    }
    if(isset($_POST['quo'])){
        $ans= $x/$z;
        echo "The quotient is: ",$ans;
    }
}

?>

<html>
<body>

<h1> FINDING GCD </h1>
<form method=POST>
Input a number: <input type=text name=c><br><br>
Input a number: <input type=text name=d><br><br>

<input type=submit name=submit value=Submit>
</form>
</body></html>

<?php
    if (!empty($_POST['c']) || !empty($_POST['d']))
    {
        $num1=$gcd1= $_POST['c'];
        $num2=$gcd2= $_POST['d'];

        if(isset($_POST['submit']))
        {
            while($gcd1 != $gcd2)
            {
                if ($gcd1 > $gcd2)
                    $gcd1 = $gcd1 - $gcd2;
                else
                    $gcd2 = $gcd2 - $gcd1;
            }
            echo "GCD of $num1 and $num2 is: $gcd1";
        }
    }
?>
</center>