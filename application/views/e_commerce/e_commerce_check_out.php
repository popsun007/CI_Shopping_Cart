<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Check Out</title>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../../assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <div class="container">
        	<h2>Check Out</h2>
        	<table>
        		<thead>
        			<tr>
        				<th>Qty</th>
        				<th>Description</th>
        				<th>Price</th>
        				<th></th>
        			</tr>
        		</thead>
        		<tbody>
<?php 
				$total = 0;
				foreach($infos as $info)
				{
					$quantity = $this->session->userdata($info['id']);
					$total += $quantity * $info['price'];
					if($quantity > 0)
					{
 ?>
        		<form action="/products/products/delete_item/<?= $info['id'] ?>" method="post">
        			<tr>
        				<td><?= $quantity ?></td>
        				<td><?= $info['name'] ?></td>
        				<td><?= $info['price'] ?></td>
        				<td><input type="submit" class="btn btn-danger btn-xs" value="Delete"></td>
        			</tr>
        		</form>
<?php 
					}
				}
?>
					<tr>
						<td colspan="4"><div class="break"></div></td>
					</tr>
        		</tbody>
        	</table>
        	<h4>Total  $<?= $total ?></h4>
        	<br>
        	<h3>Billing Info</h3>
        	<table>
        		<tr>
        			<td>Name:</td>
        			<td><input type="text" name="name"></td>
        		</tr>
        		<tr>
        			<td>Address:</td>
        			<td><input type="text" name="address"></td>
        		</tr>
        		<tr>
        			<td>Card #:</td>
        			<td><input type="text" name="card"></td>
        		</tr>
        		<tr>
        			<td><a href="/products/products"><button class="btn btn-default btn-sm">Go Back</button></a></td>
        			<td><input type="submit" value="Order"></td>
        		</tr>
        	</table>
        </div>
    </body>
</html>	