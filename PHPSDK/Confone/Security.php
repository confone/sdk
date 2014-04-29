<?php
class Confone_Security extends Confone_Service {

	private $group = null;
	private $ruleSet = array();
	private $failures = array();

	public function __construct($group) {
		$this->group = $group;
	}

	public function addRule($ruleName, $ruleSubject) {
		$this->ruleSet[$ruleName] = $ruleSubject;
	}

	public function scan() {
		$response = $this->execute('/enforce/'.$this->group, 'POST', $this->ruleSet);

		$success = ($response['status']!='failed');

		if (!$success) {
			$this->failures = $response['rules'];
		}

		return $success;
	}

	public function getFailedRules() {
		return $this->failures;
	}

	protected function getBaseUri() {
		return Confone::getSecurityUri();
	}
}
?>