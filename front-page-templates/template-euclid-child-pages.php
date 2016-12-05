<!-- Displays the child and grand-child pages of the front page. -->
<?php  
	$args = array(
				'child_of'    => $post->ID,
				'parent'      => $post->ID,
				'post_type'   => 'page',
				'post_status' => 'publish',
				'sort_column' => 'ID'
			);
	$sub_pages = get_pages( $args );
?>
<div class="container">
	<div class="border-wrapper">
		<div class="row">
			<div class="col-sm-3 child-pages-container">
				<ul class="sub-page">
				<?php  
					foreach ( $sub_pages as $child ) {
						echo '<li><span>' . get_the_title( $child->ID ) . '</span></li>';
					}
				?>
				</ul>
			</div>
			<div class="col-sm-9">
			<?php  
				foreach ($sub_pages as $child) {
					echo '<ul class="sub-sub-page">';
					$grandchildren_exist = wp_list_pages( array(
							'child_of' => $child->ID,
							'parent'   => $child->ID,
							'echo'     => false
						));
						$args = array(
							'child_of'    => $child->ID,
							'parent'      => $child->ID,
							'post_type'   => 'page',
							'post_status' => 'publish',
							'sort_column' => 'ID'
						);
						$sub_sub_pages = get_pages( $args );
						foreach ( $sub_sub_pages as $grandchild ) {
							echo '<li class="col-sm-4">';
							echo '<a href="' . get_permalink( $grandchild->ID ) . '">';
							echo get_the_post_thumbnail( $grandchild->ID );
							echo '<h4 class="title">' . get_the_title( $grandchild->ID ) . '</h4>';
							echo '<p class="excerpt">' . get_post_field('post_excerpt', $grandchild->ID) . '</p>';
							echo '</a>';
							echo '</li>';
						}
					echo '</ul>';
				}
			?>
			</div>
		</div>
	</div>
</div>