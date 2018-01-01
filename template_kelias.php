<?php /* Template Name: template_kelias */
get_header();

?>

<head>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<br>
    
<div class="kelias">
    
<div class="kairediv">
<h3><strong>Išgirsta</strong></h3>
   
    <?php 
		do_action( 'omega_before_content' ); 

		do_action( 'omega_content' ); 

		do_action( 'omega_after_content' ); 
		?>
    
    </div>
<div class="desinediv">
    <h3><strong>Atliepta</strong></h3>
    
        <?php
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<h5>'  .  $recent["post_title"] . '</h5>' . '<p>' .  $recent["post_content"] . '</p>' . '<br>';
	}
	wp_reset_query();
?>
        
    </div>
    
    
    
    </div>
<div class="apaciadiv">
<img class="size-medium wp-image-119 aligncenter" src="http://localhost/wp-content/uploads/2017/12/GrafinisElementas_06-204x300.png" alt="" width="204" height="300" />    
</div>
    <?php wp_footer(); ?>
    
    





