<?php
function display_greeting(){
  $hour=date('h');//give the current hour of the day  
if($hour>=0 && $hour<=11){
echo 'good morning !';
}
elseif ($hour>=12 && $hour<=17){
echo 'good afternoon';
}
else{
  echo  'good evening';
}
}
