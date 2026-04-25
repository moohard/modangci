<?php

defined('BASEPATH') or exit('No direct script access allowed');

class otentifikasi extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('model_login', '', TRUE);
	}

	public function index()
	{

		$this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');

		if ($this->form_validation->run() == FALSE)
		{
			$result['status']   = 'error';
			$result['response'] = '	<div class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mb-10">
										<i class="ki-duotone ki-notification-bing fs-2hx text-danger me-4 mb-5 mb-sm-0"><span
												class="path1"></span><span class="path2"></span><span class="path3"></span></i>
										<div class="d-flex flex-column pe-0 pe-sm-10">
											<h4 class="fw-semibold">Login</h4>
											<span>Ooops!! Something Wrong!! Incorrect Username or Password. Please try again.</span>
										</div>
										<button type="button"
											class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
											data-bs-dismiss="alert">
											<i class="ki-duotone ki-cross fs-1 text-danger"><span class="path1"></span><span class="path2"></span></i>
										</button>
									</div>';
			$result['message']  = 'Ooops!! Something Wrong!! Incorrect Username or Password. Please try again.';
		} else
		{
			$result['status']       = 'success';
			$result['message']      = 'You have successfully logged in.';
			$result['redirect_url'] = base_url() . 'home';
		}

		$this->output->set_content_type('application/json');
		$this->output->set_output(json_encode($result));
		echo $this->output->get_output();
		exit();
	}

	function check_database($password)
	{

		$username = $this->input->post('username');
		$row      = $this->model_login->get_by_id('s_user', [ 'susrNama' => $username ]);

		if ($row)
		{
			if (password_verify($password, $row->susrPassword))
			{
				$sess_array = array(
					'susrNama'           => $row->susrNama,
					'susrSgroupNama'     => $row->susrSgroupNama,
					'susrSgroupNama_ori' => $row->susrSgroupNama,
					'susrProfil'         => $row->susrProfil,
				);
				$this->model_login->update('s_user', array( 'susrLastLogin' => date('Y-m-d H:i:s') ), array( 'susrNama' => $row->susrNama ));
				$this->session->set_userdata('logged_in', $sess_array);
				if (function_exists('debuglog'))
					debuglog('Otentifikasi: ' . date('Y-m-d H:i:s'), $sess_array);

				return TRUE;
			} else
				return FALSE;
		} else
		{
			return FALSE;
		}
	}

}
