<form action="<?= $save_url ?>" method="post" id="kt_form_change_password" data-kt-redirect-url="/">
	<div class="card card-bordered shadow-sm">
		<div class="card-header">
			<h3 class="card-title"><?= strtoupper($judul) ?></h3>
		</div>
		<div class="card-body">
			<div class="w-75 me-auto ms-auto">
				<div class="fv-row">
					<div class="form-floating">
						<input type="text" name="susrNama" class="form-control" id="floatingInputNama"
							placeholder="Masukkan Nama" value="<?= $susrNama != FALSE ? $susrNama : '' ?>" readonly />
						<label for="floatingInputNama">Username</label>
					</div>
				</div>
				<div class="fv-row">
					<div class="form-floating mt-7">
						<input type="text" name="susrProfil" class="form-control" id="floatingInputProfil"
							placeholder="Masukkan Nama" value="<?= $susrProfil != FALSE ? $susrProfil : '' ?>"
							readonly />
						<label for="floatingInputProfil">Nama Profil</label>
					</div>
				</div>
				<div class="fv-row">
					<div class="form-floating mt-7">
						<input type="text" class="form-control" id="floatingInputRole" name="susrSgroupNama"
							placeholder="Role" aria-describedby="Role"
							value="<?= $susrSgroupNama != FALSE ? $susrSgroupNama : '' ?>" readonly />
						<label for="floatingInputRole">Role</label>
					</div>
				</div>
				<div class="fv-row">
					<div class="form-floating mt-7">
						<input type="password" class="form-control input_validated" id="floatingInputOldPassword" name="susrPasswordOld"
							placeholder="Old Password" aria-describedby="OldPassword" />
						<label for="floatingInputOldPassword">Old Password</label>
					</div>
				</div>
				<div class="fv-row" data-kt-password-meter="true">
					<div class="form-floating mt-7 mb-3">
						<input type="password" class="form-control input_validated" name="susrPasswordNew" placeholder="New Password"
							aria-describedby="NewPassword" id="floatingInputPasswordNew" />
						<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
							data-kt-password-meter-control="visibility">
							<i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span
									class="path2"></span><span class="path3"></span><span class="path4"></span></i>
							<i class="ki-duotone ki-eye d-none fs-1"><span class="path1"></span><span
									class="path2"></span><span class="path3"></span></i>
						</span>
						<label for="floatingInputPasswordNew">New Password</label>
					</div>
					<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
						<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
						<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
						<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
						<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
					</div>
					<div class="text-muted">
						Use characters with a mix of letters, numbers & symbols.
					</div>
				</div>
				<div class="fv-row">
					<div class="form-floating mt-7">
						<input type="password" class="form-control input_validated" name="susrPasswordNewConfirm"
							placeholder="New Password Confirmation" aria-describedby="NewPasswordConfirmation" id="floatingInputPasswordNewConfirm"/>
						<label for="floatingInputPasswordNewConfirm">Confirm New Password</label>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="d-flex justify-content-end">
				<button id="kt_btn_submit_password" type="submit" class="btn btn-primary hover-elevate-down"
					data-redirecturl="/home">
					<i class="ki-duotone ki-save-2 fs-2">
						<span class="path1"></span>
						<span class="path2"></span>
					</i>
					<span class="indicator-label">
						Simpan
					</span>
					<span class="indicator-progress">
						Sedang menyimpan... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
					</span>
				</button>
				<a href="/home" class="btn btn-secondary hover-elevate-down ms-2">
					<i class="ki-duotone ki-arrow-left fs-2">
						<span class="path1"></span>
						<span class="path2"></span>
					</i> Kembali
				</a>
			</div>
		</div>
	</div>
</form>