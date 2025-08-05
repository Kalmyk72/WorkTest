<nav aria-label="Page navigation example">
    <ul class="pagination mb-5 mb-lg-5 justify-content-center">
        <li class="page-item">
            <a class="page-link" href="?page=1">Первая</a>
        </li>

        <?php if($page>1):?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo ($page-1); ?>">Назад</a>
            </li>
        <?php endif; ?>

        <?php if($page<$total_pages):?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo ($page+1); ?>">Вперёд</a>
            </li>
        <?php endif; ?>

        <?php if($total_pages>0):?>
            <li class="page-item">
                <a class="page-link" href="?page=<?php echo ($total_pages); ?>">Последняя</a>
            </li>
        <?php endif; ?>


    </ul>
</nav>