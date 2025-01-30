<?php
include "html.php";

//list icones
$check = "<i class='fa fa-check-square-o' aria-hidden='true'></i>";
$bugs = '<i class="fa fa-bug" aria-hidden="true"></i>';
$flash = '<i class="fa fa-bolt" aria-hidden="true"></i>';
$close = '<i class="fa fa-close" aria-hidden="true"></i>';
$param = '<i class="fa fa-cogs" aria-hidden="true"></i>';
$hdd = '<i class="fa fa-hdd-o" aria-hidden="true"></i>';
$user_id = '<i class="fa fa-user" aria-hidden="true"></i>';


if(isset($_GET['i'])){
	header("refresh:1");
}
function getstatut($url){
	$ch = curl_init();
	
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
	curl_setopt($ch,CURLOPT_MAXREDIRS,true);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	
	$exec = curl_exec($ch);
	$http_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);
	curl_close($ch);
	
	if($http_code == "200"){
		return "200";
	}elseif($http_code == "404"){
		return "404";
	}elseif($http_code == "403"){
		return "403";
	}elseif($http_code == "400"){
		return "400";
	}elseif($http_code == "500"){
		return "500";
	}else{
		return "Error";
	}
	
}
function changeFile(){
	$tb = [
	"index.php"
	];
	$randomIndex = array_rand($tb);
    $elementChoisi = $tb[$randomIndex];
    return $elementChoisi;
}

function request($url,$param,$filename){
	
	$target = $url."/".$filename."?page=".$param;
	
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$target);
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$exec = htmlspecialchars(curl_exec($ch));
	curl_close($ch);
	return $exec;
}


if(isset($_GET['url'])){
	$_oo = true;
$target = $_GET['url'];
$file = changeFile();
$automatic_url = $target."/".$file;

if(isset($_GET['file'])){
	$target_file = $_GET['file'];
}else{
	$target_file = "payload.txt";
}
$lines = file($target_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);


if(getStatut($automatic_url) == "200"){
	echo "<p class='gris'>$flash Scanning ...</p>";
	
	foreach($lines as $data){
		$return =  request($target,$data,$file);
		//FOR MACTING
		$matching = [
		"root:x:0:0:root:",
		"user/lib",
		"root",
		":root"
		];
		$m1 = $matching[0];
		$m2 = $matching[1];
		$m3 = $matching[2];
		$m4 = $matching[3];
		//DETECTING
		if(strpos($return,$m1) !== false || 
		strpos($return,$m2) !== false ||
		strpos($return,$m3) !== false ||
		strpos($return,$m4) !== false
		){
		echo "<p class='green'>$check LFI detected with : <b class='yellow'>$data</b></p>";
		}else{
			echo "<p class='red'>$close Not Detected !</p>";
		}
		
	}
}else{
	header("refresh:1");
	echo "<p class='red'>$user_id For Error : <a href='?i'>Click</a> For manuel refreshing</p>";
}
}
?>