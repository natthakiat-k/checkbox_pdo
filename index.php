<?php
    require_once('connection.php');

    if(isset($_REQUEST['btn_submit'])) {
        try {
            $sass = $_REQUEST['chk_sass'];
            $js = $_REQUEST['chk_js'];
            $vuejs = $_REQUEST['chk_vuejs'];
            $react = $_REQUEST['chk_react'];
            $xampp = $_REQUEST['chk_xampp'];

            $sql = "INSERT INTO tbl_skill(sass, js, vuejs, react, xampp) VALUES(:fsass, :fjs, :fvuejs, :freact, :fxampp)";
            $insert_stmt = $db->prepare($sql);
            $insert_stmt->bindParam(':fsass', $sass);
            $insert_stmt->bindParam(':fjs', $js);
            $insert_stmt->bindParam(':fvuejs', $vuejs);
            $insert_stmt->bindParam(':freact', $react);
            $insert_stmt->bindParam(':fxampp', $xampp);

            if($insert_stmt->execute()) {
                echo "<script> alert('Create done!'); </script>";
            }
        } catch(PDOException $e) {
            $e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkbox</title>

    <!-- CSS -->
    <link rel="stylesheet" href="app.css">
</head>
<body>
    
    <form action="" method="POST" class="container">
        <h1>Checkbox form</h1>

        <div class="skill">
            <!-- items -->
            <div class="skill-items">
                <div class="skill-items-img">
                    <img src="img/SASS.png">
                </div>
                <input type="hidden" name="chk_sass" value="0">
                <input type="checkbox" class="chk_content" name="chk_sass" value="1">
                <p>SASS</p>
            </div>

            <!-- items -->
            <div class="skill-items">
                <div class="skill-items-img">
                    <img src="img/JS.png">
                </div>
                <input type="hidden" name="chk_js" value="0">
                <input type="checkbox" class="chk_content" name="chk_js" value="1">
                <p>JavaScript</p>
            </div>

            <!-- items -->
            <div class="skill-items">
                <div class="skill-items-img">
                    <img src="img/vue.png">
                </div>
                <input type="hidden" name="chk_vuejs" value="0">
                <input type="checkbox" class="chk_content" name="chk_vuejs" value="1">
                <p>VueJS</p>
            </div>

            <!-- items -->
            <div class="skill-items">
                <div class="skill-items-img">
                    <img src="img/react.png">
                </div>
                <input type="hidden" name="chk_react" value="0">
                <input type="checkbox" class="chk_content" name="chk_react" value="1">
                <p>React</p>
            </div>

            <!-- items -->
            <div class="skill-items">
                <div class="skill-items-img">
                    <img src="img/xampp.png">
                </div>
                <input type="hidden" name="chk_xampp" value="0">
                <input type="checkbox" class="chk_content" name="chk_xampp" value="1">
                <p>XAMPP</p>
            </div>

        </div>
        <input type="submit" class="btn-submit" name="btn_submit" value="Submit">

    </form>

</body>
</html>