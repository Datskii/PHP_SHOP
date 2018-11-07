<?php include ROOT_DIR . '/views/layouts/header.php';?>


<section>

    <div class="container">

        <div class="row">


            <h1>Кабинет Пользователя</h1>
            <h3>Привет, <?=$user['name'];?>!</h3>

            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
                <li><a href="/cabinet/history">Список покупок</a></li>
            </ul>
        </div>

    </div>

</section>
<?php include ROOT_DIR . '/views/layouts/footer.php';?>


