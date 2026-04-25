<?php

defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('message'))
{

	function message($msg = "", $tipe = "")
	{

		$CI                 = get_instance();
		$color              = $tipe == "error" ? "danger" : "success";
		$result['status']   = $tipe;
		$result['message']  = $msg;
		$result['response'] = '	<div class="alert alert-dismissible bg-light-' . $color . ' d-flex flex-column flex-sm-row p-5 mb-10">
									<i class="ki-duotone ki-notification-bing fs-2hx text-' . $color . ' me-4 mb-5 mb-sm-0"><span
											class="path1"></span><span class="path2"></span><span class="path3"></span></i>
									<div class="d-flex flex-column pe-0 pe-sm-10">
									    <h4 class="fw-semibold">'.$tipe.'</h4>
										<span>' . $msg . '</span>
									</div>
									<button type="button"
										class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
										data-bs-dismiss="alert">
										<i class="ki-duotone ki-cross fs-1 text-' . $color . '"><span class="path1"></span><span class="path2"></span></i>
									</button>
								</div>';
		$CI->output->set_content_type('application/json');
		$CI->output->set_output(json_encode($result));
		echo $CI->output->get_output();
		exit();
	}

}

?>