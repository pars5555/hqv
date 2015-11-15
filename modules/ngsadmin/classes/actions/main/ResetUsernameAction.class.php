<?php

require_once(CLASSES_PATH . "/framework/AbstractAction.class.php");
require_once(CLASSES_PATH . "/managers/UserManager.class.php");

/**
 * @author Vahagn Kirakosyan
 */
class ResetUsernameAction extends AbstractAction {

    public function service() {
		if(isset($_REQUEST['hashcode']) && !empty($_REQUEST['hashcode'])){
			$userManager = UserManager::getInstance($this->config, $this->args);
			$userDto = $userManager->selectByResetUsernameHashcode($_REQUEST['hashcode']);
			if(!$userDto){
				$this->error(array('msg'=>'Invalid hashcode.'));
			}
			
			if(isset($_REQUEST['username']) && !empty($_REQUEST['username'])){
				$existingUser = $userManager->selectByUsername($_REQUEST['username']);
				if($existingUser){
					$this->error(array('msg'=>'Username already exists.'));	
				}
				
				$userDto->setUsername($_REQUEST['username']);
				$userDto->setResetUsernameHashcode('');
				$updated = $userManager->updateDto($userDto);
		
				if($updated>-1){
					$this->ok();
				}else{
					$this->error(array('msg'=>'System error.Please try again.'));
				}
			}else{
				$this->error(array('msg'=>'Username cannot be empty.'));
			}
			
		}else{
			$this->error(array('msg'=>'Invalid hashcode.'));
		}
    }

    public function getRequestGroup() {
        return RequestGroups::$guestRequest;
    }

}

?>