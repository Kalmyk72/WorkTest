<?php
include("path.php") ;

?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <!-- ========== Header ========== -->
  <?php include("app/include/header.php");?>
  <!-- ========== End Header ========== -->

  <!-- ========== Main ========== -->
  <div class="content_main">
    <div class="container-fluid text-center">
      <div class="row">
        <div class="col mt-5 mt-lg-5">
          <h1 class=""> Тюменская Областная Общественная Организация: </h1>
          <h1>"Союз Ветеранов Специальной Военной Операции"</h1>
          <h2 class="mt-3 mt-lg-3"> Слава России - Это Сибирь, её люди и её армия!</h2>

          <div class="mt-5 mt-lg-5">
            <button type="button" class="enter btn" data-bs-toggle="modal" data-bs-target="#Enter">Вступить</button>
          </div>




        </div>
      </div>

    </div>
  </div>
  <!-- ========== End Main ========== -->


  <!-- ========== Modal ========== -->
  <div class="mod">
    <div class="modal fade" id="Enter" tabindex="-1" aria-labelledby="enter_Union" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="enter_Union">Вступить в Союз</h1>
            <button id="mod_close" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <!-- ========== Форма отправки заявки на вступление ========== -->
            <form action="app/controllers/enterMaller.php" method="post">

              <div class="mb-3 row">
                <label for="last_name" class="col-4 col-form-label">Фамилия</label>
                <div class="col-8">
                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Иванов">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="name" class="col-4 col-form-label">Имя</label>
                <div class="col-8">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Иван">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="middle_name" class="col-4 col-form-label">Отчество</label>
                <div class="col-8">
                  <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Иванович">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="phone" class="col-4 col-form-label">Номер телефона</label>
                <div class="col-8">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="+7 000 00 00">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="email" class="col-4 col-form-label">Почта</label>
                <div class="col-8">
                  <input type="email" class="form-control" name="email" id="email" placeholder="@email.com">
                </div>
              </div>

              <div class="confirm mb-3 row text-center">
                <div class="col-4">
                  <input type="checkbox" class="custom-control-input" id="deal">
                </div>

                <div class="col-8">
                  <label class="custom-control-label" for="deal">Даю согласие на обработку персональных данных</label>
                </div>
              </div>
              <div class="row text-center mb-3">
                <button id="sent_mod" type="submit" class="btn">Отправить</button>
              </div>

            </form>


          </div>
          <div class="modal-footer">

            <button id="mod_clos" type="button" class="btn" data-bs-dismiss="modal">Закрыть</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ========== End Modal ========== -->


  <!-- ========== Footer ========== -->
  <?php include("app/include/footer.php");?>
  <!-- ========== End Footer ========== -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>