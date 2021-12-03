<?php
/**
* This is a test script to illustrate the log file and location
*/
?>
<html>
<body>
<div>
<p>Current log file: <pre><?php print ini_get('error_log'); ?></pre></p>
</div>
<?php
if (isset($_POST['log_text'])) {
$log_text = $_POST['log_text'];
error_log($log_text);
print "<div>Just Logged: <pre>$log_text</pre></div>";
}
?>
<form method="post">
<label for="log_text">Log A Line: </label><input name="log_text" placeholder="Enter
something to log"/>
<button type="submit"> Go </button>
</form>
</body>
</html>
