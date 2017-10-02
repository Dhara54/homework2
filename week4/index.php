<?php
$date =  date('Y-m-d', time());
$op=str_replace('-', '/', $date);

echo "2. Replace - in $date with / and print out the result. <b>".$op."</b><br>";
$tar = "2017/05/24";

echo '3. Compare $date with $tar and then if the result is greater than 0, you should print out “the
future”; If the result is less than 0, you should print out “the past”; if the result is equal to 0,
you should print out “Oops”. You must use if-elseif statement in this question.<br><br>';
if($date < $tar){

echo 'past';

}
else echo 'future';
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)
?>