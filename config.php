<?
include ('SampQueryAPI.php');
$query = new SampQueryAPI('188.165.192.24', '9514');
$aInformation = $query->getInfo(); 
$aServerRules = $query->getRules(); 
?>
{"version":1,"players_today": <?= $aInformation['players'] ?>,"1":{"serverid":1,"name":APEX RP | 01 | DELTA ","players":1,"max_players":1000,"bonus":2}}
