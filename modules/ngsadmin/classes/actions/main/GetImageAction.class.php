<?php

require_once(CLASSES_PATH . "/framework/AbstractAction.class.php");

/**
 * @author Vahagn Kirakosyan
 */
class GetImageAction extends AbstractAction {

    public function service() {
		if(isset($_REQUEST['type'])){
			if(in_array($_REQUEST['type'],array('user','pharmacy','challenge_answer','message')) && is_numeric($_REQUEST['id'])){
				$path = IMG_ROOT_DIR.'/'.$_REQUEST['type']."/".$_REQUEST['id'].'.jpg';
			}else if($_REQUEST['type']=='quiz_answer' && is_numeric($_REQUEST['question_id']) && is_numeric($_REQUEST['answer_id'])){
				$path = IMG_ROOT_DIR.'/'.$_REQUEST['type']."/".$_REQUEST['question_id']."/".$_REQUEST['answer_id'].'.jpg';
			}
			
			if(file_exists($path)){
				header('Content-type:image/jpeg');
				readfile($path);
				exit;
			}
		}
    }

    public function getRequestGroup() {
        return RequestGroups::$guestRequest;
    }

}

?>