<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="css/common.css" type="text/css">
	<link rel="stylesheet" href="css/style_product.css" type="text/css">
	<script src="js/jquery.js"></script>
	<script src="js/common.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title> 产品 </title>
</head>

<body>
		<nav>
			<div id="nav_inner">
			<ul><!--main nav start-->
				<li><a href = "index.html">主页</a></li>
				<li class="active"><a href = "product.php">产品</a>
						<ul><!--product level 2 start-->
							<li><a href="#">分子生物学</a></li>
							<li><a href="#">基因检测</a></li>
							<li><a href="#">免疫学</a></li>
							<li><a href="#">神经生物学</a></li>
							<li><a href="#">试剂/耗材</a></li>
							<li><a href="#">生物活性蛋白</a></li>
						</ul>
				</li><!--product level 2 end--> 
				<li><a href = "service.html">服务</a>
					<ul><!--service level 2 start-->
						<li><a href="#">服务1</a></li>
						<li><a href="#">服务2</a></li>
						<li><a href="#">服务3</a></li>
						<li><a href="#">服务1</a></li>
						<li><a href="#">服务2</a></li>
						<li><a href="#">服务3</a></li>
					</ul><!--service level 2 end-->
				</li>
				<li><a href = "support.html">技术</a></li>
				<li><a href = "order.html">订购</a></li>
			</ul><!--main nav end-->
		</div>
		</nav>
	
		<!--header start-->	
		<header>
			<div id="inner">
				<h1><a href = "index.html"> 管理员界面 </a></h1>
				<p><?
				echo '欢迎回来，管理员。'
				?></p>
			</div>
		</header> 
		<!--header end-->
		
		<!--content start-->
		<article>
			<section>
				<?php
				
				
 if (isset($_POST['submit'])) {
    // Grab the description data from the POST
    $name = $_POST['name'];
    $description = $_POST['description'];

    if (!empty($name) && !empty($description)) {
      // Connect to the database
      $dbc = mysqli_connect('localhost', 'root', '', 'insight_bio_database');

      // Write the data to the database
      $query = "INSERT INTO products (name, description) 
      			VALUES ('$name', '$description')";
      mysqli_query($dbc, $query);

      // Confirm success with the user
      echo '<p>Thanks for adding your new high description!</p>';
      echo '<p><strong>Name:</strong> ' . $name . '<br />';
      echo '<strong>description:</strong> ' . $description . '</p>';
      echo '<p><a href="admin.php">&lt;&lt; Back to high descriptions</a></p>';

      // Clear the description data to clear the form
      $name = "";
      $description = "";

      mysqli_close($dbc);
    }
    else {
      echo '<p class="error">Please enter all of the information to add your high description.</p>';
    }
  }
?>

  <hr />
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php if (!empty($name)) echo $name; ?>" /><br />
    <label for="description">description:</label>
    <input type="text" id="description" name="description" value="<?php if (!empty($description)) echo $description; ?>" />
    <hr />
    <input type="submit" value="Add" name="submit" />
  </form>







				?>
				
			</section>

			
		<!--content end-->


	<!--footer start-->	
	<footer>
			<ul>
				<li><a href="#">联系地址</a></li>
				<li><a href="#">关于我们</a></li>
				<li><a href="#">公司新闻</a></li>
				<li><a href="#">管理团队</a></li>
			</ul>
			<p>Hand written by Gengyu Li - Powered by jQuery and PHP</p>
		
	</footer> <!--footer end-->





	</body>
</html>