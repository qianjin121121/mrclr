<?php
$cars=array("aaa"=>"Volvo","BMW","SAAB");
if(	isset($_POST['data'])	){
	$cars['data'] = $_POST['data'];
}
// 	$cars['data'] = 'ss'.'data';

// $cars[]="ssss";
// $cararray = $cars;
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
// print_r ($cars);
// unset($cararray[3]);
// print_r ($cararray);
echo json_encode($cars);
?>