<?php
$name = $request->get('name','World');
//$response->setContent(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>
</head>
<body>
    <h1>Hello <?= htmlspecialchars($name, ENT_QUOTES,'UTF-8') ?></h1>
</body>
</html>