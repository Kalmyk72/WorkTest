<?php
    include("path.php");
    include ("app/database/db.php");

$page=isset($_GET['page'])?$_GET['page']:1;
$limit = 15;
$offset=$limit * ($page-1);

$total_pages = round(countRowMemory('memorial')/$limit, 0);

$memoryData = selectAll('memorial',$limit,$offset);


?>



<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/memory.css">
</head>

<body>
  <!-- ========== Start Header ========== -->
  <?php include("app/include/header.php"); ?>
  <!-- ========== End Header ========== -->


  <div class="content_memory">
    <div class="container-fluid text-center"">

      <div class="post_info row text-center">
          <div class="col mt-5 mt-lg-5 mb-5 mb-lg-5">
              <h1>Список известных погибших или пропавших</h1>
          </div>
      </div>


      <table id="memory_table" class="table table-dark">
        <thead class=" mt-3 mt-lg-3">
          <tr>
            <th scope="col">Фамилия</th>
            <th scope="col">Имя</th>
            <th scope="col">Отчество</th>
            <th scope="col">Год рождения</th>
            <th scope="col">Дата гибели</th>
            <th scope="col">Звание</th>
            <th scope="col">Статус</th>
          </tr>
        </thead>

        <tbody >
        <?php foreach ($memoryData as $row):?>
        <tr>
            <td><?=$row['last_name']  ?></td>
            <td><?=$row['first_name'] ?></td>
            <td><?=$row['middle_name'] ?></td>
            <td><?=$row['birth_date'] ?></td>
            <td><?=$row['death_date'] ?></td>
            <td><?=$row['zvanie'] ?></td>
            <td><?=$row['status'] ?></td>
        </tr>
        <?php endforeach;?>
        </tbody>
      </table>
        <!-- Навигация-->
        <?php include("app/include/paginationMemory.php");?>
    </div>

  </div>
  </div>

  <!-- ========== Footer ========== -->
  <?php include("app/include/footer.php"); ?>
  <!-- ========== End Footer ========== -->


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>