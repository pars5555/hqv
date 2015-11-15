<?php
require_once (CLASSES_PATH . "/framework/AbstractAction.class.php");
require_once(CLASSES_PATH . "/managers/MessageManager.class.php");
require_once(CLASSES_PATH . "/managers/UserManager.class.php");


/**
 * @author Vahagn Kirakosyan
 */
class AdminSendMessageAction extends AbstractAction {

    public function service() {
    	list($userIds,$subject,$message) = $this->getValidatedRequestParams();
		
		$messageManager = MessageManager::getInstance($this->config, $this->args);
		$messageManager->addAdminMassMessage($userIds, $subject, $message);
		
		header('Content-Type: application/json');
		echo json_encode(array('status'=>'ok'));
    }

	private function getValidatedRequestParams(){
		if(isset($_REQUEST['send_to_everyone']) && $_REQUEST['send_to_everyone']==1){
			$userManager = UserManager::getInstance($this->config, $this->args);
			$users = $userManager->selectAll();
			$userIds = array();
			foreach ($users as $user) {
				$userIds[] = $user->getId();
			}
		}else if(isset($_REQUEST['recipents']) && is_array($_REQUEST['recipents']) && !empty($_REQUEST['recipents'])){
			$userIds = $_REQUEST['recipents'];
		}else{
			$this->showError('Please provide at least one recipent.');
		}
		
		if(isset($_REQUEST['subject']) && !empty($_REQUEST['subject'])){
			$subject = $_REQUEST['subject'];
		}else{
			$this->showError('Please provide a message subject.');
		}
		
		if(isset($_REQUEST['message']) && !empty($_REQUEST['message'])){
			$message = $_REQUEST['message'];
		}else{
			$this->showError('Please provide a text message.');
		}
		return array($userIds,$subject,$message);
	}
	
	private function showError($msg){
		header('Content-Type: application/json');
		echo json_encode(array('status'=>'err', 'msg'=>$msg));
		exit;
	}

    public function getRequestGroup() {
        return RequestGroups::$adminRequest;
    }

}

?>