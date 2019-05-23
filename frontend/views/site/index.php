<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<section class="promo">
    <div class="promo__wrapper">
        <div class="promo__content">
            <h1 class="promo__title">Больше клиентов для вашего бизнеса</h1>
            <p class="promo__description">Расширяйте онлайн-присутствие. Управляйте отзывами. Получайте больше звонков, переходов на сайт и визитов в магазин</p>
            <div class="promo__actions"><a class="promo__link button_registration_RU_main_banner" href="https://my.{{ env('DOMAIN') }}/registration?hl=ru">Подключите Getpin</a><a class="promo__link promo__link--login button_login_RU_main_banner" href="https://my.{{ env('DOMAIN') }}/auth?hl=ru">Вход  в кабинет</a></div>
        </div>
    </div>
</section>
<section class="companies">
    <div class="companies__content">
        <h2 class="companies__title">Нам доверяют <strong class="companies__accent">400+ </strong>компаний</h2>
        <div class="companies__list" id="companies-carousel">
            <div class="companies__item companies__item--1"></div>
            <div class="companies__item companies__item--2"></div>
            <div class="companies__item companies__item--3"></div>
            <div class="companies__item companies__item--4"></div>
            <div class="companies__item companies__item--5"></div>
            <div class="companies__item companies__item--6"></div>
        </div>
    </div>
</section>
<section class="strengths">
    <h2 class="strengths__title"><strong class="strengths__accent">Больше площадок</strong> — больше клиентов</h2>
    <ul class="strengths__list">
        <li class="strengths__item strengths__item--services"><span class="strengths__text">Информация о вашем бизнесе на<strong class="strengths__accent"> 50+ ресурсах</strong> — там, где вас ищут клиенты</span></li>
        <li class="strengths__item strengths__item--visits"><span class="strengths__text"><strong class="strengths__accent">Уже через день</strong> вы получите звонки, переходы на сайт, визиты в магазин</span></li>
        <li class="strengths__item strengths__item--reviews"><span class="strengths__text">Удобный интерфейс<strong class="strengths__accent"> для работы с отзывами</strong> и повышения лояльности</span></li>
        <li class="strengths__item strengths__item--statistics"><span class="strengths__text">Статистика о звонках и маршрутах для<strong class="strengths__accent"> эффективного локального маркетинга</strong></span></li>
    </ul>
</section>
<section class="presence">
    <div class="presence__content">
        <h2 class="presence__title"> <strong class="presence__accent">Управляем </strong>индексом онлайн-присутствия</h2>
        <p class="presence__description">Индекс онлайн-присутствия компании — универсальный показатель, он объединяет корректность информации о компании, размещение данных на разных ресурсах, качественные показатели обработки отзывов и другие параметры.</p>
        <div class="presence__info">
            <div class="presence__progress" id="progress-container">
                <svg class="presence__arc" width="270" height="134" viewbox="0 0 67 33" preserveaspectratio="xMinYMin meet" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <lineargradient id="gradactive" gradientunits="userSpaceOnUse">
                            <stop offset="0" stop-color="#AAECFC"/>
                            <stop offset="1" stop-color="#29335C"/>
                        </lineargradient>
                    </defs>
                    <path d="M 1.669011382 33.41549431 A 31.83098862 31.83098862 0 0 1 65.33098862 33.41549431" fill="none" stroke="#EDEDED" stroke-width="3.355158261" opacity="0.2" stroke-linecap="round" transform="scale(1,0.94)"/>
                    <path d="M 1.669011382 33.41549431 A 31.83098862 31.83098862 0 0 1 65.33098862 33.41549431" id="activearc" fill="none" stroke="url(#gradactive)" stroke-width="1.118386087" stroke-linecap="round" stroke-dasharray="5 100" transform="scale(1,0.94)"/>
                </svg>
                <div class="presence__counter"><span class="presence__count" id="progress-count">0</span><span class="presence__max">/10</span></div>
                <label class="presence__switch switch">Пуск
                    <input class="switch__input" id="presence-toggle" type="checkbox"><span class="switch__slider" data-checked="ON" data-unchecked="OFF"></span>
                </label>
            </div>
            <div class="presence__tiles" id="presence-tiles">
                <ul class="presence__list">
                    <li class="presence__item"><span class="presence__benefit"> <strong class="presence__accent">76%&nbsp;</strong>тех, кто ищет локальный бизнес с мобильного, посещают его в течение 24 часов. Из них <strong class="presence__accent">28%&nbsp;</strong>— совершают покупку</span></li>
                    <li class="presence__item"><span class="presence__benefit"> <strong class="presence__accent">80%&nbsp;</strong>покупателей ищут информацию о товарах и услугах в сети</span></li>
                    <li class="presence__item"><span class="presence__benefit"> <strong class="presence__accent">58%&nbsp;</strong>покупателей перед покупкой читают  комментарии</span></li>
                    <li class="presence__item"><span class="presence__benefit">Трафик с других онлайн-ресурсов дает&nbsp;<strong class="presence__accent">в 3 раза&nbsp;</strong>больше информации о вашем бизнесе, чем сайт</span></li>
                    <li class="presence__item"><span class="presence__benefit"> <strong class="presence__accent">24%&nbsp;</strong>покупателей оставляют отзывы или комментарии после покупки</span></li>
                </ul>
                <p class="presence__note presence__note--mobile">* данные Acquisio, Uberall, Yext, Getpin</p>
            </div>
        </div>
        <p class="presence__summary">Системное управление индексом онлайн-присутствия улучшает показатели локального маркетинга: видимость в поиске, количество покупателей, их лояльность и пр. От этого зависит уровень доверия потенциального клиента и вероятность продажи.</p>
        <p class="presence__note presence__note--desktop">* данные Acquisio, Uberall, Yext, Getpin</p>
    </div>
