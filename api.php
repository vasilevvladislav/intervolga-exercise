<?php

function getALLCountryes($db){ //Функция выборки уже имеющихся стран
  $sql = "SELECT * FROM country ORDER BY date_entry";
  $stmt = $db->prepare($sql);
  $stmt->execute();

  $result = array();

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $result[$row['id']] = $row;
  };
  return $result;
}

function addCountry($db, $countryname){ //Добавление с использованием подготовленного запроса
  $sql = "INSERT INTO country (countryname) VALUES (:countryname)";
  $stmt = $db->prepare($sql);

  $stmt->bindValue(':countryname',$countryname, PDO::PARAM_STR);

  $stmt->execute();
}

 ?>
