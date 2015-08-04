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

 for ($i=0; $i<=6; $i++) 
    {
$featureLabel[$i]=$xml->sipProfile->sipLines->line[$i]->featureLabel;
$proxy[$i]=$xml->sipProfile->sipLines->line[$i]->proxy;
$port[$i]=$xml->sipProfile->sipLines->line[$i]->port;
$name[$i]=$xml->sipProfile->sipLines->line[$i]->name;
$displayName[$i]=$xml->sipProfile->sipLines->line[$i]->displayName;
$authName[$i]=$xml->sipProfile->sipLines->line[$i]->authName;
$authPassword[$i]=$xml->sipProfile->sipLines->line[$i]->authPassword;
$messagesNumber[$i]=$xml->sipProfile->sipLines->line[$i]->messagesNumber;
$contact[$i]=$xml->sipProfile->sipLines->line[$i]->contact;
}
?>

<table width="100%" cellpadding=2 border=0 id='tab1' class="data-table">

<tr style=" width:100%;">

<?php
  //Abrir bucle
 for ($i=0; $i<=5; $i++) 
    {   
echo "<td><h1> Line $i </h1></td>";
}
?>

</tr>

<form>

<tr>
<?php
  for ($i=0; $i<=5; $i++) 
  {
echo "<td>feature Label $i:<br> <input type=\"text\" name=\"featureLabel<?php echo $i?>\" value=$featureLabel[$i]></td>";
}
?>

</tr>
<tr>

<?php
  for ($i=0; $i<=5; $i++) 
  {
echo "<td>Proxy $i:<br> <input type=\"text\" name=\"proxy<?php echo $i?>\" value=$proxy[$i]></td>";
}
?>

</tr>
<tr>

<?php
  for ($i=0; $i<=5; $i++) 
  {
echo "<td>Port $i:<br> <input type=\"text\" name=\"port<?php echo $i?>\" value=$port[$i]></td>";
}
?>


</tr>
<tr>

<?php
  for ($i=0; $i<=5; $i++) 
  {
echo "<td>Name $i:<br> <input type=\"text\" name=\"name<?php echo $i?>\" value=$name[$i]></td>";
}
?>


</tr>
<tr>

<?php
  for ($i=0; $i<=5; $i++) 
  {
echo "<td>Display name $i:<br> <input type=\"text\" name=\"displayName<?php echo $i?>\" value=$displayName[$i]></td>";
}
?>

</tr>
<tr>

<?php
  for ($i=0; $i<=5; $i++) 
  {
echo "<td>Authorization name $i:<br> <input type=\"text\" name=\"authName<?php echo $i?>\" value=$authName[$i]></td>";
}
?>

</tr>
<tr>

<?php
  for ($i=0; $i<=5; $i++) 
  {
echo "<td>Authorization password $i:<br> <input type=\"text\" name=\"authPassword<?php echo $i?>\" value=$authPassword[$i]></td>";
}
?>

</tr>
<tr>

<?php
  for ($i=0; $i<=5; $i++) 
  {
echo "<td>Messages number $i:<br> <input type=\"text\" name=\"messagesNumber<?php echo $i?>\" value=$messagesNumber[$i]></td>";
}
?>

</tr>
<tr>

<?php
  for ($i=0; $i<=5; $i++) 
  {
echo "<td>Contact $i:<br> <input type=\"text\" name=\"contact<?php echo $i?>\" value=$contact[$i]></td>";
}
?>

</tr>

</form>
</table>

</body>
</html>