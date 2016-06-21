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
$speedDialNumber[$i]=$xml->sipProfile->sipLines->line[$i]->speedDialNumber;
$serviceURI[$i]=$xml->sipProfile->sipLines->line[$i]->serviceURI;

//Services
$authenticationURL=$xml->authenticationURL;
$directoryURL=$xml->directoryURL;
$idleURL=$xml->idleURL;
$proxyServerURL=$xml->proxyServerURL;

//Network
$sipPort=$xml->devicePool->callManagerGroup->members->member->callManager -> ports->sipPort;
$securedSipPort=$xml->devicePool->callManagerGroup->members->member->callManager->ports->securedSipPort;
$startMediaPort=$xml->sipProfile->startMediaPort;
$stopMediaPort=$xml->sipProfile->stopMediaPort;
$voipControlPort=$xml->sipProfile->voipControlPort;
$natEnabled=$xml->sipProfile->natEnabled;
$natAddress=$xml->sipProfile->natAddress;

//System
$loadInformation=$xml->loadInformation;

//Time
$dateTemplate=$xml->devicePool->dateTimeSetting->dateTemplate;
$timeZone=$xml->devicePool->dateTimeSetting->timeZone;
$olsonTimeZone=$xml->devicePool->dateTimeSetting->olsonTimeZone;
$NTP=$xml->devicePool->dateTimeSetting->ntps->ntp->name;
$ntpMode=$xml->devicePool->dateTimeSetting->ntps->ntp->ntpMode;
}
?>
<?php
header("Content-type: text/xml");
?>
<CiscoIPPhoneText>
<Title>SIP Einstellungen</Title>
<Prompt/>

<Text>
Sip einstellungen
<?php
  for ($i=0; $i<=4; $i++) 
  {
echo "Taste $i $featureLabel[$i] $speedDialNumber[$i]
";
}
?>

<?php
  for ($i=0; $i<=0; $i++) 
  {
echo "Taste $i $featureLabel[$i]
";
echo "Proxy $proxy[$i]
";
echo "Port $port[$i]
";
echo "name $name[$i]
";
echo "displayName $displayName[$i]
";
/*echo "authName $authName[$i]
";
echo "authPassword $authPassword[$i]
";*/
echo "messagesNumber $messagesNumber[$i]
";
echo "contact $contact[$i]
";
}
?>

<?php
  for ($i=4; $i<=4; $i++) 
  {
echo "Taste $i $featureLabel[$i]
";
echo "serviceURI $serviceURI[$i]

";

}
?>

</Text>
</CiscoIPPhoneText>