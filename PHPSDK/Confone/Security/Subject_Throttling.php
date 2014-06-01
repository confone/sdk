<?php
class Confone_Security_Subject_Throttling extends Confone_Security_Subject {

	public function getJsonSubject() {
		return $this->subjectArray['subject'];
	}
}
?>