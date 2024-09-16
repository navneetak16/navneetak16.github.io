<?php

// Define the valid user key
$valid_user_key = "YOUR-KEY-HERE"; //<<--- YOUR KEY HERE
//tg @crackmodpro
// Check if the necessary POST parameters are set
if (isset($_POST['game']) && isset($_POST['user_key']) && isset($_POST['serial'])) {
    
    // Retrieve the POST data
    $game = $_POST['game'];
    $user_key = $_POST['user_key'];
    $serial = $_POST['serial'];

    // Check if the user_key is valid
    if ($user_key === $valid_user_key) {
        $real = "$game-$user_key-$serial-Vm8Lk7Uj2JmsjCPVPVjrLa7zgfx3uz9E";
        $token = md5($real);
        $rng = time() + 100000;
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
                "rng" => $rng
            ]
        ];
    } else {
        $response = [
            "status" => false,
            "message" => "INVALID OR EXPIRED KEY."
        ];
    }
    header('Content-Type: application/json');
    echo json_encode($response);

} else {
    $error_response = [
        "status" => false,
        "message" => "TG @crackmodpro"
    ];
    header('Content-Type: application/json');
    echo json_encode($error_response);
}
?>
//tg@crackmodpro