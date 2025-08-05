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
    <link rel="stylesheet" href="assets/css/help.css">
</head>

<body>
    <!-- ========== Start Header ========== -->
    <?php include("app/include/header.php");?>
    <!-- ========== End Header ========== -->


    <!-- ========== Start Help ========== -->
    <div class="content_help">
        <div class="container-fluid text-center">
            <h1>Помощь</h1>
            <div class="row mt-5 mt-lg-5 help_img" >
                <div class="col">

                    <img class="IMG" src="assets/img/Socialhelp.svg" alt="">
                    <p>Социальная поддержка</p>


                </div>
                <div class="col">

                    <img class="IMG" src="assets/img/searh.svg" alt="">
                    <p>Поиск безвести пропавших</p>


                </div>
                <div class="col">

                    <img class="IMG" src="assets/img/urhelp.svg" alt="">
                    <p>Юридическая поддержка</p>

                </div>
            </div>

            <div class="mt-5 mt-lg-5">
                <button type="button" class="help btn" data-bs-toggle="modal" data-bs-target="#Help">Оставить
                    заявку</button>
            </div>
        </div>
    </div>
    <!-- ========== End Help ========== -->

    <!-- ========== Start Modal ========== -->
    <div class="mod">
        <div class="modal fade" id="Help" tabindex="-1" aria-labelledby="help_Union" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="help_Union">Заявка на помощь</h1>
                        <button id="mod_clos" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    <!-- ========== Форма заявки на помощь ========== -->
                        <form action="app/controllers/helpMaller.php" method="post">

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
                                <label for="email" class="col-4 col-form-label">Почта</label>
                                <div class="col-8">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="@email.com">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="phone" class="col-4 col-form-label">Номер телефона</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="+7 000 00 00">
                                </div>
                            </div>

                            <div class="choose mb-3 row text-center">
                                <select class="dr" name="subject">
                                    <option disabled selected>Выбор помощи</option>
                                    <option value="1">Юридическая помощь</option>
                                    <option value="2">Поиск пропавшего безвести</option>
                                    <option value="3">Медицинская помощь</option>
                                </select>
                            </div>


                            <div class="mb-3 row">
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

    <!-- ========== Start Footer ========== -->
    <?php include("app/include/footer.php");?>
    <!-- ========== End Footer ========== -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>