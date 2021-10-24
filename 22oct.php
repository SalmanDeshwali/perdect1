<?php
$number = 1234.56;
setlocale(LC_MONETARY,"en_US");
echo money_format("The price is %i", $number);
?>


<!-- <?php
parse_str("name=Peter&age=43");

echo $name."<br>";
echo $age;
?> -->

<?php
parse_str("name=Peter&age=43",$myArray);
print_r($myArray);
?>

