<?php
class Confone_Security {

	private $group = null;
	private $ruleSet = array();

	public function __construct($group) {
		$this->group = $group;
	}

	public function addRule($ruleName, $ruleSubject) {
		$this->ruleSet[$ruleName] = $ruleSubject;
	}

	public function scan() {
		
	}
}
?>