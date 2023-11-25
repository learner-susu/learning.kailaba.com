<?php
// Repository Update
$output = shell_exec('/usr/bin/bash /home3/kailabac/myScripts/EL_Computer/learning-auto-deploy.sh>/tmp/learning-auto-deploy.log');
// Deploy
echo "Shell exec executed: $output";
header("refresh: 7; https://docs.computer.kailaba.com");

	echo '<title>New Deployement executing.</title><div style="background: #e9ffed; border: 1px solid #b0dab7; padding: 15px;" align="center" >
	<font size="5" color="#182e7a">Your new deployment is deployed..</font><br /><br />
	<font size="4">Now, you are<br /><br />
	redirecting to homepage in 5 seconds...<br /><br />

</font></div>';
?>