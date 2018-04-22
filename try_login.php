<?php
    $users = array(
        "user1" => "pass1",
        "user2" => "pass2",
        "user3" => "pass3",
        "user4" => "pass4",
        "user5" => "pass5"
    );

    $action = (empty($_POST['key'])) ? 'byPassword' : 'byKey';
    if ($action == 'byKey') {
        $key = $_POST['key'];
        $keyFile = fopen("validkeys.txt", "r");
        $keyString = fread($keyFile, filesize("validkeys.txt"));
        $keys = explode("\n", $keyString);
	if (in_array($key, $keys)) {
		echo $key;
	} else {
		echo 'invalid';
	}
    } else if ($action == 'byPassword') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($users[$username] && $users[$username] == $password) {
            $new_key = strval(rand(10000,99999)) . "_" . $username;
            file_put_contents("validkeys.txt", $new_key . "\n", FILE_APPEND);
	    setcookie('key', $new_key);
	    echo "valid";
        } else {
            echo 'invalid';
        }
    }
?>
