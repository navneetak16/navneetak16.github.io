<?php

// Check if the necessary POST parameters are set
if (isset($_POST['game']) && isset($_POST['user_key']) && isset($_POST['serial'])) {
    
    // Retrieve the POST data
    $game = $_POST['game'];
    $user_key = $_POST['user_key'];
    $serial = $_POST['serial'];
    
    // Create the $real value
    $real = "$game-$user_key-$serial-Vm8Lk7Uj2JmsjCPVPVjrLa7zgfx3uz9E";
    
    // Generate the token using md5 hash of $real
    $token = md5($real);
    
    // Create the response array
    $response = [
        "status" => true,
        "data" => [
            "real" => $real,
            "token" => $token,
            "modname" => "MAMAYUKERO",
            "mod_status" => "Antiban",
            "mod_server" => "Original",
            "isLoggedin" => true,
            "login_mod" => "Admin",
            "credit" => "RHAUN",
            "version" => "1.0",
            "updatedapk" => true,
            "loginstatus" => true,
            "serverstatus" => "on",
            "noticemode" => "off",
            "zippassmode" => "off",
            "DRONE" => "off",
            "LIGHT" => "off",
            "Floating" => "off",
            "Memory" => "off",
            "Setting" => "off",
            "EXP" => "2025-06-24 23:01:17",
            "device" => "1",
            "rng" => 1769243401
        ]
    ];
    
    // Set the response header to application/json
    header('Content-Type: application/json');
    
    // Output the JSON response
    echo json_encode($response);

} else {
    // Handle missing POST parameters
    $error_response = [
        "status" => false,
        "message" => "Missing required parameters."
    ];
    header('Content-Type: application/json');
    echo json_encode($error_response);
}
?>
