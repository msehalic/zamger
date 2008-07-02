<LINK href="css/izgled.css" rel="stylesheet" type="text/css">
<?
function studentska_raspored ()
	{
		global $userid,$user_siteadmin,$user_studentska, $db, $main;

		global $_lv_; // Potrebno za genform() iz libvedran


		require("lib/manip.php"); // radi ispisa studenata sa predmeta


		// Provjera privilegija

		if (!$user_studentska && !$user_siteadmin) {
			zamgerlog("nije studentska",3); // 3: error
			biguglyerror("Pristup nije dozvoljen.");
			return;
		}

		require_once "classes/admin_raspored.php";

		$aRas = new adminRaspored;

		return $aRas ->printajAdministracijuRasporeda();
	}
?>