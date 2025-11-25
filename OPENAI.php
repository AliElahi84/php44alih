<?php
$soal = $_POST['soal'];

$curl = curl_init();

curl_setopt_array($curl, array(
   CURLOPT_URL => 'https://api.one-api.ir/openai/v1/chat/completions',
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => '',
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => 'POST',
   CURLOPT_POSTFIELDS =>'{
  "model": "gpt-4o",
  "messages": [
    {
      "role": "assistant",
      "content": "$soal"
    }
  ],
  "temperature": 1,
  "max_tokens": 2000
}',
   CURLOPT_HTTPHEADER => array(
      'one-api-token: 906548:6480d6c6195d3',
      'Content-Type: application/json'
   ),
));

$response = curl_exec($curl);

curl_close($curl);
$json = json_decode($response);

echo $json->result->choices[0]->message->content;
