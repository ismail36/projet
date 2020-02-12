<?php

$leson = "Leçon";
$grade = "Note";

?>



<form method="get" action="calcule.php">
Nom:<br>
<input type="text" name="nom" placeholder="Mickey">
<br>
Prenom:<br>
<input type="text" name="prenom" placeholder="Mouse">
<br><br>

<div>
    <div class="lecon1Text">
    <p><?php echo $leson ?>-1:</p>
    <input type="text" name="lecon1" placeholder="History">
    </div>
    <div class="lesPoint11">
        <p><?php echo $grade ?>-1</p>
        <input type="number" name="lec1Poin1"  placeholder=0>
    </div>
    <div class="lesPoint12">
        <p><?php echo $grade ?>-2</p>
        <input type="number" name="lec1Poin2" placeholder=0>
    </div>
    <div class="lesPoint13">
        <p><?php echo $grade ?>-3</p>
        <input type="number" name="lec1Poin3" placeholder=0>
    </div>
</div>

<br><br>
<div>
    <div class="lecon2Text">
    <p><?php echo $leson ?>-2:</p>
    <input type="text" name="lecon2" placeholder="Mathematics">
    </div>
    <div class="lesPoint2.1">
        <p><?php echo $grade ?>-1</p>
        <input type="number" name="lec2Poin1" placeholder=0>
    </div>
    <div class="lesPoint2.2">
        <p><?php echo $grade ?>-2</p>
        <input type="number" name="lec2Poin2" placeholder=0>
    </div>
    <div class="lesPoint2.3">
        <p><?php echo $grade ?>-3</p>
        <input type="number" name="lec2Poin3" placeholder=0>
    </div>
</div>

<br><br>
<div>
    <div class="lecon3Text">
    <p><?php echo $leson ?>-3:</p>
    <input type="text" name="lecon3" placeholder="History">
    </div>
    <div class="lesPoint3.1">
        <p><?php echo $grade ?>-1</p>
        <input type="number" name="lec3Poin1" placeholder=0>
    </div>
    <div class="lesPoint3.2">
        <p><?php echo $grade ?>-2</p>
        <input type="number" name="lec3Poin2" placeholder=0>
    </div>
    <div class="lesPoint3.3">
        <p><?php echo $grade ?>-3</p>
        <input type="number" name="lec3Poin3" placeholder=0>
    </div>
</div>

<br><br>
<input type="reset">
<br><br>
<input type="submit" value="Submit">
</form>

</main>
    <footer>