</section>
<section class="checker" id="checker" data-trans='{"nodata":"Нет данных"}'>
    <div class="checker__request" id="checker-request">
        <h2 class="checker__title">Проверьте свой индекс онлайн-присутствия</h2>
        <form class="checker__form" id="checker-form" action="/checker/check" method="GET">
            <div class="checker__fields">
                <label class="label checker__label">
                    <p class="label__text">Название компании</p>
                    <input class="input" name="name" maxlength="250" required>
                </label>
                <label class="label checker__label">
                    <p class="label__text">Адрес</p>
                    <input class="input" name="street" maxlength="250" required>
                </label>
                <label class="label checker__label">
                    <p class="label__text">Город (в Украине)</p>
                    <input class="input" name="city" maxlength="250" required>
                </label>
                <label class="label checker__label">
                    <p class="label__text">Номер телефона</p>
                    <input class="input" type="tel" name="phone" pattern="^\+?[0-9\-\(\)\s]{5,20}" maxlength="20" required>
                </label>
            </div>
            <button class="button button_check_index_RU" type="submit">Проверить индекс</button>
        </form>
    </div>
    <div class="checker__result" id="checker-result">
        <h2 class="checker__title">Результаты проверки вашего индекса онлайн-присутвия</h2>
        <ul class="checker__list">
            <li class="checker__item checker__item--title">
                <ul class="checker__cells checker__cells--head">
                    <li class="checker__col checker__col--title">Порталы</li>
                    <li class="checker__col checker__col--name">Название</li>
                    <li class="checker__col checker__col--address">Адрес</li>
                    <li class="checker__col checker__col--phone">Номер телефона</li>
                </ul>
            </li>
            <li class="checker__item checker__item--line"><img class="checker__icon" src srcset alt>
                <ul class="checker__cells">
                    <li class="checker__col checker__col--title">-</li>
                    <li class="checker__col checker__col--name">-</li>
                    <li class="checker__col checker__col--address">-</li>
                    <li class="checker__col checker__col--phone">-</li>
                </ul>
            </li>
        </ul>
        <p class="checker__summary">Подключите Getpin, чтобы понять, на каких еще ресурсах нет информации о вашей компании, найти устаревшие данные и увидеть отзывы клиентов</p><a class="checker__link button_registration_RU_check_index" href="https://my.{{ env('DOMAIN') }}/registration?hl=ru">Подключить Getpin</a>
    </div>
</section>
<section class="statement">
    <div class="statement__content">
        <div class="statement__inner">
            <h2 class="statement__title">Getpin: полный контроль индекса онлайн-присутствия</h2>
            <p class="statement__description">Национальная сеть закусочных или ателье по ремонту одежды — управляйте всей информацией о вашей компании, публикуйте новости и промоакции, улучшайте репутацию своего бренда из единого кабинета</p><a class="statement__link button_registration_RU_full_control" href="https://my.{{ env('DOMAIN') }}/registration?hl=ru">Подключите Getpin</a>
        </div>
    </div>
</section>
<section class="features">
    <div class="features__block features__block--reviews">
        <div class="features__content">
            <div class="features__inner">
                <h3 class="features__title">Управляйте репутацией бизнеса</h3>
                <p class="features__description">Актуальные данные обо всех филиалах и торговых точках на 50+ ресурсах, работа с отзывами из единого кабинета или по API</p>
            </div>
        </div>
    </div>
    <div class="features__block features__block--posts">
        <div class="features__content">
            <div class="features__inner">
                <h3 class="features__title">Публикуйте ваши новости и акции</h3>
                <p class="features__description">Свежая информация о компании на листингах и в каталогах привлекает еще больше клиентов из поисковиков</p>
            </div>
        </div>
    </div>
    <div class="features__block features__block--statistics">
        <div class="features__content">
            <div class="features__inner">
                <h3 class="features__title">Анализируйте взаимодействие клиентов с вашим бизнесом</h3>
                <p class="features__description">Отчет о звонках, построенных маршрутах, комментариях и переходах на сайт поможет оптимизировать бизнес-процессы и найти новые каналы маркетинга</p><a class="features__link button_registration_RU_analyze" href="https://my.{{ env('DOMAIN') }}/registration?hl=ru">Подключите Getpin</a>
            </div>
        </div>
    </div>
