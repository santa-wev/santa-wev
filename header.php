<?php
  
// Target URL
$url = "https://$_SERVER['HTTP_HOST']";
echo $url;
// Fetching headers
$headers = get_headers($url);
  
// Printing headers
print_r($headers);
?>
