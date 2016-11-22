<?php

/*

#    Here is a sample template for a three column 
#    features section. This is a good example of using 
#    conditional checks for different types of ACF fields.
#
#    As you can see, the generic "the_field()" has been 
#    replaced with a global variable, defined in another 
#    tie-in template file, but that's irrelevant to the 
#    purpose of this file. This file is just to show
#    conditional checks.

*/

global $flex_content;
$background = $flex_content['background'];

$features = $flex_content['features'];
?>

<?php if(!empty($features)): ?>

<!-- Features - Info
================================================== -->
<div class="features-info <?php get_bg_class($background); ?>">
<div class="container">
     
	<div class="article-bg">
	
	<?php foreach($features as $feature): ?>
		
		<?php
		$heading = trim($feature['heading']);
		$image = $feature['image'];
    // Image uses the "Image Array" output option
		$text = trim($feature['text']);
		$button_label = trim($feature['button_label']);
		$button_link_url = esc_url($feature['button_link_url']);
		$before = '';
		$after = '';
		if($button_link_url) {
			$before = '<a href="'.$button_link_url.'">';
			$after = '</a>';
		}
		if(!$button_label) {
			$button_label = 'Learn More';
		}
		?>
		<div class="article">
			
			<?php if(!empty($image)): ?>
				<figure>
					<?php
					echo $before;
					echo theme_get_img( $image['ID'], 'square-size', array('alt' => $image['alt']) );
					echo $after;						
					?>
				</figure>					
			<?php endif; ?>
			
			<aside>
				<?php
				if($heading) {
					echo '<h3>'.$heading.'</h3>';
				}
				echo wpautop($text);
				?>
			</aside>
			<?php if($button_link_url): ?>
				<div class="btn-out"><a href="<?php echo $button_link_url; ?>" class="btn"><?php echo $button_label; ?></a></div>
			<?php endif; ?>
		</div>
		
	<?php endforeach; ?>
	
	</div>     
     
</div>
</div>

<?php endif;
