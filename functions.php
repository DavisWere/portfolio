<?php

function Skills() {
  $programmingLanguages = " Python,  PHP, SQL, currently learning Django ";
  $devMethodologies = "Agile, Waterfall";
  $devTools = "Git, Visual Studio";
  $debuggingTestingTools = "PHPUnit ";
  $problemSolving = "Ability to solve  problems and troubleshoot issues";
  $communication = "Effective communication with team members, stakeholders, and clients";
  $adaptability = "Ability to learn quickly and adapt to new technologies and processes";
  $attentionToDetail = "Attention to detail in writing code, testing, and debugging";

  echo "<ul>";
  echo "<li>Programming languages: " . $programmingLanguages . "</li>";
  echo "<li>Software development methodologies: " . $devMethodologies . "</li>";
  echo "<li>Familiarity with development tools: " . $devTools . "</li>";
  //echo "<li>Debugging and testing: " . $debuggingTestingTools . "</li>";
  echo "<li>Problem-solving: " . $problemSolving . "</li>";
  echo "<li>Communication: " . $communication . "</li>";
  echo "<li>Adaptability: " . $adaptability . "</li>";
  echo "<li>Attention to detail: " . $attentionToDetail . "</li>";
  echo "</ul>";
}
function aboutme (){
$name= " Davis Odhiambo Were";
$age = 22;
$school ="St. Paul's University Kenya";
echo  $name;

}
?>