<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="css/common.css" type="text/css">
	<link rel="stylesheet" href="css/style_index.css" type="text/css">
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/nav.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title> 广州 </title>
</head>

<body>
		<nav>
			<div id="nav_inner">
			<ul><!--main nav start-->
				<li class="active"><a href = "index.php">头条新闻</a></li>
				<li><a href = "main.php?f=2">新闻类2</a></li>
				<li><a href = "main.php?f=3">新闻类3</a></li>
				<li><a href = "main.php?f=4">新闻类4</a></li>
				<li><a href = "admin.php">管理员</a></li>
			</ul><!--main nav end-->
		</div>
		</nav>
	
		<!--header start-->	
		<header>
			<div id="inner">
				<h1><a href = "index.php"> 看新闻网站 </a></h1>
			</div>
		</header> 
		<!--header end-->
<?php
$dbc = mysqli_connect('localhost', 'root', '', 'news_db')
    			or die('Error connecting to MySQL server.');

    			$current_cat=1;


				  // Retrieve the score data from MySQL
				  $query = "SELECT * FROM content WHERE fId=$current_cat";
				  $data = mysqli_query($dbc, $query);
?>




		<!--content start-->
		<article>
			<section>
				<div class="centre">
					<?php
				   // Loop through the array of score data, formatting it as HTML 
  
  while ($row = mysqli_fetch_array($data)) { 
    // Display the score data

    echo '<a href="#">';
    echo $row['title'];
    echo '</a>';
    echo '<p>'.$row['text'].'</p>';
  }
  ?>
				</div>
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


<?php
  mysqli_close($dbc);
  ?>


	</body>
</html>