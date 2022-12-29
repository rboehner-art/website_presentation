<?php
$skills = ["HTML", "CSS", "JavaScript", "PHP","Composite Manufacturing"];


function newList ($arr){
   echo "<ul>";
   foreach ($arr as $value){
      echo "<li>" . $value . "</li>";
   }
   echo "</ul>";
}
newList($skills);
?>


