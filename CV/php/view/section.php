<?php

$profileText = "I am a web and mobile developper. ";
$titleProfile = "Profile";

$titleSkills = "Skills";
$skil1 = "Core Java and OOP";
$skil2 = "Selenium WebDriver";

$titleWorkExperience = "Work Experience";
$experience1 = "Taught English and Turkish language to foreign learners in a private high school in Mongolia. 
I was vice-director of the school and manager of scoial media. I created film club and green screen studio in the school and 
I implemented some projects.";
$experience2 = "I was volunteer as a photographer in event of International Festival of Language and Cultures in Mongolia";
$experience3 = "I worked as a videographer and cameraman for event of Festival of Languages and Cultures in Paris as a volunteer. 
I shooted the videos of preparation process and montaged for advertisement and created the videos for background on the event.";
$experience4 = "I worked as a cameraman and videographer for event of the Vivre Ensemble in Lyon. 
I shooted the full video of the event and montaged them as a volunteer.";

$experienceArr = [$experience1, $experience2, $experience3, $experience4];

$skills = ["Core Java and OOP", "Selenium WebDriver", "Jira-Xray", "Git&Github", "HTML", "CSS", 
"JavaScript", "PHP", "SQL", "Agile-Scrum", "Waterfall", "Photoshop", "After Effects", "Adobe Premiere"];
 function listIndex($array)
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
                listIndex($skills);
           ?>
        </ul>
    </div>
    <div class="workExperience">
        <h2 class="titleWorkExperience"><?php echo $titleWorkExperience ?></h2>
        <ul class="workExperienceList">
           <?php 
                listIndex($experienceArr);
           ?>
        </ul>
    </div>
</section>