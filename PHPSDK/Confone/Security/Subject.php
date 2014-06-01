<?php
abstract class Confone_Security_Subject {

	protected $subjectArray = null;

	public function __construct($subject) {
		$this->subjectArray = array();
		$this->subjectArray['subject'] = $subject; 
	}

	public function getSubject() {
		if (isset($this->subjectArray['subject'])) {
			return $this->subjectArray['subject'];
		} else {
			return null;
		}
	}

	abstract public function getJsonSubject();
}
?>