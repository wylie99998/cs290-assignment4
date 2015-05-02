<?php 

$g =0;
$p =0;
if (empty($_GET)) {
    if(empty($_POST)){
		echo '{"Type":"[GET|POST]", "parameters":null}';
	}
	else{
		
		$p = 1;
	}
}
else
{
	
	$g =1;
}

if($g == 1 || $p ==1){
	
	if($g == 1){
		$arr['Type']= "GET";
		$arr['Parameters'] = $_GET;
		
		echo json_encode($arr);
	}
	else{
		$arr['Type']= "POST";
		$arr['Parameters'] = $_POST;
		
		echo json_encode($arr);
	}
}
?>