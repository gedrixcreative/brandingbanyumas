<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Banyumas City Branding V.1.0
 *
 * @author		Raka Aditya <raka@gedrix.com>
 * @copyright	Copyright (c) 2015 Gedrix Creative (gedrix.com)
 * @link		http://gedrix.com
 * @version		1.0.0
 */

class Article extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('m_article');
	}
	
	public function index($page='0')
	{

		$idKanal					= '6';
		$dataArticle				= $this->m_article->getArticleAllByKanalId($idKanal,NULL,NULL);
		$dataPaging					= $this->m_article->getArticleAllByKanalId($idKanal,'20',$page);
		$config['base_url']			= base_url('article/index/');
		$config['total_rows']		= $dataArticle->num_rows;
		$config['per_page'] 		= '20';
		$config['uri_segment']		= 4;
		$config['full_tag_open']	= '<div class="pagings">';
		$config['full_tag_close']	= '</div>';
		$this->pagination->initialize($config);
		$data   = array(
				'menu'          => 'article',
				'dataArticle'   => $dataPaging,
				'pageTitle'	=> 'City Branding Banyumas: Artikel',
		);
		$this->load->view('layout_article',$data);
	}

	public function read()
	{
		$idArticle		= (int)$this->uri->segment('2');
		$dataArticle	= $this->m_article->getArticleById($idArticle);
		if(!isset($dataArticle->idartikel)) {
			redirect();
		}

		//echo json_encode($dataArticle); die;

		$data   = array(
				'menu'          => 'read',
				'dataArticle'   => $dataArticle,
				'pageTitle'	=> 'City Branding Banyumas: '.$dataArticle->judul,
		);
		$this->load->view('layout_detail',$data);
	}

	public function get()
	{
		$page 						= isset($_GET['page']) ? (int)$_GET['page'] : '1';
		$message					= 'Next Article';
		$limit						= '10';
		$offset						= ($page-1)*$limit;
		$idKanal					= '6';
		$imgUrl						= 'http://statics.gedrix.net/uploads/';
		$dataArticle				= $this->m_article->getArticleAllByKanalId($idKanal,NULL,NULL);
		$dataPaging					= $this->m_article->getArticleAllByKanalId($idKanal,$limit,$offset);

		if($dataPaging->num_rows() > 0) {
			foreach($dataPaging->result() as $row) {
				$data[]	= array(
					'id'		=> $row->idartikel,
					'judul'		=> $row->judul,
					'date'		=> $this->m_article->getDateWithDay($row->publish_date).' WIB',
					'resume'	=> strip_tags($row->resume),
					'url'		=> base_url('read/'.$row->idartikel.'/'.$row->link),
					'image'		=> $imgUrl.$row->cover_image,
				);
			}	
		} else {
			$data 		= null;
			$message 	= 'No More Article';
		}

		$result['success'] = TRUE;
		$result['message'] = $message;
		$result['data']	   = $data;
		
		$dataResult 		= json_encode($result);
		if(isset($_GET['callback'])) {
			 header('Content-Type: text/javascript; charset=utf8');
			header('Access-Control-Allow-Origin: *');
			header('Access-Control-Max-Age: 3628800');
			header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

		 $callback = $_GET['callback'];
			echo $callback.'('.$dataResult.');';
		} else {
			//header('Content-Type: application/json; charset=utf8');
			echo $dataResult;
		}
		
		
	}
}