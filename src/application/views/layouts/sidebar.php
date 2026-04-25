<div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
	data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
	data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
		<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
			<a href="<?= base_url(); ?>">
				<div style="font-size:18px;font-weight:bold;color:black" id="kt-aside__brand-name"
					class="kt-hidden-mobile">
					<?= $_SERVER['SERVER_NAME']; ?>
				</div>
			</a>
		</div>
		<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
			<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
				data-kt-scroll-activate="true" data-kt-scroll-height="auto"
				data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
				data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
				data-kt-scroll-save-state="true">
				<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu"
					data-kt-menu="true" data-kt-menu-expand="false">
					<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
						<a class="menu-link" href="/">
							<span class="menu-icon">
								<i class="ki-duotone ki-category fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</span>
							<span class="menu-title">Dashboards</span>
						</a>
					</div>
					<!-- start -->
					<?php

					$cRow                 = 0;
					$curMenu              = '';
					$susrmdgroupDisplay   = '';
					$susrmodulNamaDisplay = '';
					if (isset($breadcrumb)) :
						$susrmdgroupDisplay   = $breadcrumb->susrmdgroupDisplay;
						$susrmodulNamaDisplay = $breadcrumb->susrmodulNamaDisplay;
					endif;
					if ($menus !== FALSE) :
						foreach ($menus as $row) :
							if ($curMenu != $row->susrmdgroupDisplay) :
								$statusCurMenu = FALSE;
								$curMenu       = $row->susrmdgroupDisplay;
							else :
								$statusCurMenu = TRUE;
							endif;
							if ($statusCurMenu == FALSE) :
								if ($cRow != 0) :
									echo "</div>";
									echo "</div>";
								endif;
								?>
								<div data-kt-menu-trigger="click"
									class="menu-item <?= $row->susrmdgroupDisplay == $susrmdgroupDisplay ? 'show' : '' ?> menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<?= $row->susrmdgroupIcon ?>
										</span>
										<span class="menu-title"><?= $row->susrmdgroupDisplay ?></span><span
											class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion">
										<?php

							endif;
							?>
									<div class="menu-item">
										<a class="menu-link <?= $row->susrmodulNamaDisplay == $susrmodulNamaDisplay ? 'active' : '' ?>"
											href="/<?= $row->susrmodulNama ?>">
											<span class="menu-bullet">
												<span class="bullet bullet-dot bg-success"></span>
											</span><span class="menu-title"><?= $row->susrmodulNamaDisplay ?></span>
										</a>
									</div>
									<?php

									$cRow++;
									if ($cRow == count($menus)) :
										echo "</div>";
										echo "</div>";
									endif;
						endforeach;
					endif;
					?>
						</div>
					</div>
				</div>
			</div>
			<!-- finish -->

		</div>