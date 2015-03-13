
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Banyumas City Branding V.1.0
 *
 * @author		Raka Aditya <raka@gedrix.com>
 * @copyright	Copyright (c) 2015 Gedrix Creative (gedrix.com)
 * @link		http://gedrix.com
 * @version		1.0.0
 */

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_article');
	}
	
	public function index()
	{
		//echo 'tes'; die;
		$data   = array(
						'menu'		=> 'home',
						'pageTitle'	=> 'City Branding Banyumas: Sayembara Cipta Logo dan Tagline Kabupaten Banyumas',
		);
		$this->load->view('layout_home',$data);
	}
}