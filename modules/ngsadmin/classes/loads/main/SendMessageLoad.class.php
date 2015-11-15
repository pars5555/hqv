<?php

require_once (CLASSES_PATH . "/loads/admin/BaseAdminLoad.class.php");
require_once(CLASSES_PATH . "/managers/UserManager.class.php");

/**
 *
 * @author Vahagn Kirakosyan
 *
 */
class SendMessageLoad extends BaseAdminLoad {

    public function load() {
    	$userManager = UserManager::getInstance($this->config, $this->args);
		$users = $userManager->selectAll();
		$this->addParam("users", $users);
    }
	
	public function getTemplate() {
        return TEMPLATES_DIR . "/admin/main/send_message.tpl";
    }

}

?>