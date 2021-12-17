<?php
$date = new DateTime('2000-01-01');
echo 'evaluates whether the current day is Monday';
if (date('l') == 'Monday'){
  echo 'We are on Monday';
}else{
  echo'We aren`t on Monday';
}

echo'<hr>';
echo 'Evaluates whether the current month is October';
if (date('m') == 'October'){
  echo 'We are on October';
}else{
  echo'We aren`t on October';
}

echo'<hr>';
echo'Current minutes';
if(date('i')<10){
  echo 'the current minute is less than 10';
}else if (date('i')>15){
  echo'the current minute is more than 15';
}else {
  echo'Does not meet any conditions';
}

echo'<hr>';
echo'Week days';
switch(date('i')){
  case 'Monday':
  echo'We are on Monday';
  break;
  case 'Tuesday':
  echo 'We are on tuesday';
  break;
  case 'Wednesday':
  echo 'We are Wednesday';
  break;
  case 'Thursday':
  echo 'We are on Thursday';
  break;
  case 'Friday':
  echo 'We are on Friday';
  break;
  default;
  echo 'Weekend';
  break;

}
?>
