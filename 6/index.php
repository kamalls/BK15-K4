<?php
// $conn = mysqli_connect("localhost","root","","arkademy");
// $query = mysqli_query($conn, "SELECT * FROM product INNER JOIN category ON category.id=product.id_category INNER JOIN cashier ON cashier.id=product.id_cashier");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tabel Database</title>
		<link rel="stylesheet" href="/css/bootstrap.css">
		<link rel="stylesheet" href="/fontawesome/css/all.css">
	</head>
	<body>
			<nav class="navbar navbar-expand-lg navbar-light bg-dark">
				<div class="container">
			  	<h2 class="text-light">Arkademy Coffee Shop</h2>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalADD">
					  ADD Data
					</button>
					  <!-- Modal -->
					  <div class="modal fade" id="modalADD" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
					    <div class="modal-dialog" role="document">
					      <div class="modal-content">
					        <div class="modal-header">
					          <h5 class="modal-title" id="ModalCenterTitle">Tambah Data</h5>
					          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					           <span aria-hidden="true">&times;</span>
					          </button>
					        </div>
					        <div class="modal-body">
					         	<form class="" action="" method="post">
						         		<div class="form-group">
						         			<label for="kasir">Cashier</label>
													<select class="form-control" name="kasir" id="kasir">
														<option value="Mustofa Kamal">Mustofa Kamal</option>
														<option value="Pevita Pierce">Pevita Pierce</option>
														<option value="Raisa Adriana">Raisa Adriana</option>
													</select>
						         		</div>
												<div class="form-group">
						         			<label for="produk">Product</label>
													<input class="form-control" type="text" name="produk" id="produk" required>
						         		</div>
												<div class="form-group">
						         			<label for="kategori">Category</label>
													<select class="form-control" name="kategori" id="kategori">
														<option value="Drink">Drink</option>
														<option value="Food">Food</option>
													</select>
						         		</div>
												<div class="form-group">
													<label for="harga">Price</label>
													<input class="form-control" type="number" name="harga" id="harga" required>
						         		</div>
						        </div>
						        <div class="modal-footer">
												<button type="reset" class="btn btn-secondary">Reset</button>
											 	<button type="submit" class="btn btn-primary">ADD</button>
						        </div>
									</form>
					      </div>
					    </div>
						</div>
				</div>
			</nav>
			<hr>
			<div class="container mt-5">
				<table class="table table-bordered table-hover table-info" border="1">
					<thead>
						<tr class="text-center">
							<th>No</th>
							<th>Chasier</th>
							<th>Product</th>
							<th>Category</th>
							<th>Price</th>
							<th>Action</th>
						</tr>
					</thead>
						<tr>
							<td>1</td>
							<td>Mustofa Kamal</td>
							<td>coffee</td>
							<td>Drink</td>
							<td>Rp 10000</td>
							<td class="text-center">
								<i class="fas fa-edit mr-1" style="color: green;" title="Edit"></i>
								<i class="fas fa-trash ml-1" style="color: red;" title="Hapus"></i>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Pevita Pierce</td>
							<td>Spagetti</td>
							<td>Food</td>
							<td>Rp 20000</td>
							<td class="text-center">
								<i class="fas fa-edit mr-1" style="color: green;" title="Edit"></i>
								<i class="fas fa-trash ml-1" style="color: red;" title="Hapus"></i>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Raisa Adriana</td>
							<td>Lemon Juice</td>
							<td>Drink</td>
							<td>Rp 10000</td>
							<td class="text-center">
								<i class="fas fa-edit mr-1" style="color: green;" title="Edit"></i>
								<i class="fas fa-trash ml-1" style="color: red;" title="Hapus"></i>
							</td>
						</tr>
		    </table>
			</div>
<script src="/js/jQuery.js"></script>
<script src="/js/bootstrap.bundle.js"></script>
<script src="fontawesome/js/all.js"></script>
	</body>
</html>
