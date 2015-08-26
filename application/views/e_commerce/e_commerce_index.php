<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>E Commerce</title>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../../assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
    	<div class="container">
        <h2>Products</h2>
<?php 
        $total_items_in_cart = 0;
        foreach($products as $info)
        {
            $total_items_in_cart += $this->session->userdata($info['id']);
        }
 ?>
        <div style="float:right"><a href="/products/products/view_cart">Your Cart(<?= $total_items_in_cart ?>)</a></div>
        	<table>
        		<thead>
        			<tr>
        				<th>Description</th>
        				<th>Price</th>
        				<th>Qty</th>
        				<th></th>
        			</tr>
        		</thead>
        		<tbody>
<?php
                foreach($products as $info)
                { 
?>
			        <form action="/products/products/add_to_cart/<?= $info['id'] ?>" method="post">
        			<tr>
        				<td><?= $info['name']; ?></td>
        				<td>$<?= $info['price'] ?></td>
        				<td>
    				    	<select name='qty'>
						    <option>1</option>
						    <option>2</option>
						    <option>3</option>
						  </select>
        				</td>
	    				<td><input type="submit" class="btn btn-success btn-xs" value="Buy"></td>
	    			</tr>
			        </form>
<?php 
                }
?>
        		</tbody>	
        	</table>
    	</div>
    </body>
</html>