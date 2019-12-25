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
            <a href="#"><?= Yii::t('layouts/osago', 'Главная'); ?></a>
          </li>
          <li>
            <a href="#"><?= Yii::t('layouts/osago', 'Платежи'); ?></a>
          </li>
          <li>
            <span><?= Yii::t('layouts/osago', 'Банки и Страхование'); ?></span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- main section -->
<main class="insurance-main-section">

  <!-- title section -->
  <section class="insurance-title osago-title">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-lg-6 pr-lg-0">
          <h1><?= Yii::t('layouts/osago', 'Автогражданка (ОСАГО)'); ?></h1>
          <p><?= Yii::t('layouts/osago', 'Езда на автомобиле всегда связана с различными рисками, особенно вероятность столкновения  дорогостоящими машинами. Именно для таких случаев и требуется страховка авто ОСАГО, которая позволит избежать финансовых издержек при возникновении непредвиденных ситуаций.'); ?></p>
          <a href="#" class="btn btn-insurance"><?= Yii::t('layouts/osago', 'Оформить ОСАГО'); ?></a>
        </div>
      </div>
    </div>
  </section><!-- end title section -->

  <!-- about insurance section -->
  <section class="insurance-about insurance-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2><?= Yii::t('layouts/osago', 'Что такое Автогражданка (ОСАГО)?'); ?></h2>
          <p><?= Yii::t('layouts/osago', 'Страховка на машину ОСАГО является формой государственной защиты людей, которые пострадали в результате дорожно-транспортных происшествий. Фактически, она представляет собой обязательное страхование гражданско-правовой ответственности владельцев транспорта. С ее помощью компенсируется ущерб лицам, которые понесли ущерб во время ДТП. ОСАГО покрывает расходы, которые возникнут у виновника аварии.'); ?></p>
          <h4><?= Yii::t('layouts/osago', 'Страховщик оплачивает:'); ?></h4>
          <ul class="insurance-list">
            <li><?= Yii::t('layouts/osago', 'Ремонт пострадавшей машины;'); ?></li>
            <li><?= Yii::t('layouts/osago', 'Лечение водителя и пасажиров;'); ?></li>
            <li><?= Yii::t('layouts/osago', 'Восстановление поврежденного имущества третьих лиц (забор, стена дома и прочая недвижимость).'); ?></li>
          </ul>
          <p><?= Yii::t('layouts/osago', 'Большинство людей полис ОСАГО называют Автогражданкой. Необходимо еще раз подчеркнуть, что такая разновидность страхования является обязательной. Без страховки садиться за руль автомобиля запрещено. Кроме того, с ее помощью можно получить возмещение даже в том случае, если в результате ДТП вы понесли ущерб, а у виновника ОСАГО нет. Действует страховка в течение периода от 15 дней до 1 года.'); ?></p>
        </div>
      </div>
    </div>
  </section><!-- end about insurance section -->

  <!-- insurance types section -->
  <section class="insurance-types osago-types">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 col-sm-offset-4 col-md-offset-5">
          <h2><?= Yii::t('layouts/osago', 'Какие автогражданки бывают?'); ?></h2>
        </div>
        <div class="col-sm-8 col-md-7 col-sm-offset-4 col-md-offset-5">
          <h3><?= Yii::t('layouts/osago', 'Онлайн-полис'); ?></h3>
          <p><?= Yii::t('layouts/osago', 'Страховка авто онлайн – это наиболее оптимальный способ защитить себя от серьезных материальных издержек при возникновении дорожно-транспортного происшествия. Документ имеет точно такую же юридическую силу, как и обычная страховка. После оплаты всей стоимости полис вышлют вам на e-mail в формате PDF. Он будет зафиксирован в базе МТСБУ и проверяется полицией. Проверить действительность полиса можно по номерному знаку авто или номеру страховки на сайте МТСБУ.'); ?></p>
        </div>
        <div class="col-sm-12 col-md-7 col-sm-offset-0 col-md-offset-5">
          <h3><?= Yii::t('layouts/osago', 'Обычная (бумажная) страховка'); ?></h3>
          <p><?= Yii::t('layouts/osago', 'Это традиционный вариант, когда вы посещаете офис. Его преимущество состоит в том, что сотрудник страховой компании сможет максимально подробно рассказать об особенностях полиса. В то же время, менеджеры заинтересованы в том, чтобы продать вам товар с наценкой, предложить дополнительные услуги. Кроме того, сама процедура может отнять достаточно много времени (особенно, если поблизости нет подходящего офиса).'); ?></p>
        </div>          
      </div>
    </div>
  </section><!-- end insurance types section -->

  <!-- insurance advantages section -->
  <section class="insurance-advantages">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2><?= Yii::t('layouts/osago', 'Преимущества онлайн полиса перед обычным'); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="advantages-card text-center">
            <img src="/v4/frontend/web/source/default/img/insurance/advantage-clock.png" alt="Icon">
            <h3><?= Yii::t('layouts/osago', 'Экономия времени'); ?></h3>
            <p><?= Yii::t('layouts/osago', 'Вам не нужно посещать отделение подходящей страховой компании,  ждать, пока подготовят полис. Вся процедура занимает несколько минут, документ в формате PDF отправят на почту сразу же после оплаты'); ?></p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="advantages-card text-center">
            <img src="/v4/frontend/web/source/default/img/insurance/advantage-sale.png" alt="Icon">
            <h3><?= Yii::t('layouts/osago', 'Доступная стоимость'); ?></h3>
            <p><?= Yii::t('layouts/osago', 'С помощью онлайн-ресурсов вы не только не будете оплачивать стоимость доставки, но еще и экономите на самой цене полиса до 10%'); ?></p>
          </div>
        </div>
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">
          <div class="advantages-card text-center">
            <img src="/v4/frontend/web/source/default/img/insurance/advantage-shield.png" alt="Icon">
            <h3><?= Yii::t('layouts/osago', 'Гарантия подлинности'); ?></h3>
            <p><?= Yii::t('layouts/osago', 'Подделать электронную страховку невозможно. Кроме того, потерять такой полис невозможно – он всегда будет на вашем компьютере, планшете или телефоне'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- end insurance advantages section -->

  <!-- about insurance section -->
  <section class="insurance-about insurance-dark text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2><?= Yii::t('layouts/osago', 'Онлайн полис от Арсенал страхование и iPay.ua'); ?></h2>
          <p><?= Yii::t('layouts/osago', 'Совсем недавно ресурс для онлайн-транзакций iPay.ua, а также СК «Арсенал-Страхование» запустили услугу покупки ОСАГО через интернет. Главное преимущество такого предложения – это максимальная оперативность получения полиса. Вы получите необходимый документ сразу же после оплаты. При этом для владельца автомобиля нет нужды готовить никакие бумаги. Электронное страхование возможно для владельцев любых транспортных средств, включая мотобайки, легковые и грузовые автомобили, автобусы, прицепы. Есть разные страховые продукты для машин с любым объемом двивжка. iPay.ua – это первый в нашей стране онлайн-ресурс, позволяющий оформить ОСАГО и рассчитать страховку онлайн, сидя перед монитором компьютера или экрана смартфона!'); ?></p>
        </div>
      </div>
    </div>
  </section><!-- end about insurance section -->

  <!-- insurance get online section -->
  <section class="insurance-get">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2><?= Yii::t('layouts/osago', 'Как оформить осаго онлайн?'); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-7">
          <p><?= Yii::t('layouts/osago', 'Главным преимуществом онлайн-страхования является тот факт, что процедура требует от владельца автотранспорта минимум сил и времени. Для оформления полиса владельцу не нужно готовить никаких бумажных документов. Достаточно лишь посетить сайт iPay.ua, выбрать категорию Страхование-ОСАГО, после чего ввести следующую информацию:'); ?></p>
          <ul class="insurance-list">
            <li><?= Yii::t('layouts/osago', 'Тип транспортного средства;'); ?></li>
            <li><?= Yii::t('layouts/osago', 'Объем мотора;'); ?></li>
            <li><?= Yii::t('layouts/osago', 'Наличие льготной категории;'); ?></li>
            <li><?= Yii::t('layouts/osago', 'Место регистрации авто;'); ?></li>
            <li><?= Yii::t('layouts/osago', 'Размер франшизы (размер средств, покрывающихся за счет владельца автомобиля);'); ?></li>
            <li><?= Yii::t('layouts/osago', 'Начало и период действия полиса.'); ?></li>
          </ul>
          <p><?= Yii::t('layouts/osago', 'После этого онлайн-калькулятор рассчитает стоимость услуги, а вам останется лишь ввести сведения о себе и авто, после чего оплатить полис. Спустя пару минут на ваш e-mail придет письмо с электронным документом, который можно использовать в случае возникновения непредвиденных ситуаций.'); ?></p>
        </div>
        <div class="col-sm-12 col-md-5 insurance-get-img">
          <img src="/v4/frontend/web/source/default/img/insurance/osago-get.jpg" alt="Image" class="img-responsive">
        </div>
      </div>
    </div>
  </section><!-- end insurance get online section -->

  <!-- insurance documents section -->
  <section class="insurance-documents">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-8 col-lg-offset-2 text-center">
          <h2><?= Yii::t('layouts/osago', 'Какие документы нужны для оформления полиса'); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3 documents-card-wrapper">
          <div class="documents-card text-center">
            <img src="/v4/frontend/web/source/default/img/insurance/osago-doc1.png" alt="Image">
            <p><?= Yii::t('layouts/osago', 'Свидетельство о регистрации ТС (техпаспорт)'); ?></p>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 documents-card-wrapper">
          <div class="documents-card text-center">
            <img src="/v4/frontend/web/source/default/img/insurance/osago-doc2.png" alt="Image">
            <p><?= Yii::t('layouts/osago', 'Водительское удостоверение'); ?></p>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 documents-card-wrapper">
          <div class="documents-card text-center">
            <img src="/v4/frontend/web/source/default/img/insurance/osago-doc3.png" alt="Image">
            <p><?= Yii::t('layouts/osago', 'Паспорт и ИНН (Идентификационный код)'); ?></p>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 documents-card-wrapper">
          <div class="documents-card text-center">
            <img src="/v4/frontend/web/source/default/img/insurance/osago-doc4.png" alt="Image">
            <p><?= Yii::t('layouts/osago', 'Для льготников информация подтверждающая статус'); ?></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 text-center documents-btn">
          <a href="#" class="btn btn-insurance"><?= Yii::t('layouts/osago', 'Оформить ОСАГО'); ?></a>
        </div>
      </div>
    </div>
  </section><!-- end insurance documents section -->

  <!-- insurance cost section -->
  <section class="insurance-cost osago-cost">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-5 col-sm-offset-4 col-md-offset-7">
          <h2><?= Yii::t('layouts/osago', 'От чего зависит стоимость страховки?'); ?></h2>
        </div>
        <div class="col-sm-8 col-md-5 col-sm-offset-4 col-md-offset-7">
          <ul class="insurance-list">
            <li><?= Yii::t('layouts/osago', 'Место, где зарегистрирован автомобиль;'); ?></li>
            <li><?= Yii::t('layouts/osago', 'Мощность силового агрегата авто (объем мотора);'); ?></li>
            <li><?= Yii::t('layouts/osago', 'Водительский стаж;'); ?></li>
            <li><?= Yii::t('layouts/osago', 'Период действия страховки;'); ?></li>
            <li><?= Yii::t('layouts/osago', 'Размер франшизы (чем меньше, тем больше будет конечная стоимость);'); ?></li>
            <li><?= Yii::t('layouts/osago', 'Пенсионерам, участникам войны и чернобыльцам предоставляется 50-процентная скидка.'); ?></li>
          </ul>
        </div>        
      </div>
    </div>
  </section><!-- end insurance cost section -->

  <!-- insurance accident section -->
  <section class="insurance-about insurance-dark insurance-accident">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2><?= Yii::t('layouts/osago', 'Что делать при ДТП?'); ?></h2>
          <p><?= Yii::t('layouts/osago', 'В случае возникновения страхового случая (ДТП), необходимо, прежде всего, действовать в соответствии с правилами дорожного движения. Если нет пострадавших, нужно сразу же позвонить оператору страховой компании – он будет координировать ваши действия. Также следует вызвать сотрудников Нацполиции или оформить событие через Европротокол. Подать заявление о возмещении ущерба в СК необходимо в течение трех рабочих дней после ДТП.'); ?></p>
          <div class="row">
            <div class="col-sm-12 col-md-8">
              <h4><?= Yii::t('layouts/osago', 'Кроме того, стоит придерживаться и ряда общих рекомендаций:'); ?></h4>
              <ul class="insurance-list">
                <li><?= Yii::t('layouts/osago', 'Запишите контактные данные всех участников страхового случая;'); ?></li>
                <li><?= Yii::t('layouts/osago', 'Примите необходимые меры с целью снижения убытков;'); ?></li>
                <li><?= Yii::t('layouts/osago', 'Сделайте фото- или видеосъемку места аварии;'); ?></li>
                <li><?= Yii::t('layouts/osago', 'Не занимайтесь ремонтом авто до того, как его осмотрит представитель СК.'); ?></li>
              </ul>
            </div>
            <div class="col-sm-5 col-md-4">
              <img src="/v4/frontend/web/source/default/img/insurance/osago-accident.png" alt="Image" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- end insurance accident section -->

  <!-- insurance idemnification section -->
  <section class="insurance-idemnification">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2><?= Yii::t('layouts/osago', 'Как возмещают ущерб?'); ?></h2>
          <p><?= Yii::t('layouts/osago', 'СК должна возместить ущерб, который был нанесен потерпевшему лицу в результате ДТП. При этом потерпевшим считается не только водитель, но и все пассажиры. Также возмещается ущерб, нанесенный имуществу потерпевших (прежде всего, речь идет о транспортном средстве). Максимальный размер страховой суммы составляет 100 тыс. грн. за ущерб здоровью и 50 тыс. грн. за поврежденное имущество на каждого потерпевшего в результате ДТП. Страховщик должен выплатить сумму в период от 15 до 90 дней после подачи документов. В случае просрочки может насчитываться пеня.'); ?></p>
        </div>
      </div>
    </div>
  </section><!-- end insurance idemnification section -->

  <!-- electronic policy section -->
  <section class="insurance-electronic">
    <div class="container">
      <div class="row">
        <div class="col-md-6 electronic-how-to">
          <h2><?= Yii::t('layouts/osago', 'Как пользоваться электронным полисом ОСАГО?'); ?></h2>
          <p><?= Yii::t('layouts/osago', 'Электронный полис представляет собой полностью законный документ, который позволяет рассчитывать на такие же права, как и при наличии обычного бумажного варианта. Полиция не имеет права штрафовать владельцев, которые оформили страховку онлайн. Распечатывать документ не обязательно – достаточно показать его на экране своего планшета или смартфона. Никаких сложностей с его проверкой у правоохранительных органов возникнуть не должно – вся информация о нем есть в базе  МТСБУ.'); ?></p>
          <a href="#" class="btn btn-insurance"><?= Yii::t('layouts/osago', 'Оформить ОСАГО'); ?></a>
        </div>
        <div class="col-md-6 electronic-img">
          <h2><?= Yii::t('layouts/osago', 'Онлайн-полис ОСАГО – лучший выбор для автовладельцев'); ?></h2>
          <p><?= Yii::t('layouts/osago', 'Оформлять страховку гражданской ответственности нужно всем автовладельцам в обязательном порядке. Но сейчас нет нужды идти в отделение СК, лучше выполнить все онлайн. Это быстрее, удобнее и дешевле. При этом юридическая сила у такого полиса точно такая, как и у бумажной версии. Оформить ОСАГО через интернет вы можете на сайте iPay.ua.'); ?></p>
        </div>
      </div>
    </div>
  </section>

</main><!-- end main section -->

 