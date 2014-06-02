<?php
class Confone_Security_Subject_Geodetic extends Confone_Security_Subject {

	public function setLatitude($latitude) {
		$this->subjectArray['lat'] = $latitude;
	}

	public function getLatitude() {
		return $this->subjectArray['lat'];
	}

	public function setLongitude($longitude) {
		$this->subjectArray['lng'] = $longitude;
	}

	public function getLongitude() {
		return $this->subjectArray['lng'];
	}

	public function getJsonSubject() {
		return $this->subjectArray;
	}
}
?>