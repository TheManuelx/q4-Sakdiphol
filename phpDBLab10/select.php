<?php
if (isset($_GET['language'])) {
    $language = $_GET['language'];
    if ($language === 'en' || $language === 'th') {
        setcookie('lang', $language, time() + (86400 * 30), "/");
        echo "Language = " . $language;
    }
}
?>