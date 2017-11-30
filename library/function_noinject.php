<?php
	function antiinjeksi($text){
		global $db;
		$safetext = $db->real_escape_string(stripslashes(strip_tags(htmlspecialchars($text,ENT_QUOTES))));
		return $safetext;
	}
?>
