<div id="mainwrap">
	<p>Here is our Home View</p>
	<p><?=$basic?></p>
	<br>
	<div class="people" style="margin-top:40px;">
		<p><b><?=$r['first_name'];?></b></p>
		<br>
		<pre><?php
		print_r($r);
		?></pre>
		<h3><strong><?=$r['last_name'];?></strong></h3>
		<h3><strong><?=$r['username'];?></strong></h3>
		<!--<pre><?php 
		//var_dump($resource);?></pre>-->
	</div>
</div>