<?php

print_r($_SESSION);

echo "aaaaa";

/* PHP SDK v5.0.0 */
/* make the API call */
try {
	echo "Entro al try";
  // Returns a `Facebook\FacebookResponse` object
  $response = $facebook->get(
    '/me/likes',
    '{code}'
  );

$result = $facebook->api(array(
'method' => 'fql.query',
'query' => 'select fan_count from page where page_id = 116633947708;'
));
echo $fb_fans = '<li>'.$result[0]['fan_count'].' likes for snipe.net';




echo "Response: " . $response;
echo "Graph node:" . $graphNode;


} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();
/* handle the result */
