<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
  	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-datepicker3.min.css" />
  	<script src="../bootstrap/js/jquery.min.js"></script>
  	<script src="../bootstrap/js/bootstrap.min.js"></script>
  	<script src="../bootstrap/js/bootstrap-datepicker.min.js"></script>

</head>
<body>
	<section class="pinpointform">

		<div class="container">
			<form method="post" action="../controller/information.php">
			<div class="row">
				<div class="headcover">
					<div class="col-sm-4 col-xs-12">
						<img src="../bootstrap/img/logo.png" class="imglogo img-responsive" />
					</div>
					<div class="col-sm-8 col-xs-12">
						<div class="cusinfo text-center">
							<h4> DEALER REPORT</h4>
						</div>
					</div>
				</div>
			</div><br><br><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<td>
									<span class="text-title"><strong>Agent Name:</strong></span>
									<div class="text-input">
										<input type="text" name="agentname" class="" placeholder="..........................................................................................." />
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<td>
									<span class="text-title"><strong>Recieved Date:</strong></span>
									<div class="text-input date">
										<div class="input-group input-append date" id="datepicker">
					                        <input type="text" class="form-control" name="date" />
					                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
					                    </div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<td>
									<span class="text-title"><strong>Case Title:</strong></span>
									<div class="text-input">
										<input type="text" name="casetitle" class="" placeholder="..........................................................................................." />
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<span class="text-title service"><strong>Service:</strong></span>
					<div class="">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td>
											<label>
											    <input type="checkbox" name="service[]" id="blankCheckbox" value="buy" aria-label="...">
											    <div class="text-title"><strong>Buy</strong></div>
											</label>
										</td>
										<td>
											<label>
											    <input type="checkbox" name="service[]" id="blankCheckbox" value="sale" aria-label="...">
											    <div class="text-title"><strong>Sale</strong></div>
											</label>
										</td>
										<td>
											<label>
											    <input type="checkbox" name="service[]" id="blankCheckbox" value="rent" aria-label="...">
											    <div class="text-title"><strong>Rent</strong></div>
											</label>
										</td>
										<td>
											<span class="text-title"><strong>Budget </strong></span>
											<div class="">
												<input type="text" name="budget" class="budget" placeholder="" />
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<h4 class="titletext">Customer Information</h4>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<span class="text-title"><strong>First Name:</strong></span>
										<div class="text-input">
											<input type="text" name="firstname" class="" placeholder="..........................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>last Name:</strong></span>
										<div class="text-input">
											<input type="text" name="lastname" class="" placeholder="..........................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>Sex:</strong></span>
										<div class="text-input">
											<input type="text" name="sex" class="" placeholder="..........................................................................................." />
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<span class="text-title"><strong>Nationality:</strong></span>
										<div class="text-input">
											<input type="text" name="   nationality" class="" placeholder="..........................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>Position:</strong></span>
										<div class="text-input">
											<input type="text" name="position" class="" placeholder="..........................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>E-mail:</strong></span>
										<div class="text-input">
											<input type="text" name="email" class="" placeholder="..........................................................................................." />
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<table class="table">
							<tbody>
								<tr>
									<td>
										<span class="text-title"><strong>Phone:</strong></span>
										<div class="text-input">
											<input type="text" name="phone" class="" placeholder=".............................................................................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>Address:</strong></span>
										<div class="text-input">
											<input type="text" name="address" class="" placeholder="......................................................................................................................................................................................" />
										</div>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="col-md-12 text-right">
							<input type="reset" name="submit" value="Cancel" class="btn btn-sm btn-danger">
							<input type="submit" name="submit" value="Add" class="btn btn-sm btn-success">
							<br><br>
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
	</section>
</body>

<script>

        $(document).ready(function () {
          $('#datepicker').datepicker({
          format: "dd-mm-yyyy"
          });
        });

</script>

</html>
