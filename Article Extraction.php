<html>
<head>
</head>
<body>
<?php

$curl = curl_init();
// die("https://document-parser-api.lateral.io/?url=https://translate.google.com/#view=home&op=translate&sl=ar&tl=en&text=%D9%84%D8%B9%D8%A8");
curl_setopt_array($curl, array(
  CURLOPT_URL => utf8_decode(urldecode("https://document-parser-api.lateral.io/?url=https://www.najah.edu/ar/academic/academic-news/2020/04/14/jm-lnjh-thsl-l-tmd-brnmj-bklwryws-tknwlwjy-ltrwy-lqlby-lwl-mn-nw-h-l-mstw-lshrq-lwst/")),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/json",
    "subscription-key: 7de3516e8296ca9793350ff58716bd96"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
  echo file_put_contents("ArticleContent.json",$response);

}
?>
</body>

</html>