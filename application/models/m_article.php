<?php
/**
 * City Branding Banyumas V.1.0
 *
 * @author		Raka Aditya <raka@gedrix.com>
 * @copyright	Copyright (c) 2014 Gedrix Creative (gedrix.com)
 * @link		http://gedrix.com
 * @version		1.0.0
 *
 * Model ini digunakan untuk tabel artikel
 */

class m_article extends CI_Model {
	function __construct()
	{
		parent::__construct();
        $this->nowDate    = date('d/m/Y H:i');
	}
	
	function getArticleByKanalId($idkanal,$limit)
    {
        $this->db->select('*');
        $this->db->from('artikel');
		$this->db->join('kanal','kanal.idkanal = artikel.kanal_id','left');
		$this->db->where('artikel.tahan','0');
		$this->db->where('artikel.kanal_id',$idkanal);
		$this->db->where('artikel.publish_status','1');
        $this->db->where('artikel.fg_active','1');
        $this->db->order_by("artikel.publish_date", "desc"); 
        $query  = $this->db->get('',$limit,'0');
        return $query;
    }
	
	function getArticleAllByKanalId($idkanal,$limit,$offset)
    {
        $this->db->select('*');
        $this->db->from('artikel');
		$this->db->join('kanal','kanal.idkanal = artikel.kanal_id','left');
		$this->db->where('artikel.kanal_id',$idkanal);
		$this->db->where('artikel.publish_status','1');
        $this->db->where('artikel.fg_active','1');
        $this->db->order_by("artikel.publish_date", "desc"); 
        $query  = $this->db->get('',$limit,$offset);
        return $query;
    }
	
	function getArticleById($idartikel)
	{
		$this->db->select('*');
        $this->db->from('artikel');
		$this->db->join('kanal','kanal.idkanal = artikel.kanal_id','left');
		$this->db->join('kategori','kategori.idkategori = artikel.kategori_id','left');
		$this->db->where('artikel.idartikel',$idartikel);
		$this->db->where('artikel.publish_status','1');
        $this->db->where('artikel.fg_active','1');
        $query  = $this->db->get('');
        return $query->row();
	}
	
	
	function getDate($date)
	{
		$date		= date_create($date);
		$tanggal	= date_format($date,'d/m/Y H:i');
		return $tanggal;
	}
	
	function getDateWithDay($date)
	{
		$namaHari		= array(
									'Monday'	=> 'Senin',
									'Tuesday'	=> 'Selasa',
									'Wednesday'	=> 'Rabu',
									'Thursday'	=> 'Kamis',
									'Friday'	=> 'Jumat',
									'Saturday'	=> 'Sabtu',
									'Sunday'	=> 'Minggu',
								);
		$date		= date_create($date);
		$hari		= date_format($date,'l');
		$hari		= $namaHari[$hari];
		$tanggal	= date_format($date,'d/m/Y H:i');
		$result		= $hari.', '.$tanggal;
		return $result;
	}
	
	function updateArticle($idartikel,$arrData)
	{
		$this->db->where('idartikel', $idartikel);
		$this->db->update('artikel', $arrData); 
	}
}