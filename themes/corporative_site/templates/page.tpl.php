<div class="wrapper-outer container">
	<header id="header" class="wrapper-header">
		<div class="row">
			<div class="wrapper-inner span4">
				<?php print theme('identity', $identity_vars); ?>
				<?php print $header_block_region; ?>
		    </div>
		    <div class="span4">4</div>
		    <div class="span4">4</div>
		</div>
	</header><!-- /.wrapper-inner, /header -->
	<div id="nav" class="row wrapper-nav">
		<div class="wrapper-inner span12">
			<?php print theme('menu', $main_menu_vars); ?>
		    <?php print theme('menu', $secondary_menu_vars); ?>
		    <?php print $menu_bar_region; ?>      
		</div>
	</div><!-- /.wrapper-inner, /nav -->
</div>
<div class="wrapper-outer container">
	<?php print $highlighted_region; ?>
	<div class="row wrapper-main">
		<?php
		$rowtotal=12;
		$rowsidebar_first=3;
		$rowsidebar_second=4;
		if($sidebar_first_region):
			$rowtotal=$rowtotal-$rowsidebar_first;
		endif;
		if($sidebar_second_region):
			$rowtotal=$rowtotal-$rowsidebar_second;
		endif;
		?>
		<?php if($sidebar_first_region):?>
			<div class="span<?php print $rowsidebar_first; ?>">
				<?php print $sidebar_first_region; ?>
			</div>
		<?php endif;?>
		<div class="span<?php print $rowtotal; ?> wrapper-middle<?php print $wrapper_middle_grid; ?>">
			<section>
				<?php print $breadcrumb; ?>
				<div class="wrapper-inner">
					<?php print theme('content_elements', $content_elements_vars); ?>
					<?php print render($page['help']); ?>
					<?php print $messages; ?>
					<?php print $content_region; ?>
					<?php print $feed_icons; ?>
				</div><!-- /.wrapper-inner -->
			</section>
		</div><!-- /.wrapper-middle -->
		<?php if($sidebar_second_region):?>
			<div class="span<?php print $rowsidebar_second; ?>">
				<?php print $sidebar_second_region; ?>
			</div>
		<?php endif;?>
	</div><!-- /.wrapper-inner, /.wrapper-main -->

</div><!-- /.wrapper-outer -->
<div class="wrapper-outer container">
	<footer>
		<div class="row">
			<div class="span12">
				<?php print $footer_region; ?>
			</div>
		</div>	
		<div class="row">
			<div id="legal" class="span12">
				<a href="http://www.drupal.org/project/om">OM Base Theme</a> <?php print date('Y'); ?> | V7.x-2.x | <a href="http://www.danielhonrade.com">Daniel Honrade</a>
			</div>
		</div>
	</footer>
</div>


