<?php

require_once (CLASSES_PATH . "/framework/AbstractAction.class.php");

/**
 * @author Vahagn Kirakosyan
 */
class UploadAction extends AbstractAction {
	
	public function service() {
		
		if (isset($_FILES) && is_array($_FILES) && !empty($_FILES)) {
			$filesKeys = array_keys($_FILES);
			$filesValues = array_values($_FILES);
			$fieldName = $filesKeys[0];
			$file = $filesValues[0];
		} else {
			$this->showError('No File Uploaded');
		}
		if ($file['error'] === UPLOAD_ERR_OK) {
			$extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
			if(!in_array($extension, $this->getAllowedExtensions())){
				$this->showError("Unsupported file extension.Please upload ".implode(',', $this->getAllowedExtensions()).' files', $fieldName);
			}
			$fileName = uniqid().'.'.$extension;
			$moved = move_uploaded_file($file['tmp_name'], UPLOAD_TEMP_DIR."/".$fileName);
			if (!$moved) {
				$this->showError("Can't upload the file", $fieldName);
			}
			echo json_encode(array('status'=>'ok', 'file_name'=>$fileName, 'field'=>$fieldName));
		} else {
			$this->showError('Upload error occured', $fieldName);
		}
	}
	
	public function showError($msg, $fieldName=''){
		echo json_encode(array('status'=>'err', 'msg'=>$msg, 'field'=>$fieldName));
		throw new Exception($msg);
	}
	
	private function getAllowedExtensions(){
		return array('jpg','jpeg','png');
	}

	public function getRequestGroup() {
		return RequestGroups::$adminRequest;
	}

}
?>