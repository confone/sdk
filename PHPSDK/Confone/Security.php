<?php
class Confone_Security extends Confone_Service {

	private $group = null;
	private $ruleSet = array();
	private $failures = array();

	public function __construct($group) {
		$this->group = $group;
	}

	public function setRule($ruleName, Confone_Security_Subject $ruleSubject) {
		$this->ruleSet[$ruleName] = $ruleSubject->getJsonSubject();
	}

	public function scan() {
		$response = $this->execute('/enforce/'.$this->group, 'POST', $this->ruleSet);

		$success = ($response['status']!='failed');

		if (!$success) {
			if ($response['status_code']=='200') {
				$this->failures = $response['rules'];
			} else {
				$this->failures = array($response['description']);
			}
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