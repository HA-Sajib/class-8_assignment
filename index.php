<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <!-- Assignment - 1 -->
    <h3>Assignment - 1</h3>
<?php
function total_age($age){
    if($age <= 10){
        echo "You are children<br>";
    } else if($age <= 18){
        echo "You are teenagers<br>";
    } else if($age <= 45){
        echo "You are young people<br>";
    } else {
        echo "You are old man<br>";
    }
}
total_age(10);
total_age(23);
total_age(56);
?>

<!-- Assignment - 2 -->
<h3>Assignment - 2</h3>

<?php
/*1: Area of Circle
Area = rr2 */
//  Area of Rectangle
function Area_of_rectangle($lenth,$width){ //Area of Rectangle ---> Area = L*W
    $rectangle_result = $lenth*$width;
    echo $rectangle_result."<br>";
}
Area_of_rectangle(20,40);

//  Area of square
function Area_of_square($s){  //Area of square---> Area = a*a
    $square_result = $s*$s;
    echo $square_result."<br>";
}
Area_of_square(2);

//  Area of triangle
function Area_of_triangle($height,$base){ //Area of Triangle ---> Area = (1/2)*b*h
    $triangle_result = (1/2)*$height* $base;
    echo $triangle_result."<br>";
}
Area_of_triangle(10,20);
?>

<!-- Assignment - 3 -->
<h3>Assignment - 3</h3>
<?php
function total_subject($bangla,$english,$math,$accounting){
    $total_mark = ($bangla+$english+$math+$accounting)/4;

    if($bangla <= 33 || $english <= 33|| $math <= 33 || $accounting <= 33 ){
        echo "You are faill";
    } else if($total_mark >= 80 && $total_mark <= 100 ){
        echo "you got A+";
    } else if($total_mark >= 70 && $total_mark <= 79 ){
        echo "you got A";
    } else if($total_mark >= 60 && $total_mark <= 69 ){
        echo "you got A-";
    } else if($total_mark >= 50 && $total_mark <= 59 ){
        echo "you got B";
    } else if($total_mark >= 40 && $total_mark <= 49 ){
        echo "you got C";
    } else{
        echo "Result did not found";
    }
}
total_subject(50,60,70,80);
?>

<!-- Assignment - 4 -->
<h3>Assignment - 4</h3>
<?php  

?>
<!-- Assignment - 5 -->
<h3>Assignment - 5</h3>
<?php  
function bmi($mitar,$kg){
    $bmi_result = $kg/($mitar*$mitar);
    if($bmi_result <= 18.5){
        echo "tumii cikon..tmr khawa ucit";
    } else if($bmi_result < 25){
        echo "Tumii normal achooo";
    } else if($bmi_result < 30){
        echo "onek Mota... kom khaite hobe";
    } else if($bmi_result < 35){
        echo "onek onek motaa.....khabar control korte hobe";
    } else{
        echo "not found";
    }
}
bmi(1.70688,56);
?>
<!-- Assignment - 6 -->
<h3>Assignment - 6</h3>
<?php  
function money_exchange($taka,$converter){
    if($converter == "usd"){
        $taka = $taka/86.23;
        echo $taka."<br>";
    } else if($converter == "cad"){
        $taka = $taka/67.55;
        echo $taka."<br>";
    } else if($converter == "pound"){
        $taka = $taka/109.75;
        echo $taka."<br>";
    } else if($converter == "euro"){
        $taka = $taka/92.39;
        echo $taka."<br>";
    }else{
        echo $taka."<br>";
    }
}
money_exchange(10000,'usd');
?>
</body>
</html>