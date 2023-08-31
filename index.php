<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="./quizstyle.css">
    <script src="script.js"></script>
</head>
<body>
  
    <div class="containter">
        <?php 
        echo '<div class="rdnumber">';
        $random= rand(1000000,99999999);
        echo $random;
        echo '</div>';
        ?>
        <div class="form">
            <div class="form1">
                <input id="inputbox" type="number"required value="">
                <button class="button" onclick="Checknumber(<?php echo $random ?>)" style="vertical-align:middle"><span>go</span></button>
            </div>
    </div>
</div>
</body>

</html>