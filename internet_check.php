<?php
$bIsConnected = check_internet_connection();
$sText = ($bIsConnected) ? '1' : '0';
if($sText == 1 )
{
	echo "connect";
}
else
{
	echo "not connect";
}
function check_internet_connection($sCheckHost = 'mlsapis.info') 
{
    return (bool) @fsockopen($sCheckHost, 80, $iErrno, $sErrStr, 5);
}
?>
