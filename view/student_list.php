<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学生表</title>
</head>
<body>
<h2 align="center">学生表</h2>
<table border="1" cellpadding="5" cellspacing="0" align="center" width="60%">
    <tr bgcolor="#deb887">
    <th>ID</th>
    <th>name</th>
    <th>grade</th>
    </tr>


    <?php foreach($data as $stu): ?>
    <tr align="center">
        <td><?php echo $stu['id']; ?></td>
        <td><?php echo $stu['name']; ?></td>
        <td><?php echo $stu['grade']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<p align="center">共计:<?php echo count($data); ?>条数据</p>
</body>
</html>