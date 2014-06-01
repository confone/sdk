<?php
class Confone_Security_Rule_Token extends Confone_Security_Token {

	private $errDescription = null;

	public function generateToken($tokenName) {
		$body = array();
		$body['groupname'] = $this->groupName;
		$body['subject'] = $tokenName;

		$response = Utility::doCurl(Confone::getSecurityUri().'/rule/token', 'POST', null, $body);

		$success = ($response['status']=='success');

		if ($success) {
			$token = $response['token'];
		} else {
			error_log(json_encode($response));
			$this->errDescription = $response['description'];
			$token = null;
		}

		return $token;
	}

	public function getErrorDescription() {
		return $this->errDescription;
	}
}
?>