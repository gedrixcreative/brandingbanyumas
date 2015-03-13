<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Banyumas City Branding V.1.0
 *
 * @author		Raka Aditya <raka@gedrix.com>
 * @copyright	Copyright (c) 2015 Gedrix Creative (gedrix.com)
 * @link		http://gedrix.com
 * @version		1.0.0
 */

class Usulan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_sayembara');
	}
	
	public function submit()
	{
		$uploaded	= '0';
		
		if(isset($_POST['submit'])) {
			$config = array(
               array(
                     'field'   => 'email', 
                     'label'   => 'Email', 
                     'rules'   => 'required|valid_email'
                  ),
               array(
                     'field'   => 'nama', 
                     'label'   => 'Nama Lengkap', 
                     'rules'   => 'required|max_length[100]'
                  ),
               array(
                     'field'   => 'telepon', 
                     'label'   => 'No. Identitas', 
                     'rules'   => 'required|integermax_length[15]'
                  ),   
               array(
                     'field'   => 'identitas', 
                     'label'   => 'No. Identitas', 
                     'rules'   => 'required|numeric|max_length[50]'
                  ),
			   array(
                     'field'   => 'alamat', 
                     'label'   => 'alamat', 
                     'rules'   => 'required|max_length[255]'
                  ),
            );
			$this->form_validation->set_rules($config);
			if (empty($_FILES['berkas']['name']))
			{
				 $this->form_validation->set_rules('berkas', 'Berkas', 'required');
			}
			if ($this->form_validation->run() == TRUE)
			{
				$uploadPath						= '/data/documents/cbb';
				$uploadConfig['upload_path']	= $uploadPath;				
				$uploadConfig['allowed_types']	= 'zip|rar|gz';
				$this->load->library('upload', $uploadConfig);
				$uploadStatus 					= $this->upload->do_upload('berkas');
				if($uploadStatus) {
					$berkas		= $this->upload->data();
					$uploaded	= '2';
				} else {
					$uploaded = '1';
				}
				$dataUser 	= array(
					'kanal_id'		=> '6',
					'date'			=> date('c'),
					'ip_address'	=> $_SERVER['REMOTE_ADDR'],
					'email'			=> mysql_real_escape_string($this->input->post('email')),
					'nama'			=> mysql_real_escape_string($this->input->post('nama')),
					'telepon'		=> mysql_real_escape_string($this->input->post('telepon')),
					'identitas'		=> mysql_real_escape_string($this->input->post('identitas')),
					'alamat'		=> mysql_real_escape_string($this->input->post('alamat')),
					'berkas'		=> $berkas['file_name'],
				);
				//echo json_encode($dataUser); die;
				$this->m_sayembara->addUser($dataUser);
				// Send Email
				$this->load->library('email');
				$configEmail['protocol'] = "smtp";
				$configEmail['smtp_host'] = "ssl://smtp.gmail.com";
				$configEmail['smtp_port'] = "465";
				$configEmail['smtp_user'] = "info@gedrix.com";
				$configEmail['smtp_pass'] = "1";
				$this->email->initialize($configEmail);
				$this->email->set_mailtype('html');
				$body   = $this->load->view('email/barudaftar',$dataUser,TRUE);
				$this->email->set_newline("\r\n");
				$this->email->from("info@gedrix.com","City Branding Banyumas");
				$this->email->to('citybranding@banyumaskab.go.id');
				$this->email->subject('Pendaftar baru: '.$dataUser['nama']);
				$this->email->message($body);
				$this->email->attach($uploadPath.'/'.$dataUser['berkas']);
				$this->email->send();
			}
		}
		
		$data   = array(
						'menu'		=> 'usulan',
						'pageTitle'	=> 'City Branding Banyumas: Kirim Karya',
						'uploaded'	=> $uploaded,
		);
		$this->load->view('layout_submit_usulan',$data);
	}
}