<?php

  require "../model/list.php";
  require "../model/connexion.php";

  if (isset($_POST["addList"])) {
    insertList($bdd, $_POST);
  }
  $list = getList($bdd);

  require "../view/indexView.php";
