<?php
get_header();
?>

<div class="content px-3 py-5 p-md-5">
	<?php
		if (have_posts())
		{
			while(have_posts())
			{
				the_post();
				the_content();
			}
		}
	?>
</div>

<?php
get_footer();
?>
