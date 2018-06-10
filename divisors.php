<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Divisors</title>
</head>
<body>
   <?php
    function divisors_of_a_number($n){//returns all the divisors of a number in an unsorted array
        $i=1;
        $s=bcsqrt($n);
        while($i<=$s)
            {
            if(!(bcmod($n,$i)))
                {
                    $a[]=$i;
                    if($i!=$n)
                    $a[]=bcdiv($n,$i);
                }
                ++$i;
            }
        return $a;
        }
    ?>
    <form action="" method="post">
    <input type="number" name="div" placeholder="Input a dividend">
    <input type="submit" name="divisors" value="Get divisors">
    </form>
    <div>
    <?php
    if(isset($_POST['divisors'])){
        $div_n=$_POST['div'];
        if(empty($div_n)){
            echo "Error, input a value!";
        }else{
     print_r(divisors_of_a_number($div_n));   
        }
    }
    ?>
    </div>
</body>
</html>