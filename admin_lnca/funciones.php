<?php  


	include('init.php');

	class funciones{


		public function getPublicacion($id_post){
			global $pdo;

			$query = $pdo->prepare("
				SELECT *
				FROM post
				WHERE id_post = :id_post
			");

			$query->execute([
				'id_post' => $id_post
			]);

			return $query->fetch();
		}


	}

	





?>