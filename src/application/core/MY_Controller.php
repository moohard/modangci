<?php

class MY_Controller extends CI_Controller
{

	protected $_template        = 'layouts/template';

	protected $_path_page       = NULL;

	protected $_path_js         = NULL;

	protected $_judul           = NULL;

	protected $_controller_name = NULL;

	protected $_model_name      = NULL;

	protected $_page_index      = 'index';

	public function __construct()
	{

		parent::__construct();
		if ($this->session->userdata('logged_in') == FALSE) //cek user logged
			redirect('login', 'refresh');
	}

	protected function get_master($pages)
	{

		$session_data = $this->session->userdata('logged_in');
		$menu         = $this->{$this->_model_name}->get_menu_by_susrSgroupNama($session_data['susrSgroupNama']); //pengambilan menu dari database											
		if ($this->_controller_name == 'home')
			$data['breadcrumb'] = (object) array( 'susrmdgroupDisplay' => 'Dashboard', 'susrmodulNamaDisplay' => 'Dashboard' );
		else
		{
			$uriS              = $this->uri->segment_array();
			$data['uri']       = $uriS;
			$currMod           = $uriS[1];
			$otentifikasi_menu = $this->{$this->_model_name}->otentifikasi_menu_by_susrSgroupNama($session_data['susrSgroupNama'], $currMod); //cek otentifikasi hak akses user modul
			if (!$otentifikasi_menu)
				$pages = 'layouts/error_page'; //error 404
			else
			{
				$data['page']       = $pages;
				$data['breadcrumb'] = $otentifikasi_menu[0];
			}
		}
		$data['page']           = $pages;
		$data['susrNama']       = $session_data['susrNama'];
		$data['susrSgroupNama'] = $session_data['susrSgroupNama'];
		$data['susrProfil']     = $session_data['susrProfil'];
		$data['back_url']       = $this->uri->segment(1);
		$data['menus']          = $menu;
		$data['page_judul']     = $this->_judul;

		return $data;
	}

}
