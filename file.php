<?php


// تحقق من وجود الملف

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>رفع ملف</title>
</head>
<body>
    <form action="file.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">رفع الملف</button>
    </form>
</body>
</html>