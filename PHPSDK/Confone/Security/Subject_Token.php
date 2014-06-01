<?php
class Confone_Security_Subject_Token extends Confone_Security_Subject {

	public function setToken($token) {
		$this->setSubject($token);
	}

	public function getToken() {
		return $this->getSubject();
	}

	public function getJsonSubject() {
		return $this->subjectArray['subject'];
	}
}
?>