<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\helpers\Debug;

?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <ul class="breadcrumbs-list">
          <li>
            <a href="#"><?= Yii::t('layouts/tourist', 'Главная'); ?></a>
          </li>
          <li>
            <a href="#"><?= Yii::t('layouts/tourist', 'Платежи'); ?></a>
          </li>
          <li>
            <span><?= Yii::t('layouts/tourist', 'Банки и Страхование'); ?></span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- main section -->
<main class="insurance-main-section">

  <!-- title section -->
  <section class="insurance-title tourist-title">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-lg-6 pr-lg-0">
          <h1><?= Yii::t('layouts/tourist', 'Туристическая страховка'); ?></h1>
          <p><?= Yii::t('layouts/tourist', 'Каждый год толпы украинцев отправляются путешествовать по миру, чтобы  посмотреть на местные достопримечательности, узнать обычаи жителей других стран или понежиться на берегу моря. Иногда, такие поездки могут обернуться не только массой положительных эмоций, но и ситуациями, где есть угроза жизни и здоровью людей. Чтобы избежать дополнительных финансовых издержек, стоит оформить туристическую страховку онлайн в Украине.'); ?></p>
          <a href="#" class="btn btn-insurance"><?= Yii::t('layouts/tourist', 'Оформить страховку'); ?></a>
        </div>
      </div>
    </div>
  </section><!-- end title section -->

  <!-- about insurance section -->
  <section class="insurance-about insurance-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2><?= Yii::t('layouts/tourist', 'Зачем делать туристическую страховку?'); ?></h2>
          <p><?= Yii::t('layouts/tourist', 'Если вы хотите поехать в Чехию, Польшу или любую другую страну, вам потребуется страховка. С одной стороны, это повышает издержки. В то же время, подобный шаг является полностью оправданным. Бывалые путешественники постоянно отмечают, что полис – это один из важнейших элементов любых заграничных поездок.<br> Страховка нужна для того, чтобы получить визу в ряд стран. Без нее вы просто не сможете пересечь границу Украины. В то же время, некоторые государства позволяют туристам посещать свою территорию и без полиса. Но в таких случаях экономить крайне нежелательно. Даже если вы отправляетесь в Европу, где все кажется таким безопасным, есть риски попасть в ДТП, отравиться непривычной едой или попросту споткнуться на улице. Что уж говорить об экзотических странах, где множество различных насекомых, ядовитых растений и опасных водных жителей.<br> Страховка позволит покрыть издержки, которые будут необходимы для экстренной и неотложной медицинской помощи,  диагностических процедур, покупки медикаментов, а также лечения различных заболеваний и травм. Стоит отметить, что во многих зарубежных странах цены на медикаменты и услуги врачей для иностранцев достигают просто колоссальных сумм, так что без полиса лечение может оказаться чрезмерно дорогим.'); ?></p>
        </div>
      </div>
    </div>
  </section><!-- end about insurance section -->

  <!-- insurance types section -->
  <section class="insurance-types tourist-types">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 col-sm-offset-4 col-md-offset-5">
          <h2><?= Yii::t('layouts/tourist', 'Какие страховки бывают?'); ?></h2>
        </div>
        <div class="col-sm-8 col-md-7 col-sm-offset-4 col-md-offset-5">
          <h3><?= Yii::t('layouts/tourist', 'Онлайн-полис'); ?></h3>
          <p><?= Yii::t('layouts/tourist', 'Сейчас некоторые сервисы предлагают возможность купить онлайн-страховку. В этом случае оформить полис можно через компьютер или планшет. Не имеет значение, в каком городе вы живете – Киеве, Харькове или любом другом, – электронный документ придет на почту спустя несколько секунд после оплаты. Его даже не нужно распечатывать – достаточно лишь скачать на свой смартфон или планшет.'); ?></p>
        </div>
        <div class="col-sm-12 col-md-7 col-sm-offset-0 col-md-offset-5">
          <h3><?= Yii::t('layouts/tourist', 'Обычная (бумажная) страховка'); ?></h3>
          <p><?= Yii::t('layouts/tourist', 'Вам придется посетить отделение страховой компании (СК), где менеджер выдаст необходимый полис в бумажном варианте. Правда, в этом случае можно быть уверенным в том, что страховой агент будет пытаться навязать вам не самые выгодные условия сделки, да и времени на такую процедуру уйдет немало.'); ?></p>
        </div>          
      </div>
    </div>
  </section><!-- end insurance types section -->

  <!-- insurance advantages section -->
  <section class="insurance-advantages">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2><?= Yii::t('layouts/tourist', 'Какие преимущества туристической страховки онлайн?'); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="advantages-card text-center">
            <img src="/v4/frontend/web/source/default/img/insurance/advantage-clock.png" alt="Icon">
            <h3><?= Yii::t('layouts/tourist', 'Экономия времени'); ?></h3>
            <p><?= Yii::t('layouts/tourist', 'Чтобы посетить офис страховой компании и оформить бумажный полис может потребоваться несколько часов. В случае с электронным вариантом Вы пройдете всю процедуру в несколько минут.'); ?></p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="advantages-card text-center">
            <img src="/v4/frontend/web/source/default/img/insurance/advantage-sale.png" alt="Icon">
            <h3><?= Yii::t('layouts/tourist', 'Доступная стоимость'); ?></h3>
            <p><?= Yii::t('layouts/tourist', 'В большинстве случаев страховки, оформленные онлайн, обходятся дешевле до 10-20 процентов.'); ?></p>
          </div>
        </div>
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">
          <div class="advantages-card text-center">
            <img src="/v4/frontend/web/source/default/img/insurance/advantage-simplicity.png" alt="Icon">
            <h3><?= Yii::t('layouts/tourist', 'Простота процедуры'); ?></h3>
            <p><?= Yii::t('layouts/tourist', 'Всего несколько минут, и документ уже будет на вашей электронной почте; Полис всегда будет под рукой в вашем смартфоне или планшете'); ?></p>
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
          <h2><?= Yii::t('layouts/tourist', 'Как оформить страховку от «Арсенал-Страхование» и iPay.ua онлайн?'); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-7">
          <p><?= Yii::t('layouts/tourist', 'Для оформления туристической страховки сейчас вам достаточно посетить сайт iPay.ua, либо кликнуть на кнопку “Оформить страховку” Все, что нужно ввести, это:'); ?></p>
          <ul class="insurance-list">
            <li><?= Yii::t('layouts/tourist', 'Тип поездки (разовая или мультивиза);'); ?></li>
            <li><?= Yii::t('layouts/tourist', 'Дата начала и окончания поездки, необходимый период (от 30 дней);'); ?></li>
            <li><?= Yii::t('layouts/tourist', 'Страну;'); ?></li>
            <li><?= Yii::t('layouts/tourist', 'Особенности программы (они предвидят разные страховые риски);'); ?></li>
            <li><?= Yii::t('layouts/tourist', 'Страховая сумма;'); ?></li>
            <li><?= Yii::t('layouts/tourist', 'Количество туристов.'); ?></li>
          </ul>
          <p><?= Yii::t('layouts/tourist', 'Онлайн-калькулятор рассчитает стоимость страховки, после чего останется лишь заключить договор и все оплатить. Спустя небольшой промежуток времени на вашу электронную почту придет письмо с полисом.'); ?></p>
        </div>
        <div class="col-sm-12 col-md-5 insurance-get-img">
          <img src="/v4/frontend/web/source/default/img/insurance/tourist-get.jpg" alt="Image" class="img-responsive">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 get-btn">
          <a href="#" class="btn btn-insurance"><?= Yii::t('layouts/tourist', 'Оформить страховку'); ?></a>
        </div>
      </div>
    </div>
  </section><!-- end insurance get online section -->

  <!-- insurance cost section -->
  <section class="insurance-cost tourist-cost">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-5 col-sm-offset-4 col-md-offset-7">
          <h2><?= Yii::t('layouts/tourist', 'От чего зависит стоимость страховки?'); ?></h2>
        </div>
        <div class="col-sm-8 col-md-5 col-sm-offset-4 col-md-offset-7">
          <ul class="insurance-list">
            <li><?= Yii::t('layouts/tourist', 'Страна, в которую вы направляетесь;'); ?></li>
            <li><?= Yii::t('layouts/tourist', 'Период действия полиса;'); ?></li>
            <li><?= Yii::t('layouts/tourist', 'Тип путешествия (единоразовое или по мультивизе);'); ?></li>
            <li><?= Yii::t('layouts/tourist', 'Перечень рисков, что их покрывает полис;'); ?></li>
            <li><?= Yii::t('layouts/tourist', 'Максимальный лимит покрытия;'); ?></li>
            <li><?= Yii::t('layouts/tourist', 'Количество и возраст туристов.'); ?></li>
          </ul>
        </div>        
      </div>
    </div>
  </section><!-- end insurance cost section -->

  <!-- about insurance section -->
  <section class="insurance-about insurance-dark insurance-trip text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2><?= Yii::t('layouts/tourist', 'Как воспользоваться страховкой в путешествии?'); ?></h2>
          <p><?= Yii::t('layouts/tourist', 'Самое важное в случае возникновения страхового случая – сразу же связаться с представителем СК в той стране, где вы находитесь. Ни в коем случае нельзя обращаться к врачу – посредник подскажет, где именно можно получить услуги (в ином случае придется все оплачивать самому). Найти контакты представителя СК можно во вкладыше, выданном страховой компанией. Если была оказана экстренная медицинская помощь, то об этом необходимо сразу же проинформировать СК (еще когда вы находитесь за пределами Украины).<br> Независимо от типа непредвиденного события, важно всегда иметь под рукой страховку. В случае с онлайн-полисом, оформленным через iPay.ua, это будет максимально удобно, ведь документ находится прямо на вашем смартфоне!'); ?></p>
        </div>
        <a href="#" class="btn btn-insurance"><?= Yii::t('layouts/tourist', 'Оформить страховку'); ?></a>
      </div>
    </div>
  </section><!-- end about insurance section -->

</main><!-- end main section -->