<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {



// $curl = curl_init();

// curl_setopt_array($curl, [
//   CURLOPT_URL => "https://api.gowinston.ai/v2/plagiarism",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "POST",
//   CURLOPT_POSTFIELDS => "{\n  \"file\": \"https://ispel.test/docs/01JPVDVWQ6PMG9RDF4DQFZS2WF.pdf\",\n  \"text\": \"\"\n}",
//   CURLOPT_HTTPHEADER => [
//     "Authorization: Bearer GKoRHNQ4poNmyVdAERtbmOYwTiUajltTELGNaHFsb7c7bc42",
//     "Content-Type: application/json"
//   ],
// ]);

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }
    return view('welcome');
});
