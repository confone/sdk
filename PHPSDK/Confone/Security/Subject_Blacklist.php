<?php
class Confone_Security_Subject_Blacklist extends Confone_Security_Subject {

	public function getJsonSubject() {
		return $this->subjectArray['subject'];
	}
}
?>