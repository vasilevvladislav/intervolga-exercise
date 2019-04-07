<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Интерфейс добавления и просмотра данных</title>
  <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
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
        <tr>
          <th scope="row">1</th>
          <td>07.04.2019 20:29</td>
          <td>Австрия</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>07.04.2019 20:30</td>
          <td>Андорра</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>07.04.2019 20:31</td>
          <td>Бельгия</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>07.04.2019 20:32</td>
          <td>Великобритания</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="row">
    <a href="#" id="show-hide">Добавить страну</a>
  </div>
  <div class="row mt-4">
    <form id="add-form" class="col-6" style="display: none;">
      <div class="form-row">
        <div class="col-9">
          <input type="text" class="form-control" id="countryname" placeholder="Название страны">
        </div>
        <div class="col-3">
          <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script src="/js/script.js"></script>
</body>
</html>