</section>
<section class="benefits">
    <h2 class="benefits__title">Все преимущества Getpin</h2>
    <ul class="benefits__list">
        <li class="benefits__item benefits__item--style-1"><span class="benefits__text">Больше площадок в интернете</span></li>
        <li class="benefits__item benefits__item--style-2"><span class="benefits__text">Больше отзывов</span></li>
        <li class="benefits__item benefits__item--style-3"><span class="benefits__text">Больше доверия</span></li>
        <li class="benefits__item benefits__item--style-4"><span class="benefits__text">Больше продаж</span></li>
        <li class="benefits__item benefits__item--style-5"><span class="benefits__text">Улучшенная SEO-оптимизация</span></li>
        <li class="benefits__item benefits__item--style-6"><span class="benefits__text">Дополнительный уровень анализа</span></li>
        <li class="benefits__item benefits__item--style-7"><span class="benefits__text">Экономия ресурсов</span></li>
        <li class="benefits__item benefits__item--style-8"><span class="benefits__text">Автоматическое обновление информации</span></li>
        <li class="benefits__item benefits__item--style-9"><span class="benefits__text">Работа с отзывами</span></li>
        <li class="benefits__item benefits__item--style-10"><span class="benefits__text">Интеграция с CRM-системами</span></li>
        <li class="benefits__item benefits__item--style-11"><span class="benefits__text">Доступ по API</span></li>
        <li class="benefits__item benefits__item--style-12"><span class="benefits__text">Управление репутацией</span></li>
    </ul>
</section>
<section class="reviews">
    <h2 class="reviews__title">Отзывы о Getpin</h2>
    <div class="reviews__list" id="reviews-carousel">
        <div class="reviews__item"><img class="reviews__logo" src="/img/landing/reviews/review-1.png" srcset="/img/landing/reviews/review-1@2x.png 2x, /img/landing/reviews/review-1.png 1x" alt="review">
            <h3 class="reviews__author">Виктория Бусень, эксперт по управлению клиентским опытом и лояльностью клиентов lifecell </h3>
            <p class="reviews__description">Компания lifecell следит за тем, чтобы на Google картах была размещена актуальная, полная и точная информация о магазинах lifecell. Решение Getpin, позволяет систематизировать обращения клиентов, управлять всеми изменениями из одного источника (личного кабинета), что упрощает и значительно сокращает время на обработку и своевременное обновление информации.</p>
        </div>
        <div class="reviews__item"><img class="reviews__logo" src="/img/landing/reviews/review-2.png" srcset="/img/landing/reviews/review-2@2x.png 2x, /img/landing/reviews/review-2.png 1x" alt="review">
            <h3 class="reviews__author">Часовой Ломбард Prestige-Time, Игорь Аникеев (<a class="reviews__link" href="http://prestige-time.com.ua" target="_blank" rel="noopener noreferrer">http://prestige-time.com.ua</a>)</h3>
            <p class="reviews__description">Приятно работать, ребята знают свою работу! Удачи вам в 2019 году, хороших клиентов. Спасибо</p>
        </div>
        <div class="reviews__item"><img class="reviews__logo" src="/img/landing/reviews/review-3.png" srcset="/img/landing/reviews/review-3@2x.png 2x, /img/landing/reviews/review-3.png 1x" alt="review">
            <h3 class="reviews__author">Директор магазина &laquo;Природа&raquo; Сергей (техника и инструмент для сада, <a class="reviews__link" href="http://priro-da.com/" target="_blank" rel="noopener noreferrer">http://priro-da.com/</a>)</h3>
            <p class="reviews__description">Услуга работает- это точно да! У меня обычно июль- август мертвый сезон, и уже есть опыт рекламирования в этот период. А тут были звонки, клиенты интересовались. Вот с 20-го августа у нас зайдет зимний лук, и тогда еще раз воспользуюсь данной услугой</p>
        </div>
        <div class="reviews__item"><img class="reviews__logo" src="/img/landing/reviews/review-4.png" srcset="/img/landing/reviews/review-4@2x.png 2x, /img/landing/reviews/review-4.png 1x" alt="review">
            <h3 class="reviews__author">Ателье Matinee beauty&amp;comfort (<a class="reviews__link" href="http://matinee.com.ua/" target="_blank" rel="noopener noreferrer">http://matinee.com.ua/</a>)</h3>
            <p class="reviews__description">Пользуемся услугой Getpin относительно недолго, за это короткое время можно смело говорить о том, что услуга работает! Благодаря не только размещению информации о нашей компании в соц. сетях и на рекламных площадках, но и написанию уникального контента, наше ателье стало чаще появляться в поисковых запросах Google, количество входящих звонков значительно увеличилось, а база наших клиентов уверенно растет. За незначительную цену Getpin сделает ваш бизнес узнаваемым.</p>
        </div>
    </div>
</section>
<section class="keynote">
    <div class="keynote__content">
        <div class="keynote__inner">
            <h2 class="keynote__title">Контролируйте свой индекс онлайн-присутствия. <strong class="keynote__accent">Увеличивайте продажи</strong></h2><a class="keynote__link button_registration_RU_footer" href="https://my.{{ env('DOMAIN') }}/registration?hl=ru">Подключите Getpin</a>
        </div>
    </div>
</section>
