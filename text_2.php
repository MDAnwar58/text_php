<?php

function addTwoNumber($num1, $num2)
{
    $num = $num1 + $num2;

    return $num;
}

echo addTwoNumber(30, 20) + 300;



function writeStudentName($name)
{
    echo ($name.",");
}


writeStudentName('Rabbil vai');
writeStudentName('Hasin haider vai');
writeStudentName('foysal vai');


?>

<?php

function A1()
{
    return "Rabbil vai----";
}
function A2()
{
    return A1();
}
function A3()
{
    return A2();
}

A2();

function F1()
{
    echo "Rabbil vai58";
}
function F2($name)
{
    return $name;
}

F2(F1());

?>
<br>
<?php

for ($i=2; $i < 100; $i=$i+2) { 
    if($i == 20)
    {
        continue;
    }

    echo "Video-$i <br>";
    
}

?>

<br>

<?php

$countries = array('bangladesh', 'Pakistan', 'afganistan', 'arob'); 

foreach($countries as $country)
{
    if($country == 'afganistan')
    {
        continue;
    }
    echo "$country<br>";
}