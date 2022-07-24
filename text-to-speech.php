
<?php
	
$txt="Pt.DWARAKA PRASAD MISHRA INDIAN INSTITUTE OF INFORMATION TECHNOLOGY DESIGN AND MANUFACTURING JABALPUR (IIITDMJ) is an institute of national importance,established under an act of parliament  ministry";

	
$txt=htmlspecialchars($txt);
$txt=rawurlencode($txt);
$html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=en-IN');
$player="<audio controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
echo $player;	 
?>