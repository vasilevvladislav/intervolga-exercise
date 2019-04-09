<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Интерфейс добавления и просмотра данных</title>
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <!-- Подключение к БД + выборка уже имеющихся стран-->
<?php
  include 'db.php';
  include 'api.php';
  $coutryes = getALLCountryes($db)
?>
<div class="container">
  <div class="row">
    <table class="table table-striped">
      <thead  class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Added</th>
          <th scope="col">Country Name</th>
        </tr>
      </thead>
      <tbody>
        <!-- Создание таблицы на основе массива имеющихся стран-->
        <?php if (count($coutryes) > 0) {
          foreach ($coutryes as $coutry){ ?>
            <tr>
              <th scope="row"><?php echo $coutry['id']; ?></th>
              <td><?php echo date("d.m.Y H:i:s", strtotime($coutry['date_entry'])); ?></td>
              <td><?php echo htmlspecialchars($coutry['countryname']); ?></td>
            </tr>
        <?php } } ?>
      </tbody>
    </table>
  </div>
  <!-- Для пустой базы-->
  <?php if (count($coutryes) == 0) { ?>
    <div class="row  justify-content-center">
      <p>Здесь пока нет данных.</p>
    </div>
  <?php } ?>
  <!-- Форма для добавления страны в базу-->
  <div class="row">
    <span id="show-hide">Добавить страну &or;</span>
  </div>
  <div class="row mt-4 mt-4">
    <form id="add-form" class="col-6" style="display: none;" method="post" action="">
      <div class="form-row">
        <div class="col-9">
          <input type="text" class="form-control" name="countryname" placeholder="Название страны" required>
        </div>
        <div class="col-3">
          <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
      </div>
    </form>
    <!-- Вызов сохранения и обновление экрана-->
    <?php
        if(isset($_POST['countryname']) && $_POST['countryname'] !='') {
          addCountry($db,$_POST['countryname']);
          echo "<meta http-equiv='refresh' content='0'>";
        }
     ?>
  </div>
</div>
<!-- Разворачивание формы сохранения-->
<script src="/js/script.js"></script>
</body>
</html>
