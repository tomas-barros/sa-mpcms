<?php App::import('Vendor', 'samp'); $query = new SampQuery($server_ip, $server_port); if ($query->connect()) {$server_info = $query->getInfo(); $aServerRules = $query->getRules(); $aPlayers = $query->getDetailedPlayers(); $connected = 1;} else {$connected = 0;} ?>

<div class="server">
<span id="value">Server Name <b><?php echo($server_info['hostname']); ?></b></span>
<span id="value">Gamemode <b><?php echo($server_info['gamemode']); ?></b></span>
<span id="value">Max players <b><?php echo($server_info['maxplayers']); ?></b></span>
<span id="value">SA:MP Version <b><?php echo($aServerRules['version']); ?></b></span>
<span id="value" style="float: right;"><a href="samp://<?php echo($server_ip.':'.$server_port); ?>"><b>Connect now</b></a></span>
</div>

<div class="players">
<span id="info"><i class="fa fa-info-circle"></i> Currently there are <b><?php echo($server_info['players']); ?></b> players playing on our server.</span>
<div id="playerlist">

<table>
<tr>
<td>ID</td>
<td>Nickname</td>
<td>Score</td>
<td>Ping</td>
</tr>

<?php
foreach($aPlayers as $sValue)
{
?>
<tr>
<?php 
echo('<td>'.$sValue['playerid'].'</td>'); 
echo('<td>'.$sValue['nickname'].'</td>'); 
echo('<td>'.$sValue['score'].'</td>'); 
echo('<td>'.$sValue['ping'].'</td>'); ?>
</tr>
<?php
}
?>
</table>
</div>
</div>

<?php $query->close(); ?>