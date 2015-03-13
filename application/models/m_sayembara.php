<?php
/**
 * City Branding Banyumas V.1.0
 *
 * @author		Raka Aditya <raka@gedrix.com>
 * @copyright	Copyright (c) 2014 Gedrix Creative (gedrix.com)
 * @link		http://gedrix.com
 * @version		1.0.0
 *
 * Model ini digunakan untuk tabel sayembara
 */

class m_sayembara extends CI_Model {
	function __construct()
	{
		parent::__construct();
        $this->nowDate    = date('c');
	}
	
	function addUser($data)
	{
		$this->db->insert('sayembara', $data); 
	}
	
}