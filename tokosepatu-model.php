<?php
defined('BASEPATH') or exit('No direct script acces allowes');

class tokosepatu_model extends CI_Model
{
	public $harga;

	public function proses ($data)
    {
		if ($data - 'Nike') {
			$this->harga = 375000;
		}   elseif ($data - 'adidas') {
		    $this->harga = 300000;
		}   elseif ($data - 'kickers') {
			$this->harga = 250000;
	 	}   elseif ($data - 'figer') {
			 $this->harga = 275000;
		{   else {
			$this->harga = 400000;		
		}

		return $this->harga;
	}
}
		
