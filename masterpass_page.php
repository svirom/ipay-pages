<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\helpers\Debug;

?> 

<div id="content">

	<section class="top-head">
		<div class="container">
			<div class="row top-head-descr">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h1 class="head-descr"><?= Yii::t('layouts/masterPass', 'Технология Masterpass™ от Mastercard'); ?><span class="small-text">®</span></h1>
					<p><?= Yii::t('layouts/masterPass', 'Платить в Интернете стало предельно просто и безопасно!'); ?></p>
					<img src="/v4/frontend/web/source/default/img/masterPass/ms-logo.png" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="privilege">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 text-center how-it-works-title">
					<h3 ><?= Yii::t('layouts/masterPass', 'Что такое Masterpass'); ?></h3>
				</div>
				<div class="col-md-7 col-sm-6 col-xs-12 text-center">
					<div class="video-wrap">
						<iframe  src="https://www.youtube.com/embed/mOkWlZ4yQRE" frameborder="0" allowfullscreen></iframe>
						<p><?= Yii::t('layouts/masterPass', 'Технология Masterpass: Как это работает?'); ?></p>
					</div>
				</div>
				<div class="col-md-5 col-sm-6 col-xs-12 video-descr">
					<p><?= Yii::t('layouts/masterPass', 'Masterpass - простой, удобный и надежный инструмент для быстрых и безопасных оплат в Интернете.'); ?></p>
					<p><?= Yii::t('layouts/masterPass', 'Masterpass позволяет ввести данные карты всего один раз - во время регистрации, и при дальнейших оплатах водить только логин и пароль.'); ?></p>
					<p><?= Yii::t('layouts/masterPass', 'Не нужно при себе иметь карты для того, чтобы совершать покупки в Интернете.'); ?></p>
				</div>
			</div>
		</div>	
	</section>

	<section class="how-it-works">
		<div class="container">
			<div class="row ">
				<div class="col-md-12 col-sm-12 col-xs-12  text-center how-it-works-title">
					<h3><?= Yii::t('layouts/masterPass', 'Как воспользоваться технологией Masterpass'); ?></h3>
					<p ><?= Yii::t('layouts/masterPass', 'Три шага, и Вы интегрируетесь в глобальную систему платежей Mastercard'); ?></p>
				</div>
				<div class="col-md-4  col-sm-4 col-xs-12">
					<div class="step">
						<div class="col-md-3 col-sm-3 col-xs-4 text-center">
							<p class="bold-step">1.</p>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-8">
							<p class="bold-step-descr"><?= Yii::t('layouts/masterPass', 'Зарегистрируйтесь на iPay.ua'); ?></p>
						</div>
					</div>
					<div class="col-md-9 col-md-offset-3 col-sm-12 col-sm-offset-0 col-xs-8 col-xs-offset-4 step-descr">
						<p><?= Yii::t('layouts/masterPass', 'Пользуйтесь всеми преимуществами е-платежей и е-переводов'); ?>.</p>
					</div>
				</div>

				<div class="col-md-4  col-sm-4 col-xs-12">
					<div class="step">
						<div class="col-md-3 col-sm-3 col-xs-4 text-center">
							<p class="bold-step">2.</p>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-8">
							<p class="bold-step-descr"><?= Yii::t('layouts/masterPass', 'Привяжите свои банковские карты'); ?></p>
						</div>
					</div>
					<div class="col-md-9 col-md-offset-3 col-sm-12 col-sm-offset-0  col-xs-8 col-xs-offset-4 step-descr">
						<p><?= Yii::t('layouts/masterPass', 'Привязка карт к инструменту Masterpass происходит автоматически и мгновенно'); ?>.</p>
					</div>
				</div>

				<div class="col-md-4  col-sm-4 col-xs-12">
					<div class="step">
						<div class="col-md-3 col-sm-3 col-xs-4 text-center">
							<p class="bold-step">3.</p>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-8">
							<p class="bold-step-descr"><?= Yii::t('layouts/masterPass', 'Совершайте платежи в Интернете'); ?></p>
						</div>
					</div>
					<div class="col-md-9 col-md-offset-3 col-sm-12 col-sm-offset-0 col-xs-8 col-xs-offset-4 step-descr">
						<p><?= Yii::t('layouts/masterPass', 'Пользуйтесь деньгами по всему Интернету от iPay до eBay'); ?>.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

   <section class="how-it-works security-text ">
		<div class="container">
			<div class="row ">
				<div class="col-md-7 col-sm-8 col-xs-12">
					<div class="how-it-works-title">
						<h3 class=""><?= Yii::t('layouts/masterPass', 'Данные ваших карт в полной безопасности раз и навсегда!'); ?></h3>
					</div>

					<p><?= Yii::t('layouts/masterPass', 'Подключившись к инструменту Masterpass, введя данные Ваших банковских карт: номер карты и срок действия, Вам больше никогда не придется вводить эти данные в Интернете.'); ?></p>
					<p><?= Yii::t('layouts/masterPass', 'Теперь Вы вводите только login и пароль в Masterpass, и пользуетесь деньгами в один клик. Представляете, как это круто?'); ?></p>

				</div>   
			</div>
		</div>
	</section>

	<section class="how-it-works privilege-text">
		<div class="container">
			<div class="row ">
				<div class="col-md-12 col-sm-12 col-xs-12 text-center">
					<div class="how-it-works-title">
						<h3 class=""><?= Yii::t('layouts/masterPass', 'Ключевые преимущества'); ?></h3>
					</div>    
				</div>

				<div class="col-md-6 col-sm-6 col-xs-6 privilege-text-item">
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="/v4/frontend/web/source/default/img/masterPass/fast.png" alt="">
					</div>
					<div class="col-md-8  col-sm-8 col-xs-12">
						<h4><?= Yii::t('layouts/masterPass', 'Быстро'); ?></h4>
						<p><?= Yii::t('layouts/masterPass', 'Никаких лишних действий: авторизуйтесь и выберите карту'); ?></p>
					</div>
				</div>
				<div class="col-md-6  col-sm-6 col-xs-6 privilege-text-item">
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="/v4/frontend/web/source/default/img/masterPass/fb.png" alt="">
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<h4><?= Yii::t('layouts/masterPass', 'Просто'); ?></h4>
						<p><?= Yii::t('layouts/masterPass', 'Оплата в 1 клик. Без ввода данных карты.'); ?></p>
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-6 col-sm-6 col-xs-6 privilege-text-item">
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="/v4/frontend/web/source/default/img/masterPass/comf.png" alt="">
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<h4><?= Yii::t('layouts/masterPass', 'Удобно'); ?></h4>
						<p><?= Yii::t('layouts/masterPass', 'Е-платежи в Интернет по всему миру в один клик.'); ?></p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 privilege-text-item">
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<img src="/v4/frontend/web/source/default/img/masterPass/prof.png" alt="">
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<h4><?= Yii::t('layouts/masterPass', 'Выгодно'); ?></h4>
						<p><?= Yii::t('layouts/masterPass', 'Вы бережете нервы, деньги, время и усилия.'); ?></p>
					</div>
				</div>  

			</div>
		</div>
	</section>

	
	<section class="how-it-works signup">
		<div class="container">
			<div class="row ">
				<div class="col-md-12 col-sm-12 col-xs-12  text-center how-it-works-title">
					<h3><?= Yii::t('layouts/masterPass', 'Зарегистрируйтесь на iPay.ua сейчас!'); ?></h3>
					<h5 ><?= Yii::t('layouts/masterPass', 'Воспользуйтесь революционной технологией от Mastercard'); ?></h5>
				</div>
				
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
					<p class="text-center"><?= Yii::t('layouts/masterPass', 'Зарегистрировавшись на iPay.ua, Вы автоматически становитесь участником сервиса Masterpass. Каждая банковская карта, регистрируемая Вами будет автоматически подключаться к кошельку без каких-либо дополнительных действий.'); ?></p>

					<p class="text-center"><?= Yii::t('layouts/masterPass', 'Пользуйтесь услугами iPay и получайте удовольствие от комфорта.'); ?></p>                     
				</div>
			</div>
			<div class="row signup-services hidden-xs">
				<div class="col-md-3 col-sm-3 col-xs-6  text-center">
					<a href="/<?= Yii::$app->params['lang']; ?>/p2p">
						<img src="/v4/frontend/web/source/default/img/masterPass/p2p.png" alt="">
						<p><?= Yii::t('layouts/masterPass', 'Переводы с карты <br>на карту'); ?></p>
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6  text-center">
					<a href="/<?= Yii::$app->params['lang']; ?>/p2r">
						<img src="/v4/frontend/web/source/default/img/masterPass/p2r.png" alt="">
						<p><?= Yii::t('layouts/masterPass', 'Оплата счета <br>по реквизитам'); ?></p>
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6  text-center">
					<a href="/<?= Yii::$app->params['lang']; ?>/bills/charge-mobile">
						<img src="/v4/frontend/web/source/default/img/masterPass/mobile.png" alt="">
						<p><?= Yii::t('layouts/masterPass', 'Оплата мобильной <br>связи'); ?></p>
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6  text-center">
					<a href="/<?= Yii::$app->params['lang']; ?>/bills/internet">
						<img src="/v4/frontend/web/source/default/img/masterPass/internet.png" alt="">
						<p><?= Yii::t('layouts/masterPass', 'Оплата связи <br>и Интернета'); ?></p>
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12  text-center">
					<a href="/<?= Yii::$app->params['lang']; ?>/bills/utilities">
						<img src="/v4/frontend/web/source/default/img/masterPass/utilities.png" alt="">
						<p><?= Yii::t('layouts/masterPass', 'Оплата коммунальных <br>услуг'); ?></p>
					</a>
				</div>
			</div>

			<div class="row signup-services row-flex visible-xs">
				<div class="col-md-3 col-sm-3 col-xs-6  text-center">
					<a href="/<?= Yii::$app->params['lang']; ?>/p2p">
						<img src="/v4/frontend/web/source/default/img/masterPass/p2p.png" alt="">
						<p><?= Yii::t('layouts/masterPass', 'Переводы с карты <br>на карту'); ?></p>
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6  text-center">
					<a href="/<?= Yii::$app->params['lang']; ?>/p2r">
						<img src="/v4/frontend/web/source/default/img/masterPass/p2r.png" alt="">
						<p><?= Yii::t('layouts/masterPass', 'Оплата счета <br>по реквизитам'); ?></p>
					</a>
				</div>
			</div>
			<div class="row signup-services row-flex visible-xs">
				<div class="col-md-3 col-sm-3 col-xs-6  text-center">
					<a href="/<?= Yii::$app->params['lang']; ?>/bills/charge-mobile">
						<img src="/v4/frontend/web/source/default/img/masterPass/mobile.png" alt="">
						<p><?= Yii::t('layouts/masterPass', 'Оплата мобильной <br>связи'); ?></p>
					</a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6  text-center">
					<a href="/<?= Yii::$app->params['lang']; ?>/bills/internet">
						<img src="/v4/frontend/web/source/default/img/masterPass/internet.png" alt="">
						<p><?= Yii::t('layouts/masterPass', 'Оплата связи <br>и Интернета'); ?></p>
					</a>
				</div>
			</div>
			<div class="row signup-services row-flex visible-xs">
				<div class="col-md-3 col-sm-3 col-xs-12  text-center">
					<a href="/<?= Yii::$app->params['lang']; ?>/bills/utilities">
						<img src="/v4/frontend/web/source/default/img/masterPass/utilities.png" alt="">
						<p><?= Yii::t('layouts/masterPass', 'Оплата коммунальных <br>услуг'); ?></p>
					</a>
				</div>
			</div>

			<div class="row signin-text">
				<div class="col-md-12 col-sm-12 col-xs-12  text-center">
					<a href="/<?= Yii::$app->params['lang']; ?>/user/signup" class="signin-btn"><?= Yii::t('layouts/masterPass', 'Зарегистрироваться'); ?></a>
				</div>
			</div>
			
		</div>
	</section>
	
   

</div>

