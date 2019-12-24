<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\helpers\Debug;

?>

<?= Yii::t('layouts/homeInsurance', ''); ?>
<img src="/v4/frontend/web/source/default/img/insurance/ms-logo.png" alt="">

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul class="breadcrumbs-list">
          <li>
            <a href="#"><?= Yii::t('layouts/homeInsurance', 'Главная'); ?></a>
          </li>
          <li>
            <a href="#"><?= Yii::t('layouts/homeInsurance', 'Платежи'); ?></a>
          </li>
          <li>
            <span><?= Yii::t('layouts/homeInsurance', 'Банки и Страхование'); ?></span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- main section -->
<main class="insurance-main-section">

  <!-- title section -->
  <section class="insurance-title home-title">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-lg-6 pr-lg-0">
          <h1><?= Yii::t('layouts/homeInsurance', 'Страховка жилья'); ?></h1>
          <p><?= Yii::t('layouts/homeInsurance', 'Мой дом – моя крепость. В то же время, любое жилье подвержено различным непредвиденным ситуациям. Пожары, затопления, стихийные бедствия, действия злоумышленников – все это более чем реальные угрозы, с которыми сталкиваются владельцы недвижимости. Чтобы защитить себя от непредвиденных издержек в случае возникновения таких ЧП, и предназначено страхование жилья в Киеве и Украине.'); ?></p>
          <a href="#" class="btn btn-insurance"><?= Yii::t('layouts/homeInsurance', 'Оформить страховку'); ?></a>
        </div>
      </div>
    </div>
  </section><!-- end title section -->

  <!-- about insurance section -->
  <section class="insurance-about insurance-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2><?= Yii::t('layouts/homeInsurance', 'Зачем делать страховку жилья?'); ?></h2>
          <p><?= Yii::t('layouts/homeInsurance', 'Страхование имущества представляет собой надежный способ финансовой защиты. Благодаря полису любые проблемы будет намного проще пережить. В том числе, с помощью страховки жилья можно провести ремонт или приобрести новое имущество в случае повреждения дома или квартиры. Кроме того, полис – это еще и ваша финансовая независимость. Если возникнут серьезные проблемы с недвижимостью, вам не придется просить помощи у друзей и родственников, или же брать кредит – все покроет страховка.'); ?></p>
          <h4><?= Yii::t('layouts/homeInsurance', 'Подобные полисы покрывают повреждения:'); ?></h4>
          <ul class="insurance-list">
            <li><?= Yii::t('layouts/homeInsurance', 'Опорных конструкций;'); ?></li>
            <li><?= Yii::t('layouts/homeInsurance', 'Коммуникационных систем;'); ?></li>
            <li><?= Yii::t('layouts/homeInsurance', 'Внутренней отделки;'); ?></li>
            <li><?= Yii::t('layouts/homeInsurance', 'Дверных и оконных конструкций;'); ?></li>
            <li><?= Yii::t('layouts/homeInsurance', 'Мебели, бытовой техники;'); ?></li>
            <li><?= Yii::t('layouts/homeInsurance', 'Одежды;'); ?></li>
            <li><?= Yii::t('layouts/homeInsurance', 'Декоративных элементов интерьера и пр.'); ?></li>
          </ul>
          <p><?= Yii::t('layouts/homeInsurance', 'В результате, вам точно не придется начинать жизнь с нуля.'); ?></p>
        </div>
      </div>
    </div>
  </section><!-- end about insurance section -->

  <!-- insurance cost section -->
  <section class="insurance-cost home-cost">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-5 col-sm-offset-4 col-md-offset-7">
          <h2><?= Yii::t('layouts/homeInsurance', 'Что влияет на цену страховки?'); ?></h2>
        </div>
        <div class="col-sm-8 col-md-5 col-sm-offset-4 col-md-offset-7">
          <ul class="insurance-list">
            <li><?= Yii::t('layouts/homeInsurance', 'Тип недвижимости (у частных домов намного больше рисков, так что стоимость полиса тут будет выше);'); ?></li>
            <li><?= Yii::t('layouts/homeInsurance', 'Период действия страховки;'); ?></li>
            <li><?= Yii::t('layouts/homeInsurance', 'Страховая сумма (то есть максимальная сумма, которую возместит страховщик в случае возникновения непредвиденной ситуации);'); ?></li>
            <li><?= Yii::t('layouts/homeInsurance', 'Страховые риски, что покрываются полисом.'); ?></li>
          </ul>
        </div>        
      </div>
    </div>
  </section><!-- end insurance cost section -->

  <!-- insurance advantages section -->
  <section class="insurance-advantages">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2><?= Yii::t('layouts/homeInsurance', ''); ?>Какие преимущества страховки жилья онлайн?</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="advantages-card text-center">
            <img src="img/insurance/advantage-clock.png" alt="Icon">
            <h3><?= Yii::t('layouts/homeInsurance', ''); ?>Экономия времени</h3>
            <p><?= Yii::t('layouts/homeInsurance', ''); ?>Нет нужды никуда идти, вся процедура будет выполнена перед монитором вашего ноутбука или даже через смартфон, полис придет на электронную почту почти мгновенно</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="advantages-card text-center">
            <img src="img/insurance/advantage-sale.png" alt="Icon">
            <h3><?= Yii::t('layouts/homeInsurance', ''); ?>Доступная стоимость</h3>
            <p><?= Yii::t('layouts/homeInsurance', ''); ?>Очень часто оформление страховки жилья через интернет обходится существенно дешевле</p>
          </div>
        </div>
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">
          <div class="advantages-card text-center">
            <img src="img/insurance/advantage-simplicity.png" alt="Icon">
            <h3><?= Yii::t('layouts/homeInsurance', ''); ?>Максимальное удобство</h3>
            <p><?= Yii::t('layouts/homeInsurance', ''); ?>Нет нужды готовить большой пакет документов, достаточно заполнить онлайн-форму. Полис всегда будет храниться на вашем мобильном телефоне или планшете</p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- end insurance advantages section -->

  <!-- insurance get online section -->
  <section class="insurance-get">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2><?= Yii::t('layouts/homeInsurance', ''); ?>Как оформить страховку от «Арсенал-Страхование» и iPay.ua онлайн?</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-7">
          <p><?= Yii::t('layouts/homeInsurance', ''); ?>Сервис iPay.ua – это не только самый популярный в стране ресурс для онлайн-платежей. Кроме того, на сайте можно оформить страховку жилья, совместно с СК «Арсенал-Страхование». Вам нужно лишь посетить соответствующий раздел, либ после чего заполнить небольшую форму, либо нажав на кнопку “Оформить страховку” Онлайн-калькулятор сразу же рассчитает стоимость полиса, так что останется лишь оплатить страховку. После этого вы можете быть уверены в том, что никакие непредвиденные ситуации вам и вашему жилью не страшны!</p>
        </div>
        <div class="col-sm-12 col-md-5 insurance-get-img">
          <img src="img/insurance/home-get.jpg" alt="Image" class="img-responsive">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 get-btn">
          <a href="#" class="btn btn-insurance"><?= Yii::t('layouts/homeInsurance', ''); ?>Оформить страховку</a>
        </div>
      </div>
    </div>
  </section><!-- end insurance get online section -->

</main><!-- end main section -->