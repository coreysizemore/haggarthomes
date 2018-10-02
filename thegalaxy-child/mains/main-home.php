<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>
	
<?php 
	
	if ( is_active_sidebar( 'attention-sidebar-1' ) ):
	 
		get_template_part( 'sidebars/sidebar' , 'attentiontop' );
	
	endif; 
	
?>

<?php 
	
	if( get_field('display_call_out_boxes') ):

		get_template_part( 'misc/calloutboxes' );
		
	endif;
		
?>

<div class="home_featured">
		
		<div class="featured_wrapper">
			
			<a href="http://www.haggarthomes.com/street-of-dreams/">
			
				<div class="featured_item">
					
					<h3>Street Of Dreams</h3>
					
				</div>
			
			</a>
			
		</div>
		
		<div class="featured_wrapper">
			
			<a href="http://www.haggarthomes.com/street-of-dreams/">
			
				<div class="featured_item">
					
					<h3>Street Of Dreams</h3>
					
				</div>
			
			</a>
			
		</div>
		
		<div class="featured_wrapper">
			
			<a href="http://www.haggarthomes.com/gallery/">
			
				<div class="featured_item">
					
					<h3>Quarryview</h3>
					
				</div>
			
			</a>
			
		</div>
		
		<div class="featured_wrapper">
			
			<a href="http://www.haggarthomes.com/gallery/">
			
				<div class="featured_item">
					
					<h3>Quarryview</h3>
					
				</div>
			
			</a>
			
		</div>
		
	</div>

<div id="main" class="nothing_displayed <?php echo basename(get_permalink()); ?>">

	<?php if( get_field('default_editor')): ?>
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
						
					<?php if( get_field('sidebar_selection') == 'right' ): ?>
						
						<div class="col_9">
								
							<div class="content">
					
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
								?>
									
							</div>
								
						</div>
							
						<div class="col_3">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
								
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'none' ): ?>
					
						<div class="col_12">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
								?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'left' ): ?>
					
						<div class="col_3">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
							
						</div>
						
						<div class="col_9">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
								?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
						
				</div>
				
			</div>
			
		</div>
	
	<?php endif; ?>
	
	<?php if(is_user_logged_in()):?>
	
		<div class="edit_button">
		
			<span class="edit"><?php edit_post_link(); ?></span>
		
		</div>
	
	<?php endif; ?>

</div>

<?php get_template_part( 'misc/parallax' ); ?>

<?php

	if( get_field('attention_bottom' )):
	
		if ( is_active_sidebar( 'attention-sidebar-2' ) ):
	 
			get_template_part( 'sidebars/sidebar' , 'attentionbottom' );
		
		endif;
		
	endif;
						
?>
	
	
	