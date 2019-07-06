<ul>
<?php
//function to retrieve posts from facebook’s server
error_reporting(0);
function loadFB($fbID){
	
    $url = "https://graph.facebook.com/".$fbID."/posts?limit=30";
	
	
    // Update by MC Vooges 11jun 2014: Access token is now required:
    $url.= '&access_token=147216442612778|baxtCnwtOWCp9ErhXkCzpsx2Wh8';// *
    echo $url;
    //load and setup CURL
     $c = curl_init($url);
     curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    //get data from facebook and decode JSON
     $page = json_decode(curl_exec($c));
    //close the connection
     curl_close($c);
    //return the data as an object
     return $page->data;
}

/* Change These Values */
// Your Facebook ID
 $fbid = "diatrades";
 
 
// How many posts to show?
 $fbLimit = 50;
// Your Timezone
date_default_timezone_set("America/Chicago");


/* Dont Change */
// Variable used to count how many we’ve loaded
 $fbCount = 0;
// Call the function and get the posts from facebook
 $myPosts = loadFB($fbid);


//loop through all the posts we got from facebook
foreach($myPosts as $dPost){
    //only show posts that are posted by the page admin
    if($dPost->from->id==$fbid){
        //get the post date / time and convert to unix time
         $dTime = strtotime($dPost->created_time);
        //format the date / time into something human readable
        //if you want it formatted differently look up the php date function
         $myTime=date("M d Y h:ia",$dTime);
        ?>
        <ul>
            <li><?php echo($dPost->message) . $myTime; ?></li>
        </ul>
        <?php
        //increment counter
         $fbCount++;
        //if we’ve outputted the number set above in fblimit we’re done
         if($fbCount >= $fbLimit) break;
    }
}
?>
<?php

$token = 'https://graph.facebook.com/oauth/access_token?client_id=147216442612778&client_secret=6f1a7ff83de2b7869355d23750924ee3&grant_type=client_credentials';
$token = file_get_contents($token); // returns 'accesstoken=APP_TOKEN|APP_SECRET'
?>
</ul>