<?php
require_once (CLASSES_PATH . "/framework/AbstractAction.class.php");
require_once(CLASSES_PATH . "/managers/MessageManager.class.php");
require_once(CLASSES_PATH . "/managers/NotificationManager.class.php");

/**
 * @author Vahagn Kirakosyan
 */
class AdminReplyMessageAction extends AbstractAction {

    public function service() {
		if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])){
			$messageManager = MessageManager::getInstance($this->config, $this->args);
			$threadId = intval($_REQUEST['id']);
			$threadDto = $messageManager->getThreadById($threadId);
			if(!$threadDto){
				$this->showError('Thread does not exist.');
			}
			if(isset($_REQUEST['message_text']) && !empty($_REQUEST['message_text'])){
				$messageId = $messageManager->addAdminMessage($threadId, $_REQUEST['message_text']);
				if($messageId<0){
					$this->showError('System error.Please try again.');
				}
				$notificationManager = NotificationManager::getInstance($this->config, $this->args);
				$notificationManager->sendPushNotificationToUsers($threadDto->getUserId());
				
				header('Content-Type: application/json');
				echo json_encode(array('status'=>'ok','threadId'=>$threadId,'messageId'=>$messageId));
			}else{
				$this->showError('Please add message text.');
			}
		}else{
			$this->showError('Invalid params.');
		}
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