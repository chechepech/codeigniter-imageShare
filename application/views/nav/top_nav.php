<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><?php echo $this->lang->line('system_system_name'); ?></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?php if ($this->uri->segment(1) == 'create') {echo 'class="active"';}; ?>><?php echo anchor('create','UPLOAD'); ?></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
</div>
<div class="container theme-showcase" role="main">