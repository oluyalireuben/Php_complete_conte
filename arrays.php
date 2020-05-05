<?php
//arrays
$names =["Clarence","Shammah","Matin","Nelly","Veronica","Jackie","Timothy","Michael","John","Juma","Cynthia"];
$ages=[ 20,23,12,45,26,34,23,33,25,21];
echo $names[4];
echo "<hr>";
echo $ages[0];

foreach ($names as $jina)
{
   echo "$jina<br>";
   echo "<br>";}
   echo sizeof($names);
    echo "<br>";
    array_push($names,"Bush");
    echo sizeof($names);
echo "<hr>";
echo var_dump($names);
echo "<hr>";
array_pop($names);
echo var_dump($names);
echo "<hr>";
rsort($ages);
foreach($ages as $miaka)
{
    echo "$miaka<br>";
}
echo "<hr>";
echo array_sum($ages);
echo "<hr>";
$person =["names"=>"Clarence Matin","age"=>23,"colour"=>"blue"];
echo $person["names"];
echo "<hr>";
echo $person["age"];
echo "<hr>";
echo $person["colour"];