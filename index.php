<?php

    $sudas1 = rand(1, 100);
    $sudas2 = rand(101, 200);
    $sudas3 = rand(201, 300);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>uzduotis</title>
</head>
<body>
    <div class="body1">
        <h1>Skolos skaiciuokle</h1>
        <h3>Jei paėmei <?php print $sudas1; ?>jievru</h3>
        <h4>Su dviem kabanciais grazinsi <?php print $sudas3; ?></h4>
        <h2>Su vienu kabanciu grazinsi <?php print $sudas2; ?></h2>
    </div>
</body>
</html>