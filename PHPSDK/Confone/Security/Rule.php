<?php
abstract class Confone_Security_Token {

	protected $groupName = null;

	public function __construct($groupName) {
		$this->groupName = $groupName;
	}

	public function getGroupName() {
		return $this->groupName;
	}
}
?>