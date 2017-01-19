 <html>
<body>
<?php
 error_reporting(0);//to enable error notification
/*
diffrent data types in php
>string
>int 
>bool
>arry
>object
>null 
>resource  
*/

$string="i am a string";
echo "String ".$string."<br>";
$int=123;
echo "int  ".$int."<br>";
$float=123.456;
echo "float ".$float."<br>";
$bool=false;
echo "bool".$bool."<br>";
echo "bool is :";
var_dump($bool);//var dump is used to analize the possition of the data
echo "<br>";
$bool=true;
echo "bool".$bool."<br>";
echo "bool is :";
var_dump($bool);
echo "<br>";
$arry=array("a","b","c","d");
echo"<br>";
var_dump($arry);
echo"<br>";
echo "<pre>";//seems gud
print_r($arry);
echo"</pre>";

//obj type
class student{

function student(){
$this->model="pandu";
}

}
$check_this=new student();
echo $check_this->model;

?>
</body>
</html>
