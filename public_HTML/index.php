<?php 
	include($_SERVER["DOCUMENT_ROOT"] . 'Tam-An-Food-Store-Manager/'. 'config.php');
	require_once(FUNCTION_PATH. "general_function.php");
	//first when going to home page
	//we check if user is login or not. if not go to login page
	// if a login of user has sucess or the user is not log out in the previous time
	// get the User Info to GLOBal variable
	if (isset($_SESSION['is_login'])){
		$USER_NAME = $_SESSION['username'];
		$ID = $_SESSION['user_id'];
	}
	else {
		redirect_to(CONFIG_PATH('public_HTML')."login/");
	}
?>

<!doctype html>
<html>

<?php require_once(VIEW_PATH . "head.php");?>
<body style = "background-color : #C6E2FF;">
		
		
		<div class="no-print"> 
				<?php require_once(VIEW_PATH."header.php");?>

				<div class="col-md-6">
					<div class="inner-content">
						<select id="task1" tabindex="-1" class="form-control " onchange="switch_task(1)">
							<option value="receipt">In hóa đơn</option>
							<option value="alter-product">Chỉnh sửa sản phẩm</option>
							<option value="2">Quản lý nhập</option>
							<option value="3">Quản lý dư</option>
						</select>	

						<div id="load1">IF YOU SEE THIS THEN SWITCH TASK FUNCTION IS NOT WORKING</div>		
					</div>
				</div>

				<div class="col-md-6">
					<div class="inner-content">
						<select id="task2" tabindex="-1" class="form-control" onchange="switch_task(2)">
							<option value="receipt">In hóa đơn</option>
							<option value="alter-product">Chỉnh sửa sản phẩm</option>
							<option value="2">Quản lý nhập</option>
							<option value="3">Quản lý dư</option>
						</select>
						<div id="load2">THIS FUNCTION HAS NOT BEEN IMPLEMENTED</div>	
					</div>
				</div>
			
		</div>
		<!-- Only the latest submit print is accepted  -->
		<div id="print_here" class="print-blocks">IF YOU SEE THIS THEN PRINT FUNCTION IS NOT WORKING</div>
		
		<!-- make a toast here -->
		<div class="no-print" id="toast" style="display:none">Toast event</div>
	</body>

</html>