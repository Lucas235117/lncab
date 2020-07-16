<?php  


	include('init.php');

	$consulta = mysqli_query($conexion, "SELECT * FROM post ORDER BY id_post DESC");

	while ($registro = mysqli_fetch_array($consulta)) {
		echo "<ul class='row'>";
            echo "<li class='col-md-4'>";
                echo "<figure>";
                    echo "<a href='blog-detail.php'><img class'img-fluid' src='images/img-new-thumb/".$registro["imagen_post"]."' alt=''></a>";
                   	echo "<figcaption>";
                        echo "<a href='blog-detail.php?id=".$registro["id_post"]."' class='sportsmagazine-link-btn'><i class='fa fa-link'></i></a>";
                    echo "</figcaption>";
                echo "</figure>";
                echo "<section>";
                    echo "<h2>";
                    	echo "<a href='blog-detail.php?id=".$registro["id_post"]."'>".$registro["titulo_post"]."</a>";
                    echo "</h2>";
                    echo "<p>".$registro["descripcion_post"]."</p>";
                echo "</section>";
            echo "</li>";
        echo "</ul>";
	}





?>