<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    echo "Вітаю, $name!";
} else {
    echo "Форма не відправлена.";
}
?>