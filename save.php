<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["user_text"] ?? '';

    if (!empty($text)) {
        $file = "saved_text.txt"; 
        file_put_contents($file, $text . PHP_EOL, FILE_APPEND | LOCK_EX);
        echo "تم حفظ النص بنجاح!";
    } else {
        echo "يرجى إدخال نص!";
    }
} else {
    echo "طلب غير صالح!";
}
?>
