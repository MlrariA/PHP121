<html lang='ru'>
<head>
    <title>homework</title>
</head>
<body>
<p>hello world</p>
<?php
if (isset($_POST["login"])) {
    foreach ($_POST["login"] as $key => $value) {
        echo sprintf("<p>%s: %s</p>", $key, $value);
    }
} else {
    echo '
    <form action="index.php" name="login" method="post">
        <label>
            username:
            <input type="text" name="login[username]" >
        </label>
        <label>
            password:
            <input type="password" name="login[password]">
        </label>
        <button type="submit">confirm</button>
    </form>
';
}
?>
</body>
</html>


