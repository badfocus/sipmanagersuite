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

$sipPort=$xml->devicePool->callManagerGroup->members->member->callManager -> ports->sipPort;
$securedSipPort=$xml->devicePool->callManagerGroup->members->member->callManager->ports->securedSipPort;
$startMediaPort=$xml->sipProfile->startMediaPort;
$stopMediaPort=$xml->sipProfile->stopMediaPort;
$voipControlPort=$xml->sipProfile->voipControlPort;
$natEnabled=$xml->sipProfile->natEnabled;
$natAddress=$xml->sipProfile->natAddress;
?>

<br><br><br>
<table width="25%" cellpadding=2 border=0 id='tab1' class="data-table">
<form><tr>
    <td> sip Port</td>
    <td><input type="text" name="sipPort" value=<?php echo $sipPort?>></td>
</tr>

<tr>
<td>Secured Sip Port</td>
<td><input type="text" name="SecuredSipPort" value=<?php echo $securedSipPort?>></td>
</tr>

<tr>
<td>Start Media Port</td>
<td><input type="text" name="startMediaPort" value=<?php echo $startMediaPort?>></td>
</tr>

<tr>
<td>stopt Media Port</td>
<td><input type="text" name="stoptMediaPort" value=<?php echo $stopMediaPort?>></td>
</tr>

<tr>
<td>voip Control Port</td>
<td><input type="text" name="voipControlPort" value=<?php echo $voipControlPort?>></td>
<tr>

<tr>
<td>NatEnabled</td>
<td><input type="text" name="NatEnabled" value=<?php echo $natEnabled?>></td>
<tr>

<tr>
<td>natAddress</td>
<td><input type="text" name="natAddress" value=<?php echo $natAddress?>></td>
<tr>




</form>
</table>


</body>
</html>