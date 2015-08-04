<html>

<style>
li {
    display: inline;
}
</style>
<body>
<h1>Sip Manager Suite</h1>
<li>
  <li><a href="lines.php">Lines buttons</a></li>
  <li><a href="time.php">Time</a></li>
  <li><a href="network.php">Network</a></li>
  <li><a href="services.php">Services</a></li>
  <li><a href="system.php">System</a></li>
</li>

<?php
$xml=simplexml_load_file("SEPMAC.xml") or die("Error: Cannot create object");

$authenticationURL=$xml->authenticationURL;
$directoryURL=$xml->directoryURL;
$idleURL=$xml->idleURL;
$proxyServerURL=$xml->proxyServerURL;

?>

<table width="25%" cellpadding=2 border=0 id='tab1' class="data-table">
<form>
<tr>
<td>Authentication URL</td>
<td><input type="text" name="authenticationURL" value=<?php echo $authenticationURL?>></td>
</tr>

<tr>
<td>directory URL</td>
<td><input type="text" name="directoryURL" value=<?php echo $directoryURL?>></td>
</tr>

<tr>
<td>idle URL</td>
<td><input type="text" name="idleURL" value=<?php echo $idleURL?>></td>
</tr>

<tr>
<td>proxy Server URL</td>
<td><input type="text" name="proxyServerURL" value=<?php echo $proxyServerURL?>></td>
</tr>



</form>
</table>


</body>
</html>