<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyClass {

	public function reverse_tanggal($tgl)
	{
		$data = explode('-', $tgl);
		return $data[2].'-'.$data[1].'-'.$data[0];
	}
}
