<?php

  function getList($bdd)
  {
    $request = $bdd->query("SELECT*FROM liste");

    $list = $request->fetchall(PDO::FETCH_ASSOC);

    return $list;
  }

  function deleteList() {

  }

  function insertList($bdd, $list) {
    $request = $bdd->prepare("INSERT INTO liste (title) VALUES (?)");
    $request->execute([$list["title"]]);
  }

 ?>
