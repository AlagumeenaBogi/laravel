<?php
function mar_set_fb_og() {
		$image = get_field('book_cover', get_the_id() );
		//echo '<!--' . print_r($image) . '-->';
		$book_cover_share = $image['sizes']['thumbnail'];
		echo '<meta property="og:url" content="' . get_the_permalink() . '" />' . "\n";
		echo '<meta property="og:image" content=" ' . $book_cover_share . '" /> ' . "\n";
		echo '<meta property="og:description" content="' . get_the_excerpt() . '"/>';
		echo '<meta property="og:title" content="' . get_the_title() . '" />' . "\n";
		echo '<meta property="og:image:type" content="image/jpeg" />' . "\n";
		echo '<meta property="og:image:width" content="150" />' . "\n";
		echo '<meta property="og:image:height" content="150" />' . "\n";
		//

}
add_action( 'genesis_meta', 'mar_set_fb_og' );
?>