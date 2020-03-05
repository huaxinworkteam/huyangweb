<?php /*a:1:{s:68:"D:\phpstudy\PHPTutorial\WWW\tp\application\admin\view\home\info.html";i:1570513468;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员信息</title>
</head>
<body>
<div>管理员信息</div>
<div>账号：<?php echo session('admin.username'); ?></div>
<div>昵称：<?php echo session('admin.nickname'); ?></div>
<div>权限：<?php if(session('admin.is_super')==1): ?>超级管理员<?php else: ?>普通管理员<?php endif; ?></div>
<div>创建时间：<?php echo session('admin.create_time'); ?></div>
</body>
</html>