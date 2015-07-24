<div id="zutaten-wrapper">
	<section>
	<h1 class="zutaten-heading">Zutaten</h1>
<?php
// no default values. using these as examples

echo '<ul class="zutaten-list clear">';
echo get_the_term_list( $post->ID, 'zutaten_cat', '<li class="menu-item-single">', '</li><li class="menu-item-single">', '</li>' );
echo '</ul>';

?>

	</section>
	<a href="javascript:void(0)" class="mail-zutaten">
		Als Einkaufsliste schicken
	</a>
</div>