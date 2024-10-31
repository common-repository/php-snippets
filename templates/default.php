<div class="wrap">
	<?php /*---------------- HEADER and TABS --------------------------- */ ?>
	<div id="php_snippets_header">
		<img src="<?php print PHP_SNIPPETS_URL; ?>/images/php-snippets-icon.png" alt="php-snippets logo" width="160" height="80" style="float:left; margin-right:20px;"/>
		<p class="php_snippets_header_text">PHP Snippets</span>
			<a href="<?php print $data['help']; ?>" target="_new" title="Contextual Help" style="text-decoration: none;">
				<img src="<?php print PHP_SNIPPETS_URL; ?>/images/question-mark.gif" width="16" height="16" />
			</a>
		<br/>
		<span class="php_snippets_page_title"><?php print $data['page_title']; ?></span>
		</p>
	</div>

	<div id="php_snippets_mainmenu">
	</div>

	<?php 
	/* Any Message (e.g. notices and errors) */
	print $data['msg']; 
	?>

	<div id="php_snippets_nav"><?php print $data['menu']; ?></div>

	<?php 
	/* ----------------- MAIN PAGE CONTENT -------------------------------*/
	print $data['content']; 
	/* -------------------------------------------------------------------*/
	?>

	<?php /*--------------- FOOTER --------------------------*/ ?>
	<div id="php_snippets_footer">

	</div>
</div>