<?php
/**
 * Block Name: Testimonial
 *
 * This is the template that displays the Google Ad block.
 */

// get image field (array)
$adblock = get_field('gutenberg_ad_block');

// create id attribute for specific styling
$id = 'adblock-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<div id="<?php echo $id; ?>" class="googleads" >
	<?php //echo $adblock; ?>
	<!-- /1009068/In-Story_Gutenbers -->
<div id='div-gpt-ad-1562862188941-0' style='width: 728px; height: 90px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1562862188941-0'); });
  </script>
</div>
</div>
<style type="text/css">
	/*#<?php //echo $id; ?> {
		background: ;
		color: ;
	}*/
</style>