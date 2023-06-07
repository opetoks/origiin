<?php
if (!function_exists('is_loggedin')) {
    function is_loggedin() {
        if(isset($_SESSION['uid'])) {
			return true;
        }
    }
}

if (!function_exists('getSettings')) {
    function getSettings() {
        global $db; 
        $stmt = $db->prepare("SELECT * FROM configures");
        $stmt->execute();
        return $stmt;
    }
}


if (!function_exists('getPayouts')) {
    function getPayouts() {
        global $db; 
        $stmt = $db->prepare("SELECT * FROM payout_logs WHERE status = 'success'");
        $stmt->execute();
        return $stmt;
    }
}

if (!function_exists('getDeposits')) {
    function getDeposits() {
        global $db; 
        $stmt = $db->prepare("SELECT user_id, charge, final_amount, username FROM funds LEFT JOIN users ON users.id WHERE funds.status = '1' AND users.id = funds.user_id");
        $stmt->execute();
        return $stmt;
    }
}

function userinfo($user_id) {
	global $db;
	$query = $db->prepare("SELECT * FROM users WHERE user_id = $user_id  LIMIT 1");
	$row = $query->fetch();
	return $row;
}
?>
