<?php
require('../config/mikrotik.class.php');
$API = new routeros_api();
$API->debug = false;
if ($API->connect(''.$_GET['ip'].'', ''.$_GET['login'].'', ''.$_GET['senha'].'')) {

$ARRAY = $API->comm("/interface/wireless/registration-table/print");

$first = $ARRAY['0'];
?>
<?php echo $first['uptime']; ?>

<?php } ?>



