<?php

session_start();
require_once("twitteroauth.php"); //Path ke library twitteroauth 
$twitteruser = "yrvvan";
$notweets = 4; //jumlah twit yang akan kita ambil 
$consumerkey = "CY4zspNfeRdOFRu7CX179jRc6";
$consumersecret = "RbaiNp2d5YPA4XCeUdcBf0wSJW7PdBMF095KlXxKg8l9mXOdqg";
$accesstoken = "383580974-6Kt1Ywemb7FJ9KCL62iEEjezsOK1COH2sIfN1VWf";
$accesstokensecret = "12dhPjQ9toz5UOY9y9YDDgMiAjDNv4AuprEDFG7rfh8ay";

function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
    $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
    return $connection;
}

$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=" . twitteruser . "&count=" . $notweets);

echo "<pre>";
print_r($tweets);
echo "</pre>";
?>