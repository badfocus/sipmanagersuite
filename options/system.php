<html>

<style>
li {
    display: inline;
}
</style>
<body>
<h1>Sip Manager Suite</h1>
<li>
  <li><a href="lines.html">Lines buttons</a></li>
  <li><a href="time.html">Time</a></li>
  <li><a href="network.html">Network</a></li>
  <li><a href="services.html">Services</a></li>
  <li><a href="system.html">System</a></li>
</li>

<?php
$xml=simplexml_load_file("SEPMAC.xml") or die("Error: Cannot create object");

$loadInformation=$xml->loadInformation;

?>

<br><br><br>
<table width="25%" cellpadding=2 border=0 id='tab1' class="data-table">
<form>

<tr>
<td>Load Information</td>
<td><input type="text" name="loadInformation" value=<?php echo $loadInformation?>></td>
</tr>




</form>
</table>


</body>
</html>