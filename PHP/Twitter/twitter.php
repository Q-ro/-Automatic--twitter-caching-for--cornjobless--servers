<?PHP
/*
 * Creadits   : A work by Tom Elliott at "Web Dev Door".
 */
session_start();
require_once("twitteroauth-master/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
                             
// Fill this information with your own.
$twitteruser = "brainfreezenews";
$file = $twitteruser."-tweets.txt";
$notweets = 7;
$consumerkey = "";
$consumersecret = "";
$accesstoken = "";
$accesstokensecret = "";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);

//Check twitter response for errors.
if ( isset( $tweets->errors[0]->code )) {
    // If errors exist, print the first error for a simple notification.
    echo "Error encountered: ".$tweets->errors[0]->message." Response code:" .$tweets->errors[0]->code;
} else {
    // No errors exist. Write tweets to json/txt file.
    $file = $twitteruser."-tweets.txt";
    $fh = fopen($file, 'w') or die("can't open file");
    fwrite($fh, json_encode($tweets));
    fclose($fh);
      
    if (file_exists($file)) {
       echo $file . " successfully written (" .round(filesize($file)/1024)."KB)";
    } else {
        echo "Error encountered. File could not be written.";
    }
}

?>