<?php

$profileText = "I am a web and mobile developper. ";
$titleProfile = "Profile";

$titleSkills = "Skills";
$skil1 = "Core Java and OOP";
$skil2 = "Selenium WebDriver";

$skills = ["Core Java and OOP", "Selenium WebDriver", "Jira-Xray", "Git&Github", "HTML", "CSS", 
"JavaScript", "PHP", "SQL", "Agile-Scrum", "Waterfall", "Photoshop", "After Effects", "Adobe Premiere"];
 function listSkills($array)
 {
     foreach($array as $arr)
     {
        echo
<<<HTML
        <li>$arr</li>
HTML;
     }
 }


?>


<section class="sectionLeft">
    <div class="profile">
        <h2 class="titleProfile"><?php echo $titleProfile ?></h2>
        <p class="profileText"><?php echo $profileText ?></p>
    </div>
    <div class="skills">
        <h2 class="titleSkills"><?php echo $titleSkills ?></h2>
        <ul class="skillsList">
           <?php 
                listSkills($skills);
           ?>
        </ul>
    </div>
</section>