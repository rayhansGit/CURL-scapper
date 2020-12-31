<?php
$curl = curl_init();

$search_key = $_POST['link'];;
$url = "https://www.amazon.in/s?k=$search_key&ref=nb_sb_noss_2";
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

// preg_match_all("'<span class=\"a-price-whole\">([^<]*)</span>'si", $result, $matches);
preg_match_all("!https://m.media-amazon.com/images/I/[^/s]*?._AC_UL320_.jpg!", $result, $images);

$images_link = (array_values(array_unique($images[0])));

for ($i=0; $i < count($images_link) ; $i++) {
	echo "<div style=float:left>"; 
	echo "<img src='".$images_link[$i]."'>";
	echo "</div>";
	
}
curl_close($curl);
