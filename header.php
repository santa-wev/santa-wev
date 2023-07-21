<?php
  
// Target URL
$url = "https://$_SERVER['HTTP_HOST']";
  
// Fetching headers
$headers = get_headers($url);
  
// Printing headers
print_r($headers);
?>
