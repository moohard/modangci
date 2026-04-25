<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>
		<?= base_url(); ?>
	</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
		if (window.top != window.self) {
			window.top.location.replace(window.self.location.href);
		}
	</script>
</head>

<body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-header-fixed="true"
	data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
	data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
	data-kt-app-sidebar-push-footer="true" class="app-default">
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if (localStorage.getItem("data-bs-theme") !== null) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
			<?php $this->load->view('layouts/header'); ?>
			<div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
				<?php $this->load->view('layouts/sidebar'); ?>
				<div class="app-main flex-column flex-row-fluid " id="kt_app_main">
					<div class="d-flex flex-column flex-column-fluid">
						<div id="kt_app_content" class="app-content  flex-column-fluid ">
							<div id="kt_app_content_container" class="app-container  container-fluid ">
								<?php

								if (!empty($page))
									$this->load->view($page);
								else
									$this->load->view('layouts/error_page');
								?>
							</div>
						</div>
					</div>
					<?php $this->load->view('layouts/footer'); ?>
				</div>
			</div>
		</div>
	</div>
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<i class="ki-outline ki-arrow-up"></i>
	</div>
	<script>
		var hostUrl = "assets/";        </script>
	<script src="<?= base_url(); ?>assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?= base_url(); ?>assets/js/scripts.bundle.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<script src="<?= base_url(); ?>assets/js/pages/custom/pages/form-submit-general.js"></script>
	<?php if (isset($scripts)) : ?>
		<?php foreach ($scripts as $script) : ?>
			<script src="<?= base_url(); ?>assets/js/pages/custom/pages/<?= $script ?>.js"></script>
		<?php endforeach; ?>
	<?php endif; ?>
</body>

</html>