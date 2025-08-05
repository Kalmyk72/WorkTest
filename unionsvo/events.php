<?php include("path.php") ;
include ("app/database/db.php");
//вывод мероприятий


// странички постов
$page=isset($_GET['page'])?$_GET['page']:1;
$limit = 4;
$offset=$limit * ($page-1);
$total_pages=round(countRow('news')/$limit, 0);

$posts = selectPost('news',$limit,$offset);


?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="assets/css/events.css" rel="stylesheet">
</head>

<body>

    <!-- ========== Header ========== -->
    <?php include("app/include/header.php");?>
    <!-- ========== End Header ========== -->


    <!-- ========== Main ========== -->
    <div class="content_events ">
        <div class="container-fluid">
            
            <div class="post_info row text-center">
                <div class="col mt-5 mt-lg-5">
                    <h1>Подробнее про наши мероприятия и новости, вы можете узнать в группе вк</h1>
                    <a class="event_all" href="https://vk.com/public219771322" target="_blank">
                        <img src="assets/img/vkontakte.svg" alt="">
                    </a>
                </div>
            </div>

            <h2 class="header_block text-center">Последние новости</h2>

            <div class="post col">
                <?php foreach ($posts as $post):?>
                    <div class="post_content row">

                        <div class="post_text col">
                            <h3>
                                <a target="_blank" href="<?=$post['url']?>"><?=substr($post['title'],0,120).'...' ?></a>
                            </h3>
                            <i class="far fa-calendar"> <?=$post['date_public']?></i>
                            <p class="preview-text">
                                <?=substr($post['content'],0,255).'...' ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach;?>
                <!-- Навигация-->
                <?php include("app/include/paginationEvents.php");?>
            </div>
        </div>
    </div>
    


    <!-- ========== Footer ========== -->
    <?php include("app/include/footer.php");?>
    <!-- ========== End Footer ========== -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>