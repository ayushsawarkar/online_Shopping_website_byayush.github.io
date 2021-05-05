<!DOCTYPE html>
<html>
    <head>
		<style>
				* {
			margin: 0px;
			padding: 0px;
		  }
		  body {
			font-size: 120%;
			background-color: white;
			font-family: 'Courier New', Courier, monospace;
		   
		  }
		  form, .content {
			width: 22%;
			margin: 12px auto;
			padding: 20px;
			border: 1px solid #B0C4DE;
			background: black;
			border-radius: 10px 10px 10px 10px;
		  }
		  .input-group {
			margin: 10px 0px 10px 0px;
		  }
		  .input-group label {
			display: block;
			text-align: center;
			margin: 3px;
			color:white;
		  }
		  .input-group input {
			border: 0;
			border-radius: 30px;
			background: none;
			display: block;
			margin: 5px auto;
			text-align: center;
			border: 2px solid lightblue;
			padding: 12px 10px;
			width: 200px;
			outline: none;
			color: white;
			transition: 0.8s;
		  }
		  .input-group input:hover
		  {
			width: 260px;
			border-color: #2ecc71;
		  }
		  .input-group h2
		  {
			color: white;
		  }
		  .btn {
			border: 0;
			border-radius: 30px;
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 2px solid #2ecc71;
			padding: 10px 10px;
			width: 100px;
			align-items: center;
			outline: none;
			color: white;
			transition: 0.5s;
		  }
		  .error {
			width: 92%; 
			margin: 0px auto; 
			padding: 10px; 
			border: 1px solid #a94442; 
			color: #a94442; 
			background: #f2dede; 
			border-radius: 5px; 
			text-align: left;
		  }
		  .btn:hover
		  {
			  background-color: #2ecc71;
		  }
		  .success {
			color: #3c763d; 
			background: #dff0d8; 
			border: 1px solid #3c763d;
			margin-bottom: 20px;
		  }
		  h4
		  {
			color: white;
			text-decoration: none;
		  }
		  .content p {
			color: white;
		}
		  p a
		  {
			text-decoration: none;
		  }
		 </style>

    </head>
  <body>
  <?php
    include 'header.php'
    ?>
	  <div id="box">
	<form method="post" action="insert1.php">
	    <div class="input-group">
		<label>Image Loaction:<br></label>
		<input type="text" name="image">
		</div>
		<div class="input-group">
		<label>Product Name</label>
		<input type="text" name="name">
		
		</div>
		<div class="input-group">
		<label>Price</label>
		<input type="text" name="price">
		</div>
		
		<input type="submit" class ="btn" name="save" value="submit">
	</form>
</div>
  </body>
</html>