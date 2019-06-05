<?php $banner_image = get_field("banner_image");
		$banner_copy = get_field("banner_copy");?>
		<div class="jobs-banner">
			<?php 
				if($banner_image) echo '<img src="'.$banner_image["url"].'">'
				//if($banner_image) echo '<div class="background" style="background-image: url('.$banner_image['url'].');"></div>';
			?>
			<div class="banner-info">
				<?php if($banner_copy):?>
					<div class="row-1">
						<?php echo $banner_copy;?>
					</div><!--.row-1-->
				<?php endif;?>
				<div class="row-2">
					
					<div class="banner-button find">Find a Job
					<?php //$terms = get_terms(array('taxonomy'=>'event_cat'));
						//$terms = get_field("categories_to_show");
	                        //if(!is_wp_error($terms)&&is_array($terms)&&!empty($terms)):
					$terms = get_terms( array(
					    'taxonomy' => 'job_cat',
					    'hide_empty' => false,
					) );
						if(is_array($terms)&&!empty($terms)):?>
	                            <ul>
	                                <?php foreach($terms as $term):?>
	                                    <li>
	                                        <a href="<?php echo get_term_link($term->term_id);?>"><?php echo $term->name;?></a>    
	                                    </li>
	                                <?php endforeach;?>
	                            </ul>
	                        <?php endif;?>
					</div>
					<a class="banner-button" href="<?php echo get_permalink(48786);?>">Post a Job</a>
					<a class="banner-button" href="<?php bloginfo('url');?>/why-this-jobs-board-matters/">More Info</a>

				</div><!--.row-1-->
			</div>
		</div><!--.jobs-banner-->
		<section class="below-banner">
			<div class="row-3">
				<form action="<?php echo home_url( '/' ); ?>" method="GET">
					
						<input type="text" name="s" placeholder="Search">
						<input type="hidden" name="search-type" value="jobs" />
						<input type="hidden" name="post_type" value="job" />
						<button type="submit">
							<i class="fa fa-search"></i>
						</button>
						<div class="clear"></div>

						<?php //get_search_form(); ?>
					
					<!--<div class="row-2">
						<?php $terms = get_field("categories_to_show");
						if(is_array($terms)&&!empty($terms)):?>
							<ul>
								<li>Popular categories:</li>
								<?php foreach($terms as $term):?>
									<li>
										<input type="radio" name="category" id="<?php echo $term->slug;?>" value="<?php echo $term->term_id;?>"><label for="<?php echo $term->slug;?>"><?php echo $term->name;?></label>
									</li>
								<?php endforeach;?>
							</ul>
						<?php endif;?>
					</div>.row-2-->
					<!--<div class="row-3">
						<?php $terms = get_terms(array('taxonomy'=>'level','hide_empty'=>false));
						if(!is_wp_error($terms)&&is_array($terms)&&!empty($terms)):?>
							<ul>
								<li>level:</li>
								<?php foreach($terms as $term):?>
									<li>
										<input type="radio" name="level" id="<?php echo $term->slug;?>" value="<?php echo $term->term_id;?>"><label for="<?php echo $term->slug;?>"><?php echo $term->name;?></label>
									</li>
								<?php endforeach;?>
							</ul>
						<?php endif;?>
					</div>.row-3-->
				</form>
			</div><!--.row-1-->
		</section>