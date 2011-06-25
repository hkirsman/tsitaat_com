<?php
require("constants.php");
require("config.php");

require("init.php");

$vars = array(
  "quote_id" => $_POST["quote_id"],
  "username" => $_POST["username"],
  "user_id" => $_POST["user_id"],
  "comment" => $_POST["comment"],
);
comment::add_comment($vars);

header("Location: ".$_POST["return"]);

?>