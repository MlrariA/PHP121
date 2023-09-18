<html lang='ru'>
<head>
</head>
<body>
    <p>hello world</p>
    <?php
//    var_dump($_POST);
    if  (isset($_POST["login"])) {
        foreach ($_POST["login"] as $key => $value){
            echo sprintf("<p>%s: %s</p>", $key, $value);
        }
//        echo '<p>'. $_POST["login"]["username"].'</p>';
    } else {
        echo ' <form action="index.php" name="login" method="post">
      <label>
          username:
          <input type="text" name="login[username]" >
      </label>
        <label>
            password:
            <input type="password" name="login[password]">
        </label>
        <button type="submit"  >confirm </button>
    </form>' ;}
    ?>
</body>
</html>


