<?php
include 'admin-head.php'
?>
<!-- Start: dash users list -->
<div class = "container-fluid" style = "direction: rtl;text-align: right;">
	<div role = "dialog" tabindex = "-1" class = "modal fade" id = "edite-user-modal">
		<div class = "modal-dialog" role = "document">
			<div class = "modal-content">
				<header class = "edite-user-modal-header"><i class = "fas fa-user-edit order-last me-auto" onclick></i>
					<h4 class = "modal-title">کاربر : </h4>
					<h4 class = "modal-title">فرهادفرخ سرشت </h4>
				</header>
				<div class = "modal-body">
					<div class = "row mb-3">
						<div class = "col">
							<div class = "card shadow mb-3">
								<div class = "card-header py-3">
									<p class = "text-primary m-0 fw-bold">اطلاعات کاربری</p>
								</div>
								<div class = "card-body">
									<form>
										<div class = "row d-flex d-sm-flex align-items-end">
											<div class = "col">
												<div class = "mb-3">
													<label class = "form-label"><strong>شماره همراه</strong><br/></label><input type = "text" class = "form-control" id = "phonenum" name = "phonenum"/>
												</div>
											</div>
											<div class = "col">
												<div class = "mb-3">
													<label class = "form-label"><strong>پست الکترونیکی </strong><br/></label><input type = "email" class = "form-control" id = "email" name = "email"/>
												</div>
											</div>
											<div class = "col">
												<div class = "mb-3">
													<label class = "form-label"><strong>رمز عبور</strong><br/></label><input type = "password" class = "form-control" id = "password" name = "password"/>
												</div>
											</div>
										</div>
										<div class = "row">
											<div class = "col">
												<div class = "mb-3">
													<label class = "form-label"><strong>نام</strong></label><input type = "text" class = "form-control" id = "first_name"/>
												</div>
											</div>
											<div class = "col">
												<div class = "mb-3">
													<label class = "form-label"><strong>نام خانوادگی</strong></label><input type = "text" class = "form-control" id = "last_name"/>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class = "shadow card">
								<a class = "btn btn-link text-center card-header fw-bold" data-bs-toggle = "collapse" aria-expanded = "true" aria-controls = "collapse-4" href = "#collapse-4" role = "button">اطلاعات آدرس</a>
								<div class = "collapse show" id = "collapse-4">
									<div class = "card-body">
										<form>
											<div class = "mb-3"><label class = "form-label"><strong> آدرس </strong><br/></label><input type = "text" class = "form-control" id = "address-1"/>
											</div>
											<div class = "row">
												<div class = "col">
													<div class = "mb-3">
														<label class = "form-label"><strong>استان</strong></label><input type = "text" class = "form-control" id = "province" name = "province"/>
													</div>
												</div>
												<div class = "col">
													<div class = "mb-3"><label class = "form-label"><strong>شهر</strong></label><input type = "text" class = "form-control" id = "city" name = "city"/>
													</div>
												</div>
											</div>
											<div class = "row">
												<div class = "col-2">
													<div class = "mb-3">
														<label class = "form-label"><strong>پلاک</strong></label><input type = "text" class = "form-control" id = "plack" name = "plack"/>
													</div>
												</div>
												<div class = "col-2">
													<div class = "mb-3">
														<label class = "form-label"><strong>واحد</strong></label><input type = "text" class = "form-control" id = "vahed" name = "vahed"/>
													</div>
												</div>
												<div class = "col">
													<div class = "mb-3">
														<label class = "form-label"><strong>کد پستی</strong></label><input type = "text" class = "form-control bignumstyle" id = "codposti" name = "codposti"/>
													</div>
												</div>
											</div>
											<div class = "row">
												<div class = "col">
													<div class = "mb-3">
														<label class = "form-label"><strong>کد ملی</strong></label><input type = "text" class = "form-control" id = "codmli" name = "codmli"/>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class = "modal-footer">
					<button class = "btn btn-light" type = "button" data-bs-dismiss = "modal" onclick = "closemodal()">انصراف</button>
					<button class = "btn btn-primary" id = "edite-user-save" type = "button">ذخیره</button>
				</div>
			</div>
		</div>
	</div>
	<div class = "d-sm-flex justify-content-between align-items-center mb-4" style = "margin-top: 20px;">
		<a class = "btn btn-primary btn-sm d-none d-sm-inline-block" role = "button" href = "#"><i class = "fas fa-download fa-sm text-white-50"></i> دریافت گزارش </a>
	</div>
	<div class = "row">
		<div class = "col">
			<div class = "card shadow">
				<div class = "card-header py-3">
					<p class = "text-primary m-0 fw-bold">کاربران</p>
				</div>
				<div class = "card-body">
					<div class = "row">
						<div class = "col-md-6 text-nowrap">
							<div id = "dataTable_length" class = "dataTables_length" aria-controls = "dataTable">
								<label class = "form-label">نمایش
									<select onclick="userlist()" name="limit" id="limit" class = "d-inline-block form-select form-select-sm">
										<option value = "10">10</option>
										<option value = "25">25</option>
										<option value = "50">50</option>
										<option value = "100">100</option>
									</select> </label></div>
						</div>

						<div class = "col-md-6">
							<div class = "text-md-end dataTables_filter" id = "dataTable_filter">
								<label class = "form-label"><input id="search-user-list" name="search-user-list" type = "text" class = "form-control form-control-sm" aria-controls = "dataTable" placeholder = "جست و جو  در شماره همراه "/></label>
							</div>
						</div>
					</div>
					<div class = "table-responsive" style = "text-align: center;border-radius: 10px;">
						<table class = "table table-striped">
							<thead>
							<tr>
								<th>#</th>
								<th>نام و نام خانوادگی</th>
								<th>نام کاربری</th>
								<th><strong>شماره تماس</strong><br/></th>
								<th>کد ملی</th>
								<th>رمز عبور</th>
								<th>حذف/تغییر</th>
							</tr>
							</thead>
							<tbody id="user_list">
							<tr>
								<td>1</td>
								<td>فرهاد فرخ سرشت</td>
								<td>Cell 2</td>
								<td>Cell 2</td>
								<td>11</td>
								<td>11</td>
								<td>
									<div class = "d-flex flex-row justify-content-evenly">
										<i class = "fas fa-user-times" style = "/*margin-left: 10px;*/color: #ef394e;" onclick = "alert()"></i><i class = "fas fa-user-edit" id = "edite-user" style = "color: var(--bs-primary);" onclick = "editeuser()"></i>
									</div>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
					<div class = "row">
						<div class = "col d-flex flex-row justify-content-around ad_pl_page_nex_bu">
							<input type="hidden" value="1" name="pagenum" id="pagenum">
							<div onclick="Nxpage()" class = "border rounded d-flex align-items-center"><i class = "fas fa-angle-double-right"></i><small>صفحه بعد</small></div>
							<div onclick="Pepage()" class = "border rounded d-flex align-items-center"><small>صفحه قبل</small><i class = "fas fa-angle-double-left"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- End: dash users list -->
<?php
include 'admin-footer.php'
?>
<script>
    function editeuser(uid) {
        var element = document.getElementById("edite-user-modal");
        element.classList.add("show");
        $.ajax({
            url: "admin-app.php",
            method: "POST",
            cache: false,
            data: {editeuser:uid},
            success: function (data) {
                userlist()
            }
        })
    }

    function deluser(uid) {
        if (confirm("کاربر حذف شود ؟")) {
            $.ajax({
                url: "admin-app.php",
                method: "POST",
                cache: false,
                data: {deluser:uid},
                success: function (data) {
                    userlist()
                }
            })
        }
    }
    function closemodal() {
        var element = document.getElementById("edite-user-modal");
        element.classList.remove("show");
    }
</script>