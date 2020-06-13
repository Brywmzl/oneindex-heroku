<?php view::layout('layout')?>

<?php view::begin('content');?>
	
<div class="mdui-container-fluid">
	<div class="mdui-col-md-6 mdui-col-offset-md-3">
	  <center><h1 class="mdui-typo-display-2-opacity"><strong><font size=4 color=6f7073>Please enter the password to view.</font></strong></h1></center>
	  <form action="" method="post">
		  <div class="mdui-textfield mdui-textfield-floating-label">
		    <i class="mdui-icon material-icons">https</i>
		    <label class="mdui-textfield-label">Password</label>
		    <input name="password" class="mdui-textfield-input" type="password"/>
		  </div>
		  <br>
		  <button type="submit" class="mdui-center mdui-btn mdui-ripple mdui-color-theme-accent">
		  	<i class="mdui-icon material-icons">fingerprint</i>
		  	view
		  </button>
	  </form>
	</div>
	
</div>

<?php view::end('content');?>