<?php
try {

  var_dump($fb);

    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get('/me?fields=id,name,email', '{access-token}');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

// Returns a `Facebook\GraphNodes\GraphUser` collection
$user = $response->getGraphUser();

echo 'Name: ' . $user['name'];
// OR
// echo 'Name: ' . $user->getName();