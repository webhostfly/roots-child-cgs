<div class="navbar" id="topnavbar">
	<div class="navbar-inner">
		<a href="#" class="brand">北京南航地服</a>
		<?php wp_nav_menu(array('theme_location' => 'top', 'menu_class' => 'nav', 'menu_id' => 'top_nav')); ?>

		<a href="#suggest" class="btn btn-danger" role="button" data-toggle="modal" id="suggest_btn">
			<?php echo (is_home()) ?"网站不好看？":"报告问题"; ?>
		</a>

		<div id="suggest" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="suggestLabel" aria-hidden="true">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="suggestLabel">请留下您的宝贵建议</h3>
			</div>
			<div class="modal-body">
				<p>您好，我是这个网站的设计师。如果您在浏览网站的过程中发现了错误，或者使用上的不便，请您将您的意见或建议通过下面的表格反馈给我。</p>
				<p>您的建议将直接反馈至所有参与网站建设的人。</p>
				<?php echo do_shortcode( '[contact-form-7 id="24725" title="suggest"]' ); ?>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
			</div>
		</div>
		<script type="text/javascript"> $('input#suggest-url').val(window.location.href); </script>
		<form action="http://www.bjcgs.com/staff/admin/index.asp?type=ck" class="navbar-form pull-right">
			<input type="text" name="M_ID" class="input-mini" placeholder="员工号">
			<input type="password" name="pass" class="input-mini" placeholder="密码">
			<button class="btn" type="submit">登陆</button>
		</form>
	</div>
</div>