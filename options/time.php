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

echo $xml->devicePool->dateTimeSetting->dateTemplate . "<br>";
echo "test";

$dateTemplate=$xml->devicePool->dateTimeSetting->dateTemplate;
$Timezone=$xml->devicePool->dateTimeSetting->Timezone;
$olsonTimeZone=$xml->devicePool->dateTimeSetting->olsonTimeZone;
$NTP=$xml->devicePool->dateTimeSetting->NTP;
$ntpMode=$xml->devicePool->dateTimeSetting->ntpMode;

?>

<br><br><br>
<table width="25%" cellpadding=2 border=0 id='tab1' class="data-table">
<form><tr>
    <td> Date Template</td>
    <td><input type="text" name="dateTemplate" value=<?php echo $dateTemplate?>></td>
</tr>

<tr>
<td>Time zone</td>
<td><input type="text" name="Timezone" value=<?php echo $Timezone?>></td>
</tr>

<tr>
<td>Olson Time Zone</td>
<td><input type="text" name="olsonTimeZone" value=<?php echo $olsonTimeZone?>></td>
</tr>

<tr>
<td>NTP</td>
<td><input type="text" name="NTP" value=<?php echo $NTP?>></td>
</tr>


<td>NTP Mode</td>
<td><input type="text" name="ntpMode" value=<?php echo $ntpMode?>></td>
<tr>

</form>
</table>


</body>
</html>