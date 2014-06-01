<?php
class Confone_Content extends Confone_Service {

	private $group = null;
	private $error = null;

	public function __construct(string $group) {
		$this->group = $group;
	}

	public function getGroupImages() {
		$response = $this->execute('/image/group/'.$this->group.'/images', 'GET');

		$rv = null;
		if ($response['status']=='success') {
			$rv = $response['images'];
		} else {
			$this->error = $response['description'];
		}

		return $rv;
	}

	public function getGroupPreviewImages() {
		$response = $this->execute('/image/group/'.$this->group.'/images?preview=true', 'GET');

		$rv = null;
		if ($response['status']=='success') {
			$rv = $response['images'];
		} else {
			$this->error = $response['description'];
		}

		return $rv;
	}

	public function getGroupTexts(string $language) {
		$this->addHeader('language', $language);
		$response = $this->execute('/text/group/'.$this->group.'/texts', 'GET');

		$rv = null;
		if ($response['status']=='success') {
			$rv = $response['texts'];
		} else {
			$this->error = $response['description'];
		}

		return $rv;
	}

	public function getGroupPreviewTexts(string $language) {
		$this->addHeader('language', $language);
		$response = $this->execute('/text/group/'.$this->group.'/texts?preview=true', 'GET');

		$rv = null;
		if ($response['status']=='success') {
			$rv = $response['texts'];
		} else {
			$this->error = $response['description'];
		}

		return $rv;
	}

	public function getError() {
		return $this->error;
	}

	protected function getBaseUri() {
		return Confone::getContentUri();
	}
}
?>