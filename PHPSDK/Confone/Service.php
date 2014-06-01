<?php
abstract class Confone_Service {

	private $header = array();

	protected function addHeader($field, $value) {
		array_push($this->header, $field.': '.$value);
	}

    protected function execute($path, $method, $body=NULL) {
    	return Utility::doCurl($this->getBaseUri().$path, $method, $this->header, $body);
    }

	abstract protected function getBaseUri();
}
?>