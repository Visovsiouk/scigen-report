<?php
//require 'vendor/autoload.php';

//use Hashids\Hashids;

//class Hasher extends Hashids{
class Hasher {
	public function __construct($project = 'SciGen.Report', $padding = 7){
		//parent::__construct($project, $padding);

	}

	public function makeTag($uid, $rid){
		//return $this->encode($uid, $rid);
        return $uid . '-' . $rid;
	}

	public function breakTag($id){
		//return $this->decode($id);
        return $id;
	}
}
?>
