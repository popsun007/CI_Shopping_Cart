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
        		<form action="process.php" method="post">
        			<tr>
        				<td>1</td>
        				<td>Dojo Shrit</td>
        				<td>$19.99</td>
        				<td><input type="submit" class="btn btn-danger btn-xs" value="Delete"></td>
        			</tr>
        		</form>
        		<form action="process.php" method="post">
        			<tr>
        				<td>3</td>
        				<td>Dojo Cup</td>
        				<td>$39.99</td>
        				<td><input type="submit" class="btn btn-danger btn-xs" value="Delete"></td>
        			</tr>
        		</form>	
        		</tbody>
        	</table>
        	<div class="break"></div>
        	<h4>Total  $59.97</h4>
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
        	</table>
        	<input type="submit" value="Order">
        </div>
    </body>
</html>	