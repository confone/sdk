<?php
class Confone_Content extends Confone_Service {

	private $group = null;
	private $error = null;

	public function __construct($group) {
		$this->group = $group;
	}

	public function getGroupImages($start, $size) {
		$response = $this->execute('/image/group/'.$this->group.'/images?start='.$start.'&size='.$size, 'GET');

		$rv = null;
		if ($response['status']=='success') {
			$rv = $response['images'];
		} else {
			$this->error = $response['description'];
		}

		return $rv;
	}

	public function getGroupPreviewImages($start, $size) {
		$response = $this->execute('/image/group/'.$this->group.'/images?preview=true&start='.$start.'&size='.$size, 'GET');

		$rv = null;
		if ($response['status']=='success') {
			$rv = $response['images'];
		} else {
			$this->error = $response['description'];
		}

		return $rv;
	}

	public function getGroupTexts($language, $start='', $size='') {
		$this->addHeader('language', $language);
		$response = $this->execute('/text/group/'.$this->group.'/texts?start='.$start.'&size='.$size, 'GET');

		$rv = null;
		if ($response['status']=='success') {
			$rv = $response['texts'];
		} else {
			$this->error = $response['description'];
		}

		return $rv;
	}

	public function getGroupPreviewTexts($language, $start='', $size='') {
		$this->addHeader('language', $language);
		$response = $this->execute('/text/group/'.$this->group.'/texts?preview=true&start='.$start.'&size='.$size, 'GET');

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