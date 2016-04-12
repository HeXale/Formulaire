<?php

	// Connexion à la base

	mysql_connect('servdb','username','password');
	mysql_select_db('dbname');

	// Variables & Requete SQL

	$name = $_POST['name'];

	if ( mysql_query(
							"INSERT INTO wds_actu (nom)
							VALUES ('".$name."')"
						)
					) {
							echo "<div class='success'>Votre formulaire à bien été pris en compte";
							if($mode == '1') {
								echo " et publié.</div>";
							}
					else {
						echo ".</div>";
					}
				} 
				else {
					$erreur.= "<div class='error'>Il y a eu une erreur - ".mysql_error()." </div>";
				}
				

				echo $erreur;
			} // fin if erreur
			else
			{
	 			echo $erreur;
			}
		} // fin isset post submit
  ?>