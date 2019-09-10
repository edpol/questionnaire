<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/QAPage" class="html__responsive">
<head>
    <title>URI</title>
</head>
<body>
<?php

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
echo $_SERVER['HTTP_HOST'] . "<br />";
echo $_SERVER['REQUEST_URI'] . "<br />";
echo $actual_link . "<br />";
?>
<script>
console.log(request.getServerName());

let path = request.getContextPath();
let basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";

</script>
</body>
</html>
