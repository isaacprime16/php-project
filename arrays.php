<?php
$cars = array(
    "german" => "BMW,Mercedes",
    "japan"  => "Lexus, Auris, Prado",
    "southkorea" => "KIA",
    "kenya" => array(
        "native" => array(
            "eldoret" => "J50",
            "thika" => "J29"
        ),
        "notNative" => "Mobius"
    )
);

echo $cars["german"];
echo "<br>";
echo $cars["kenya"]["native"]["eldoret"];
?>  