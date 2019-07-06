<?php
error_reporting(0);
session_start();
/*For Server
--------------*/
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db = "lottery";

date_default_timezone_set('Asia/Manila');
$current_date = date('Y-m-d H:i:s');
$admin_url="http://localhost/JustGrab";
$client_url="";
$image_url="http://74.208.111.147/Lottery_UAT/uploads/";
$connect = mysql_connect($db_host,$db_user,$db_password) or die(mysql_error());
$GOOGLE_API_KEY="AIzaSyCSK4grIYFHXG-oTZnoRKOWnbBjTXhb5S0";

mysql_select_db($db,$connect) or die(mysql_error());


function secure($field,$type)
{
    switch($type)
    {
        case 'get':
            $output = strip_tags(mysql_real_escape_string(filter_input(INPUT_GET, $field, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES)));
            break;

        case 'post':
            $output = strip_tags(mysql_real_escape_string(filter_input(INPUT_POST, $field, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES))); 
            break;

        default:
            break;
    }

    return $output;
}


function UniqueRandomNumbersWithinRange_payment($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}


function randomstring()
{
	$string=str_split('abcdefghijklmnopqrstuvwxyz'.'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.'0123456789');
	shuffle($string);
	$rand ='';
	foreach(array_rand($string,12) as $k)
	{
		$rand .=$string[$k];	
	}
	return $rand;	
}
/**
 * Replace Space to "-" from String  
 *
*/
function rpcspace($str)
{
	$str=strtolower(str_replace(" ","-",$str));
	return $str;
}
/**
 * Replace all special Character in string  
 *
*/

function removespecialch($string) {
   $string = strtolower(str_replace(' ', '-', $string)); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

   return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}	

 $key = "&/ASD%g/..&FWSF2csvsq2we!%%";
function my_number_decrypt($data, $key, $base64_safe=true, $expand=true) {
        if ($base64_safe) $data = base64_decode($data.'==');
        $data = @mcrypt_encrypt(MCRYPT_ARCFOUR, $key, $data, MCRYPT_MODE_STREAM);
        if ($expand) $data = base_convert($data, 36, 10);
        return $data;
}

$a="";
function get_rambol6($number, $combinations = array( )) 
{
    if (empty($number)) 
	{ 
		$GLOBALS['a'].=join('', $combinations) . ",";
       // echo  join('', $combinations) . ",";
		//echo implode(',',$combinations);
    }
	 else 
	 {
//		 echo "<pre>";
	//	print_r($number);
        for ($i = count($number) - 1; $i >= 0; --$i) 
		{
			
             $new_number = $number;
             $new_combinations = $combinations;
             list($foo) = array_splice($new_number, $i, 1);
             array_unshift($new_combinations, $foo);
             get_rambol6($new_number, $new_combinations);
         }
    }
	return rtrim($GLOBALS['a'],",");
}

function get_rambol3($number, $no_digit, $all_combination = array()) {
    if (empty($all_combination)) {
        $all_combination = $number;
    }
    if ($no_digit == 1) {
        return $all_combination;
    }
    $new_combinations = array();
    foreach ($all_combination as $combination)
	 {
        foreach ($number as $digit) 
		{
		if(
		 $number[0].$number[1].$number[2]==$combination.$digit ||
		 $number[0].$number[2].$number[1]==$combination.$digit ||
 		 $number[1].$number[2].$number[0]==$combination.$digit ||
 		 $number[1].$number[0].$number[2]==$combination.$digit ||
 		 $number[2].$number[1].$number[0]==$combination.$digit ||
	     $number[2].$number[0].$number[1]==$combination.$digit  ||
		 $number[0].$number[0].$number[0]==$combination.$digit ||
		  $number[1].$number[1].$number[1]==$combination.$digit || 
		  $number[2].$number[2].$number[2]==$combination.$digit
		 )
			{

			}
			else
			{

		
    							}	
								
								
								if(in_array($combination . $digit,$new_combinations)){}
								else
								{
if (


$number[0].$number[1].$number[2]==$combination.$digit ||
		 $number[0].$number[2].$number[1]==$combination.$digit ||
 		 $number[1].$number[2].$number[0]==$combination.$digit ||
 		 $number[1].$number[0].$number[2]==$combination.$digit ||
 		 $number[2].$number[1].$number[0]==$combination.$digit ||
	     $number[2].$number[0].$number[1]==$combination.$digit  ||
		  $number[0].$number[0].$number[0]==$combination.$digit ||
		  $number[1].$number[1].$number[1]==$combination.$digit || 
		  $number[2].$number[2].$number[2]==$combination.$digit
		 ){}
else{		
								$new_combinations[] = $combination . $digit;
}							
								
								
								
								}
								
        }
		
    }
	

    return get_rambol3($number, $no_digit - 1, $new_combinations);

}
function CreateBet_Notification($registation_idsj,$message4) {
  //Google cloud messaging GCM-API url
  global  $GOOGLE_API_KEY;
  $registation_ids = array();
     $Notification_type=1;
  array_push($registation_ids,$registation_idsj);          
  $respJson = '{"greetMsg":"'.$message4.'","Notification_type":"'.$Notification_type.'"}';
  $message = array("m" => $respJson);

        $url = 'https://android.googleapis.com/gcm/send';
        $fields = array(
            'registration_ids' => $registation_ids,
            'data' => $message,
        );
  // Update your Google Cloud Messaging API Key
  if (!defined('GOOGLE_API_KEY')) {
   define("GOOGLE_API_KEY", $GOOGLE_API_KEY);   
  }
        $headers = array(
            'Authorization: key='.$GOOGLE_API_KEY,
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);    
  //echo "--".$result;
        if ($result === FALSE) {
           // die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
       // return $result;
    }
//so anytime i need to sanitize something i simply type for example:

//$username = secure("username", "post");
?>