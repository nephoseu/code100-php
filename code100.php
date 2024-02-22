<?php

$email = "EMAIL-OR-USERNAME-HERE"; // replace with email or username given to you
$password = "PASSWORD-HERE"; // replace with password given to you

// Step 1: Login
$loginData = json_encode(["email" => $email, "password" => $password]);
$loginOptions = [
    "http" => [
        "method" => "POST",
        "header" => "Content-type: application/json",
        "content" => $loginData
    ]
];
$loginContext = stream_context_create($loginOptions);
$loginResult = file_get_contents("https://challenger.code100.dev/login", false, $loginContext);

// check if login was successful
if ($loginResult === FALSE) {
    die('Invallid credentials!');
}
$token = json_decode($loginResult)->token;

// Step 2: Call Authenticated Endpoint
$authOptions = [
    "http" => [
        "method" => "GET",
        "header" => "Authorization: Bearer $token"
    ]
];
$authContext = stream_context_create($authOptions);
$authResult = file_get_contents("https://challenger.code100.dev/testauthroute", false, $authContext);
echo $authResult . "\r\n\r\n";

// Step 3: Get the puzzle
$puzzleResult = file_get_contents("https://challenger.code100.dev/getpuzzle", false, $authContext);
echo $puzzleResult . "\r\n\r\n";

// Step 4: Solve the puzzle

////////////////////////////
////// YOUR CODE HERE //////
////////////////////////////

$answer = json_encode(["answer" => "some answer in required format"]);

// Step 5: Submit the solution
$submitOptions = [
    "http" => [
        "method" => "POST",
        "header" => "Content-type: application/json\r\nAuthorization: Bearer $token",
        "content" => $answer
    ]
];
$submitContext = stream_context_create($submitOptions);
$submitResult = file_get_contents("https://challenger.code100.dev/postanswer", false, $submitContext);
echo $submitResult . "\r\n";

?>