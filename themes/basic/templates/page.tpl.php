<div id="page" class="container <?php print $classes; ?>"<?php print $attributes; ?>>

  <!-- ______________________ HEADER _______________________ -->

  <header id="header">
		 <div class="row">
				<div class="span4">
			    <?php if ($logo): ?>
			      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
			        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
			      </a>
			    <?php endif; ?>
			
			    <?php if ($site_name || $site_slogan): ?>
			      <hgroup id="name-and-slogan">
			
			        <?php if ($site_name): ?>
			          <?php if ($title): ?>
			            <div id="site-name">
			              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
			            </div>
			          <?php else: /* Use h1 when the content title is empty */ ?>
			            <h1 id="site-name">
			              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
			            </h1>
			          <?php endif; ?>
			        <?php endif; ?>
			
			        <?php if ($site_slogan): ?>
			          <div id="site-slogan"><?php print $site_slogan; ?></div>
			        <?php endif; ?>
			
			      </hgroup>
			    <?php endif; ?>
			    </div>
			    <div class="span4">4</div>
			    <div class="span4">4</div>
	    </div>

	    <?php if ($page['header']): ?>
	   	<div class="row">
			<div class="span12">
		      <div id="header-region">
		        <?php print render($page['header']); ?>
		      </div>
	      	</div>
		</div>
	    <?php endif; ?>

  </header> <!-- /header -->
  <?php if ($main_menu || $secondary_menu): ?>
    <nav id="navigation" class="menu <?php if (!empty($main_menu)) {print "with-primary";}
      if (!empty($secondary_menu)) {print " with-secondary";} ?>">
      <div class="row">
      	<div class="span12">
      		<?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
      		<?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
      	</div>
      </div>
    </nav> <!-- /navigation -->
  <?php endif; ?>

  <!-- ______________________ MAIN _______________________ -->

  <div id="main" class="row clearfix">
  	<?php 
  	$rowtotal=12;
  	if ($page['sidebar_first']):$rowtotal = $rowtotal-4;$row_sidebar_first=4;endif;
	if ($page['sidebar_second']):$rowtotal = $rowtotal-3;$row_sidebar_second=3;endif;
		?>
  		

	<div class="span<?php print $rowtotal; ?>">
	    <section id="content">
	
	        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
	          <div id="content-header">
	
	            <?php print $breadcrumb; ?>
	
	            <?php if ($page['highlighted']): ?>
	              <div id="highlighted"><?php print render($page['highlighted']) ?></div>
	            <?php endif; ?>
	
	            <?php print render($title_prefix); ?>
	
	            <?php if ($title): ?>
	              <h1 class="title"><?php print $title; ?></h1>
	            <?php endif; ?>
	
	            <?php print render($title_suffix); ?>
	            <?php print $messages; ?>
	            <?php print render($page['help']); ?>
	
	            <?php if ($tabs): ?>
	              <div class="tabs"><?php print render($tabs); ?></div>
	            <?php endif; ?>
	
	            <?php if ($action_links): ?>
	              <ul class="action-links"><?php print render($action_links); ?></ul>
	            <?php endif; ?>
	
	          </div> <!-- /#content-header -->
	        <?php endif; ?>
	
	        <div id="content-area">
	          <?php print render($page['content']) ?>
	        </div>
	
	        <?php print $feed_icons; ?>
	
	    </section> <!-- /content-inner /content -->
	</div>
    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="span<?php print $row_sidebar_first; ?> column sidebar first">
        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?> <!-- /sidebar-first -->
    
    <?php if ($page['sidebar_second']): ?>
      <aside id="sidebar-second" class="span<?php print $row_sidebar_second; ?> column sidebar second">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?> <!-- /sidebar-second -->

  </div> <!-- /main -->

  <!-- ______________________ FOOTER _______________________ -->

  <?php if ($page['footer']): ?>
    <footer id="footer">
    	<div class="row">
    		<div class="span12">
      			<?php print render($page['footer']); ?>
      		</div>
      	</div>
    </footer> <!-- /footer -->
  <?php endif; ?>

</div> <!-- /page -->
