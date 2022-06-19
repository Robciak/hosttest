<?php
class user {
    function islg() {
            if(isset($_SESSION['user']))
                return true;
            return false;
        }

    
    function isAdmin($userid = 0) {
        if(!$userid)
            if($this->group->type >= 3)
                return TRUE;
            else
                return FALSE;

        $u = $this->db->getRow("SELECT `username`,`banned` FROM `".MLS_PREFIX."users` WHERE `userid` = ?i", $userid);
        $group = $this->getGroup($userid);
        if($group->type >= 3)
            return TRUE;
        return FALSE;
    }
    function isMember($userid = 0) {
        if(!$userid)
            if($this->group->type == 1)
                return TRUE;
            else
                return FALSE;

        $u = $this->db->getRow("SELECT `username`,`banned` FROM `".MLS_PREFIX."users` WHERE `userid` = ?i", $userid);
        $group = $this->getGroup($userid);
        if($group->type >= 3)
            return TRUE;
        return FALSE;
    }
    function logout() {
		global $set;
		//session_unset('user');
		unset($_SESSION['user']);
		$path_info = parse_url($set->url);
		setcookie("user", 0, time() - 3600 * 24 * 30, $path_info['path']); // delete
		setcookie("pass", 0, time() - 3600 * 24 * 30, $path_info['path']); // delete
	}


}