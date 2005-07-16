<?php
header("Content-Type: text/html; charset=UTF-8");

require_once('/etc/logwood-fe.conf');
$dbh = mysql_connect($server, $username, $password);
mysql_select_db($database, $dbh);
?>
<html>
<head>
<title>Access statistics</title>
<style type="text/css">
h1, h2, h3 {
        font-family: sans-serif;
        font-variant: small-caps;
}

h1 {
        margin:0px;
}

h2 {
 font-size: 150%;border-bottom: 1px #535353 dashed; font-weight: bold;
 margin-top:25px;margin-bottom:0px;line-height:200%;
}

body {
	background-color: white;
	color: black;
}
table {
	margin-top: 2em;
	margin-right: 2em;
	border-collapse: collapse;
	border: solid 1px #444444;
	margin-left: auto;
	margin-right: auto;
}
th, td {
	border: solid 1px #444444;
	padding-left: 0.5em;
	padding-right: 0.5em;
}
td {
	background-color: #f6f6f6;
}
td.grouped {
	background-color: #f6e0e0;
}
th {
	background-color: #eeeeff;
}
div {
	text-align: center;
}
#motif {
	color: #666666;
}
</style>
</head>
<body>
<form action='logwood.php' method='get'>

<?php
$site = false;
if (isset($_REQUEST['site']))
	$site = mysql_real_escape_string($_REQUEST['site'], $dbh);
?>

<p>Select a site:
<select name="site">
<?php
$q = mysql_query("SELECT si_name FROM sites ORDER BY si_name ASC", $dbh);
while ($o = mysql_fetch_assoc($q)) {
	$opt = $o["si_name"];
	echo "<option value='$opt'>$opt</option>\n";
}
mysql_free_result($q);
?>
</select>

<input type='submit' value='Go' />
</p>

<?php
if ($site !== false) {

$top_urls = mysql_query("
	SELECT si_name, ur_path, uc_count FROM sites, url_id, url_count
	WHERE sites.si_name='$site' AND ur_site=si_id AND uc_url_id=ur_id
	ORDER BY uc_count DESC LIMIT 100
	");

?>
<h1>Statistics for <?php echo $site?></h1>

<h2>Most popular URLs</h2>
<table><tr><th>#</th><th>Views</th><th>URL</th></tr>
<?php
$i = 1;
while ($url = mysql_fetch_assoc($top_urls)) {
	$purl = htmlspecialchars("http://" . $url["si_name"] . "/" . urldecode($url["ur_path"]));
	$lurl = htmlspecialchars("http://" . $url["si_name"] . "/" . $url["ur_path"]);
	$count = $url["uc_count"];
	echo "<tr><td>$i</td><td>$count</td><td><a href=\"$lurl\">$purl</a></td></tr>\n";
	++$i;
}
mysql_free_result($top_urls);
?>
</table>

<h2>Most active hours</h2>

<div>
<img src="/logwood-hour-graph.php?site=<?php echo htmlspecialchars(urlencode($site))?>" />
</div>

<table>
<?php
$hours = mysql_query("
	SELECT hr_hour, SUM(hr_count) AS total FROM sites,hours 
	WHERE si_name='$site' AND hr_site=si_id
	GROUP BY hr_hour ORDER BY hr_hour ASC
	");
$hrs = array();
for ($i = 0; $i < 24; ++$i) $hrs[$i] = 0;
while ($hour = mysql_fetch_assoc($hours)) {
	$phour = $hour["hr_hour"];
	$sum = $hour["total"];
	$hrs[$phour] = $sum;
}
mysql_free_result($hours);

echo "<tr><th>Hour</th>";
for ($i = 0; $i < 12; ++$i) echo "<th>$i</th>";
echo "</tr>\n";
echo "<tr><th>Visits</th>";
for ($i = 0; $i < 12; ++$i) echo "<td>{$hrs[$i]}</td>";
echo "</tr>\n";

echo "<tr><th>Hour</th>";
for ($i = 12; $i < 24; ++$i) echo "<th>$i</th>";
echo "</tr>\n";
echo "<tr><th>Visits</th>";
for ($i = 12; $i < 24; ++$i) echo "<td>{$hrs[$i]}</td>";
echo "</tr>\n";

?>
</table>

<h2>Most common referers</h2>

<table>
<tr><th>#</th><th>Count</th><th>Referer</th></tr>
<?php
$refers = mysql_query("
	SELECT ref_url, ref_count, ref_grouped FROM sites, ref_ids, ref_count
	WHERE si_name='$site' AND ref_site=si_id AND ref_count.ref_id=ref_ids.ref_id
	ORDER BY ref_count DESC LIMIT 50;
	");
$i = 1;
while ($refer = mysql_fetch_assoc($refers)) {
	$purl = htmlspecialchars(urldecode(urldecode($refer["ref_url"])));
	$lurl = htmlspecialchars(urldecode($refer["ref_url"]));
	$group = $refer["ref_grouped"] ? " class='grouped'" : "";
	$count = $refer["ref_count"];
	echo "<tr><td $group>$i</td><td $group>$count</td><td $group><a rel='nofollow' href=\"$lurl\">$purl</a></td></tr>\n";
	$i++;
}
mysql_free_result($refers);
?>
</table>

<h2>Most popular User-Agents</h2>

<table>
<tr><th>#</th><th>Count</th><th>Agent</th></tr>
<?php
$agents = mysql_query("
	SELECT ag_name, ac_count, ag_grouped FROM sites, agent_ids, agent_count
	WHERE si_name='$site' AND ag_site=si_id AND ac_id=ag_id
	ORDER BY ac_count DESC LIMIT 50;
	");
$i = 1;
while ($agent = mysql_fetch_assoc($agents)) {
	$pagent = htmlspecialchars(urldecode($agent["ag_name"]));
	$count = $agent["ac_count"];
	$group = $agent["ag_grouped"] ? " class='grouped'" : "";
	echo "<tr><td$group>$i</td><td$group>$count</td><td$group>$pagent</td></tr>\n";
	$i++;
}
mysql_free_result($agents);
?>
</table>

<?php
}
?>

<hr>
<p id='motif'>Statistics generated by <a href="mailto:keturner@livejournal.com">Logwood</a>.</p>
</body>
</html>
