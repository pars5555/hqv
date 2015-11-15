<?php

require_once(CLASSES_PATH . "/framework/AbstractAction.class.php");
require_once(CLASSES_PATH . "/managers/UserManager.class.php");

/**
 * @author Vahagn Kirakosyan
 */
class ResetPasswordAction extends AbstractAction {

    public function service() {
		if(isset($_REQUEST['hashcode']) && !empty($_REQUEST['hashcode'])){
			$userManager = UserManager::getInstance($this->config, $this->args);
			$userDto = $userManager->selectByResetPasswordHashcode($_REQUEST['hashcode']);
			if(!$userDto){
				$this->error(array('msg'=>'Invalid hashcode.'));
			}
			
			if(isset($_REQUEST['password']) && !empty($_REQUEST['password'])){
				if($_REQUEST['password']!=$_REQUEST['confirm_password']){
					$this->error(array('msg'=>'Passwords don\'t match.'));
				}
				$userDto->setPassword(md5($_REQUEST['password']));
				$userDto->setResetPasswordHashcode('');
				$updated = $userManager->updateDto($userDto);
		
				if($updated>-1){
					$this->ok();
				}else{
					$this->error(array('msg'=>'System error.Please try again.'));
				}
			}else{
				$this->error(array('msg'=>'Password cannot be empty.'));
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