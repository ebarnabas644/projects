<?php
include ($_SERVER['DOCUMENT_ROOT'] ."/catalog/sites/loginsite/session.php");
?>
<html>
<head>
    <title>Termék katalógus</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<script type="text/javascript">
    function toggleSidebar(){
        document.getElementById("sidebar").classList.toggle('active');
    }
</script>
<body>
<div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <a href='../../sites/adminsite/admin.php'><li>Kezdőlap</li></a>
            <a href="../../sites/logoutsite/logout.php"><li>Kijelentkezés</li></a>
        </ul>
    </div>  </div>
    <div class="row" align="center">
    <div class='container'>
        <h1 class="text-center">Kép feltöltése</h1>
    <hr align="center">
<?php
$target_dir = "../../pictures/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Ez egy kép " . $check["mime"] . "";
        $uploadOk = 1;
    } else {
        echo "Ez nem egy kép. ";
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo " már fel van töltve";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "A kép mérete túl nagy.";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Csak jpg, png, jpeg és gif fájlokat lehet feltölteni.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo " ezért nem sikerült feltölteni a képet.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo " a kép ". basename( $_FILES["fileToUpload"]["name"]). " sikeresen fel lett töltve.";
    } else {
        echo "Hiba volt a kép feltöltése közben.";
    }
}
?>
<form>
<p><a class='btn btn-success' href='../../sites/adminsite/admin.php' role='button'>Vissza a fő oldalra</a>
</p>
</form>
</div>
</div>
</body>
</html>