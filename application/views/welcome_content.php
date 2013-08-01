<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="box">
	<p><?php echo __('This is the default Kohana index page. You may also access this page as 123')?> <code><?php echo html::anchor('welcome/index', 'welcome/index') ?></code>.</p>

	<p>
		<?php echo __('To change what gets displayed for this page, edit')?> <code>application/controllers/welcome.php</code>.<br />
		<?php echo __('To change this text, edit')?> <code>application/views/welcome_content.php</code>.
	</p>
</div>
<?php echo html::div('Conteudo teste');?>