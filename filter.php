<?PHP

function loggedIn() {

	session_start();
	if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
		// not logged in
		return false;
	} else {
		return true;
	}



}



?>