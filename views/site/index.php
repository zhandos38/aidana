<?php

/* @var $this yii\web\View */

$this->title = 'Главная страница';
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/img/9429411752025990_b30d.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block" style="bottom: 36%;">
                <h5>НАЙДИ СЕБЯ, НАЙДИ СВОЁ БУДУЩЕЕ</h5>
                <p>С помощью данного сервиса можно узнать, какие специальности есть в высших учебных заведениях, а также подобрать ВУЗ по определенной специальности.</p>
                <a class="btn btn-lg btn-success" href="#">Найти профессию</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/9429411752025990_b30d.jpg" alt="Second slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

</div>
