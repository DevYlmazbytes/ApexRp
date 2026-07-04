<?
include ('SampQueryAPI.php');
$query = new SampQueryAPI('188.165.192.24', '9514');
$aInformation = $query->getInfo(); 
$aServerRules = $query->getRules(); 
?>
{"version":1,"players_today": <?= $aInformation['players'] ?>,"1":{"serverid":1,"name":"HARD LIFE RP | 01 | TEXAS [TEST]","players":999,"max_players":1000,"bonus":0}}
