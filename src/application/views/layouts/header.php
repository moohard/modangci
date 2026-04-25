<div id="kt_app_header" class="app-header " data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}"
	data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}"
	data-kt-sticky-animation="false">
	<div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
		id="kt_app_header_container">
		<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
			<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
				<i class="ki-outline ki-abstract-14 fs-2 fs-md-1"></i>
			</div>
		</div>
		<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
			<a href="?page=index" class="d-lg-none">
				<img alt="Logo" src="/assets/media/logos/default-small.svg" class="h-30px" />
			</a>
		</div>
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
			<div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
				data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}"
				class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-5 mb-lg-0">
				<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
					<?= $breadcrumb->susrmdgroupDisplay ?>
				</h1>
				<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
					<li class="breadcrumb-item text-muted">
						<a href="?page=index" class="text-muted text-hover-primary">
							<?= $breadcrumb->susrmdgroupDisplay ?> </a>
					</li>
					<?php if ($breadcrumb->susrmdgroupDisplay != $breadcrumb->susrmodulNamaDisplay) : ?>
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-500 w-5px h-2px"></span>
						</li>
						<li class="breadcrumb-item text-muted"><?= $breadcrumb->susrmodulNamaDisplay ?> </li>
						<?php

					endif;
					if (isset($status_page)) : ?>
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-500 w-5px h-2px"></span>
						</li>
						<li class="breadcrumb-item text-muted"><?= $status_page ?> </li>
					<?php endif; ?>
				</ul>
			</div>
			<?php $this->load->view('layouts/navbar') ?>
		</div>
	</div>
</div>