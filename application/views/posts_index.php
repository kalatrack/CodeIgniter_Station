<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>First View in CodeIgniter</title>
 <style type="text/css">
		html{
			margin: auto;
			padding: 0 0 auto;
			background-color: #FFF090;
		}
		body{
			border-radius: 20px;
			margin: 30px auto; 
			padding: 15px 15px 15px 15px;
			background-color: #AAA;
			width: 80%;
			height: auto;
			font-size: 1.1em;
			font-family: cursive;
		}
 </style>
</head>
<body>
<?php 

		if(!isset($posts)){
 			echo "Post is not setted";
 		  }else {
 				foreach ($posts as $post) {
 				echo $post['postID'];echo " : <b>";echo $post['title']; echo "</b>";
 				echo "<p>".$post['post']."</p>";   echo "<hr>";
 		  		}
 		}


 ?>



</body>
</html>


