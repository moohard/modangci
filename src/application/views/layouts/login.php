<!DOCTYPE html>
<html lang="en">

<head>
	<base href="../../../" />
	<title>Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes</title>
	<meta charset="utf-8" />
	<meta name="description"
		content="The most advanced Tailwind CSS & Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords"
		content="tailwind, tailwindcss, metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title"
		content="Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Metronic by Keenthemes" />
	<link rel="canonical" href="http://preview.keenthemes.comauthentication/layouts/corporate/sign-in.html" />
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/media/logos/favicon.ico" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/pages/login/login-main.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<script>
		if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>
</head>

<body id="kt_body">
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
	<!-- From Uiverse.io by chase2k25 -->
	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
				<div class="d-flex flex-center flex-column flex-lg-row-fluid">
					<div class="w-lg-400px p-10 card-form-login" id="not_filter">
						<form class="form w-100" novalidate="novalidate" id="kt_form_validation"
							data-kt-redirect-url="/home" action="<?= base_url() . 'otentifikasi' ?>">
							<div class="text-center mb-11">
								<h1 class="text-gray-900 fw-bolder mb-3">Sign In</h1>
								<div class="text-gray-500 fw-semibold fs-6"><?= $_SERVER['SERVER_NAME']; ?></div>
							</div>
							<div class="fv-row mb-8">
								<div class="form-floating">
									<input type="text" placeholder="Masukkan Username" name="username"
										autocomplete="off" class="form-control bg-transparent input_validated" />
									<label for="username">Username</label>
								</div>
							</div>
							<div class="fv-row mb-4">
								<div class="form-floating">
									<input type="password" placeholder="Masukkan Password" name="password"
										autocomplete="off" class="form-control bg-transparent input_validated" />
									<label for="password">Password</label>
								</div>
							</div>
							<div class="d-grid mb-10">
								<button type="submit" id="kt_btn_submit" class="btn btn-primary">
									<span class="indicator-label">Sign In</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script>
		var hostUrl = "<?= base_url(); ?>assets/";
	</script>
	<script src="<?= base_url(); ?>assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?= base_url(); ?>assets/js/scripts.bundle.js"></script>
	<script src="<?= base_url(); ?>assets/js/pages/custom/pages/form-submit-general.js"></script>
</body>

</html>