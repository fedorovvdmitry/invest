<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta
      property="og:description"
      content="ООО «Сибстекло» – один из крупнейших производителей стеклотары в России"
    />
    <meta property="og:image" content="images/cover.jpeg" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="images/cover.jpeg" />
    <title>Инвесторам</title>
    <!-- ui datepicker -->
    <link rel="stylesheet" href="ui/1.12.1/themes/base/jquery-ui.css" />
    <!-- theme styles -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
    <!-- favicons -->
    <link rel="icon" type="image/x-icon" href="images/favicons/favicon.ico" />
    <link rel="icon" type="image/png" href="images/favicons/favicon.png" />
    <script src="https://smtpjs.com/v3/smtp.js"></script>
  </head>
  <body>
    <header class="es-nav">
      <nav class="es-page__content es-nav__content">
        <!-- <li class="es-nav__item es-nav__item_adaptive es-nav__item_active">
          <a class="es-nav__link">Инвесторам</a>
        </li> -->
        <li class="es-nav__item es-nav__item_adaptive es-nav__item_active">
          <a href="#bonds" class="es-nav__link">Облигации</a>
        </li>
        <!-- <li class="es-nav__item es-nav__item_adaptive">
          <a href="#profitability" class="es-nav__link">Доходность</a>
        </li> -->
        <li class="es-nav__item es-nav__item_adaptive">
          <a href="#basic-information" class="es-nav__link"
            >Основные сведения</a
          >
        </li>
        <!-- <li class="es-nav__item es-nav__item_adaptive">
          <a href="#key-indicators" class="es-nav__link">Ключевые показатели</a>
        </li> -->
        <li class="es-nav__item es-nav__item_adaptive">
          <a href="#how-become-an-investor" class="es-nav__link"
            >Как стать инвестором</a
          >
        </li>
        <li class="es-nav__item es-nav__item_adaptive">
          <a href="#press-centr" class="es-nav__link">Пресс-центр</a>
        </li>
        <li class="es-nav__item es-nav__item_adaptive">
          <a href="#contacts" class="es-nav__link">Контакты</a>
        </li>

        <div class="es-nav__menu">
          <img src="images/menu.png" alt="Меню" id="collapsable-menu-btn" />
          <ul class="es-nav__menu-ul" id="collapsable-menu">
            <!-- <li class="es-nav__item es-nav__item_active">
              <a class="es-nav__link">Инвесторам</a>
            </li> -->
            <li class="es-nav__item es-nav__item_active">
              <a href="#bonds" class="es-nav__link">Облигации</a>
            </li>
            <!-- <li class="es-nav__item">
              <a href="#profitability" class="es-nav__link">Доходность</a>
            </li> -->
            <!-- <li class="es-nav__item">
              <a class="es-nav__link">Ключевые показатели</a>
            </li> -->
            <li class="es-nav__item">
              <a href="#how-become-an-investor" class="es-nav__link"
                >Как стать инвестором</a
              >
            </li>
            <li class="es-nav__item">
              <a href="#press-centr" class="es-nav__link">Пресс-центр</a>
            </li>
            <li class="es-nav__item">
              <a href="#contacts" class="es-nav__link">Контакты</a>
            </li>
          </ul>
        </div>

        <li class="es-nav__item es-nav__item_popup">
          <button id="become-investor-btn" class="es-btn">
            Стать инвестором
          </button>
        </li>
      </nav>
    </header>
    <div class="es-page">
      <section class="es-ivestors-block1">
        <div class="es-page__content es-ivestors-block1__content">
          <div class="es-ivestors-block1__title">ООО «Сибстекло»</div>
          <div class="es-ivestors-block1__text">
            Крупнейший производитель тарного стекла за Уралом. Компания
            специализируется на изготовлении бесцветной и цветной стеклотары,
            всего освоено более 120 видов продукции.
          </div>
          <div class="es-ivestors-block1__text">
            Кредитный рейтинг: ВВ-(RU) с «развивающимся» прогнозом от рейтингового агентства АКРА.
          </div>
          <div
            id="presentation-btn"
            class="document-widget_wrapper"
            data-document_type="prezentaciya"
          >
            <div class="document-widget_item">
              <a
                class="es-btn es-btn_investors-block1__btn"
                href="index.html#"
                target="_blank"
                ><span data-param="ORIGIN"></span
              ></a>
            </div>
          </div>
          <!-- <button id="presentation-btn" class="es-btn es-btn_investors-block1">
            Презентация для инвесторов
          </button> -->
          <div class="es-ivestors-block1__text">
            <a
              href="https://www.e-disclosure.ru/portal/company.aspx?id=37458"
              target="_blank"
              >Адрес раскрытия информации</a
            >
          </div>
        </div>
      </section>
      <section class="es-ivestors-block3" id="bonds">
        <div class="es-page__content es-tabs__content">
          <p class="es-header es-header_blue">Параметры выпуска</p>
          <div class="es-tabs es-tabs_border">
            <ul class="es-page__content es-tabs__menu">
              <li
                class="es-tabs__item es-tabs__item_active"
                data-role="tab/link"
                data-id="first-issue"
              >
                Первый выпуск
              </li>
              <li
                class="es-tabs__item"
                data-role="tab/link"
                data-id="second-issue"
              >
                Второй выпуск
              </li>
              <li
                class="es-tabs__item"
                data-role="tab/link"
                data-id="third-issue"
              >
                Третий выпуск
              </li>
            </ul>
            <div class="es-page__content es-tabs__content">
              <div
                class="es-tabs__pane es-tabs__pane_active"
                data-role="tab/content"
                id="first-issue"
              >
                <div class="es-stats-tile__container">
                  <div class="es-header__subtitle">
                    Наименование выпуска: Сибстекло-БО-ПО2
                    <br />Номер выпуска: №4B02-02-00373-R-001P от 23.09.2020
                    <br />ISIN код: RU000A1026R9 <br /><br />Итоги освоения:
                    Компания пополнила оборотные средства,<br />благодаря чему,
                    в том числе, запустила новую стекловаренную печь №5.
                  </div>
                  <div class="es-stats-tile__container">
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_001.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">125</div>
                      <div class="es-stats-tile__subtitle">млн рублей</div>
                      <div class="es-stats-tile__text">Объём выпуска</div>
                    </div>
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_002.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">
                        12,5<span class="es-stats-tile__value-letter">%</span>
                      </div>
                      <div class="es-stats-tile__subtitle">годовых</div>
                      <div class="es-stats-tile__text">Купонная ставка</div>
                    </div>
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_003.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">1 800</div>
                      <div class="es-stats-tile__subtitle">дней</div>
                      <div class="es-stats-tile__text">Срок обращения</div>
                    </div>
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_004.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">10 000</div>
                      <div class="es-stats-tile__subtitle">рублей</div>
                      <div class="es-stats-tile__text">
                        Номинал одной облигации
                      </div>
                    </div>
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_005.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">30</div>
                      <div class="es-stats-tile__subtitle">дней</div>
                      <div class="es-stats-tile__text">
                        Длительность купонного периода
                      </div>
                    </div>
                    <div class="es-callout es-callout_stocks">
                      <div class="es-callout__white">
                        Амортизация: 5% с 41 по 60 купонный период.
                        <br />
                        Call-опцион: в даты окончания 18, 30, 42 купонного
                        периода <br />по усмотрению эмитента
                      </div>
                      <div class="es-callout__white">
                        <br />«Юниcервис Капитал»<br />
                        ООО «ЮЛКМ»
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="es-tabs__pane"
                data-role="tab/content"
                id="second-issue"
              >
                <div class="es-stats-tile__container">
                  <div class="es-header__subtitle">
                    Наименование выпуска: Сибстекло-БО-ПО3
                    <br />Номер выпуска: №4B02-03-00373-R-001 от 18.10.2022
                    <br />ISIN код: RU000A105C93 <br /><br />Итоги освоения:
                    Половину средств компания направила на увеличение запасов
                    сырья и готовой продукции. Вторую часть эмитент использовал
                    для замещения выбывающего по плану кредитного портфеля.
                  </div>
                  <div class="es-stats-tile__container">
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_001.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">300</div>
                      <div class="es-stats-tile__subtitle">млн рублей</div>
                      <div class="es-stats-tile__text">Объём выпуска</div>
                    </div>
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_002.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">
                        28<span class="es-stats-tile__value-letter">%</span>
                      </div>
                      <div class="es-stats-tile__subtitle">годовых</div>
                      <div class="es-stats-tile__text">
                        Купонная ставка<br />С 26 по 36 к.п.
                      </div>
                    </div>
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_003.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">1 080</div>
                      <div class="es-stats-tile__subtitle">дней</div>
                      <div class="es-stats-tile__text">Срок обращения</div>
                    </div>
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_004.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">1 000</div>
                      <div class="es-stats-tile__subtitle">рублей</div>
                      <div class="es-stats-tile__text">
                        Номинал одной облигации
                      </div>
                    </div>
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_005.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">30</div>
                      <div class="es-stats-tile__subtitle">дней</div>
                      <div class="es-stats-tile__text">
                        Длительность купонного периода
                      </div>
                    </div>
                    <div class="es-callout es-callout_stocks">
                      <div class="es-callout__white">
                        Амортизация: по 50% в даты окночания 35 и 36 к.п.
                        <br />Оферта: Полная безотзывная оферта в дату окончания
                        25 купонного периода. Ранее были успешно реализованы
                        добровольные оферты в 3, 6, 9, 12 купонных
                        периодах и безотзывная в 15 купонном периоде.
                      </div>
                      <div class="es-callout__white">
                        <br />«Юниcервис Капитал»<br />
                        ООО «ЮЛКМ»
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="es-tabs__pane"
                data-role="tab/content"
                id="third-issue"
              >
                <div class="es-stats-tile__container">
                  <div class="es-header__subtitle">
                    Наименование выпуска: Сибстекло-БО-П04
                    <br />Номер выпуска: №4B02-04-00373-R-001P от 13.10.2023
                    <br />ISIN код: RU000A107209 <br /><br />Итоги освоения:
                    Инвестиции были направлены, в том числе, на пополнение
                    оборотного капитала, чтобы осуществить текущий ремонт
                    и обслуживание оборудования для дальнейшего увеличения
                    выпуска продукции. Также с помощью привлеченных средств
                    аккумулировали запасы сырья для бесперебойного снабжения
                    стекольных комплексов и сформировали резервы стеклотары.
                  </div>
                  <div class="es-stats-tile__container">
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_001.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">300</div>
                      <div class="es-stats-tile__subtitle">млн рублей</div>
                      <div class="es-stats-tile__text">Объём выпуска</div>
                    </div>
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_002.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">
                        17<span class="es-stats-tile__value-letter">%</span>
                      </div>
                      <div class="es-stats-tile__subtitle">годовых</div>
                      <div class="es-stats-tile__text">
                        Купонная ставка<br />С 1 по 18 к.п.
                      </div>
                    </div>
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_003.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">1 440</div>
                      <div class="es-stats-tile__subtitle">дней</div>
                      <div class="es-stats-tile__text">Срок обращения</div>
                    </div>
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_004.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">1 000</div>
                      <div class="es-stats-tile__subtitle">рублей</div>
                      <div class="es-stats-tile__text">
                        Номинал одной облигации
                      </div>
                    </div>
                    <div class="es-stats-tile">
                      <img
                        src="images/stocks/ico_005.png"
                        class="es-stats-tile__ico"
                      />
                      <div class="es-stats-tile__value">30</div>
                      <div class="es-stats-tile__subtitle">дней</div>
                      <div class="es-stats-tile__text">
                        Длительность купонного периода
                      </div>
                    </div>
                    <div class="es-callout es-callout_stocks">
                      <div class="es-callout__white">
                        Амортизация: по 50% в даты окончания 47 и 48 к.п.
                        <br />Оферта: Полная безотзывная оферта в дату окончания
                        18 к.п.
                      </div>
                      <div class="es-callout__white">
                        <br />Организатор: ООО «Инвестиционная компания
                        Юнисервис Капитал» <br />Андеррайтер: ООО
                        «Инвестиционная компания Юнисервис Капитал» <br />ПВО:
                        ООО «ЮЛКМ»
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="es-ivestors-block6">
        <div class="es-page__content es-tabs__content">
          <p class="es-header es-header_blue">Корпоративное управление</p>
          <div class="es-corporate-management__text">
            Для осуществления эффективного корпоративного управления компания
            считает приоритетным соблюдение баланса интересов всех
            заинтересованных лиц и прозрачной структуры.
          </div>
          <div class="es-tabs es-tabs_border">
            <ul class="es-page__content es-tabs__menu">
              <li
                class="es-tabs__item es-tabs__item_active"
                data-role="tab/link"
                data-id="first-issue"
              >
                Структура управления
              </li>
              <li
                class="es-tabs__item"
                data-role="tab/link"
                data-id="second-issue"
              >
                Члены совета директоров
              </li>
            </ul>
            <div class="es-page__content es-tabs__content">
              <div
                class="es-tabs__pane es-tabs__pane_active"
                data-role="tab/content"
                id="first-issue"
              >
                <section class="es-management-structure">
                  <div class="es-management-structure__content">
                    <img
                      class="es-management-structure__diagram"
                      src="images/management_structure.png"
                      alt="Структура управления"
                    />
                    <div class="es-management-structure__sections">
                      <!-- Общее собрание участников -->
                      <div class="es-management-structure__section">
                        <h3 class="es-management-structure__title">
                          Общее собрание участников
                        </h3>
                        <p class="es-management-structure__text">
                          Высшим органом управления ООО «Сибстекло» является
                          Общее собрание участников, которое проводится
                          ежегодно. Проводимые помимо годового Общие собрания
                          участников являются внеочередными.
                        </p>
                        <p class="es-management-structure__text">
                          Любой участник лично или через своего представителя
                          имеет право на участие в Общем собрании участников.
                          Собрание является правомочным, если в нем приняли
                          участие участники, обладающие в совокупности более чем
                          половиной голосов.
                        </p>
                        <p class="es-management-structure__text">
                          В компетенцию Общего собрания участников, в частности,
                          входит внесение изменений в Устав Общества,
                          утверждение годовых отчетов и аудитора Общества,
                          распределение прибыли, избрание членов Совета
                          директоров и Ревизионной комиссии (Ревизора), принятие
                          решений о реорганизации или ликвидации Общества,
                          об увеличении или уменьшении его уставного капитала,
                          а также об образовании исполнительного органа
                          Общества.
                        </p>
                      </div>

                      <!-- Совет директоров -->
                      <div class="es-management-structure__section">
                        <h3 class="es-management-structure__title">
                          Совет директоров
                        </h3>
                        <p class="es-management-structure__text">
                          Совет директоров осуществляет общее руководство
                          деятельностью Общества, за исключением решения
                          вопросов, отнесенных к компетенции Общего собрания
                          участников. Члены Совета директоров Общества
                          избираются Общим собранием участников на срок
                          до следующего очередного (годового) Общего собрания
                          участников. Количество членов Совета директоров
                          Общества определяется решением Общего собрания
                          участников, но не может быть менее чем 5 членов.
                        </p>
                        <p class="es-management-structure__text">
                          Совет директоров, в частности, определяет приоритетные
                          направления деятельности Общества, утверждает годовой
                          бюджет и инвестиционные программы, принимает решения
                          о созыве Общих собраний участников, дает рекомендации
                          по распределению прибыли.
                        </p>
                        <p>
                          <strong>Документ:</strong><br />
                          <a
                            href="docs/Положение о Совете директоров_редакция 2022 года.pdf"
                            target="_blank"
                            >Положение о Совете директоров ООО
                            «Сибстекло».pdf</a
                          >
                        </p>
                      </div>

                      <!-- Корпоративный секретарь -->
                      <div class="es-management-structure__section">
                        <h3 class="es-management-structure__title">
                          Корпоративный секретарь
                        </h3>
                        <p class="es-management-structure__text"></p>
                      </div>

                      <!-- Исполнительный орган -->
                      <div class="es-management-structure__section">
                        <h3 class="es-management-structure__title">
                          Исполнительный орган
                        </h3>
                        <p class="es-management-structure__text">
                          Генеральный директор (Единоличный исполнительный
                          орган) осуществляет руководство текущей деятельностью
                          Общества. Организует выполнение решений Общего
                          собрания участников и Совета директоров
                          и подотчетен им. Генеральный директор избирается Общим
                          собранием участников на 5 лет и может переизбираться
                          неограниченное количество раз.
                        </p>
                      </div>

                      <!-- Ревизионная комиссия -->
                      <div class="es-management-structure__section">
                        <h3 class="es-management-structure__title">
                          Ревизионная комиссия
                        </h3>
                        <p class="es-management-structure__text">
                          Ревизионная комиссия — это выборный орган, подотчетный
                          Общему собранию участников ООО «Сибстекло».
                        </p>
                        <p class="es-management-structure__text">
                          В своей деятельности комиссия руководствуется
                          действующим законодательством Российской Федерации,
                          Уставом ООО «Сибстекло», решениями Общего собрания
                          участников, Положением о Ревизионной комиссии ООО
                          «Сибстекло».
                        </p>
                        <p class="es-management-structure__text">
                          Основными задачами Ревизионной комиссии (Ревизора)
                          являются:
                        </p>
                        <p class="es-management-structure__text">
                          • осуществление контроля за формированием достоверной
                          финансовой и бухгалтерской отчетности Общества и иной
                          информации о его финансово-хозяйственной деятельности
                          и имущественном положении;
                        </p>
                        <p class="es-management-structure__text">
                          • осуществление контроля за соответствием
                          законодательству Российской Федерации порядка ведения
                          бухгалтерского учета и представлением Обществом
                          финансовой и бухгалтерской отчетности и информации
                          в соответствующие органы и участникам (Единственному
                          участнику) Общества;
                        </p>
                        <p class="es-management-structure__text">
                          • выработка предложений по повышению эффективности
                          управления активами Общества и иной
                          финансово-хозяйственной деятельности Общества,
                          обеспечение снижения финансовых рисков,
                          совершенствование системы внутреннего контроля.
                        </p>
                        <p>
                          <strong>Документ:</strong><br />
                          <a
                            href="docs/Положение о ревизионной комиссии ООО Сибстекло.pdf"
                            target="_blank"
                            >Положение о Ревизионной комиссии (Ревизоре) ООО
                            «Сибстекло».pdf</a
                          >
                        </p>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div
                class="es-tabs__pane"
                data-role="tab/content"
                id="second-issue"
              >
                <div class="es-page__content es-corporate-management__content">
                  <div class="es-corporate-management__president">
                    <img
                      src="images/bove.jpg"
                      alt="Винченцо Бове"
                      class="es-corporate-management__photo"
                    />
                    <div class="es-corporate-management__details">
                      <p class="es-corporate-management__name">Винченцо Бове</p>
                      <p class="es-corporate-management__position">
                        Председатель Совета директоров<br />ООО «Сибирское
                        стекло»
                      </p>
                      <p class="es-corporate-management__description">
                        Обладает обширными компетенциями и высоким экспертным
                        статусом в стекольной отрасли, а также опытом адаптации
                        производственной специфики к ESG-повестке: работал
                        на руководящих позициях в компаниях Vetri speciali
                        s.p.a., Saint-Gobain VETRI, Ecolvetro, Bormioli Rocco
                        s.p.a. и в других.
                      </p>
                    </div>
                  </div>

                  <div class="es-corporate-management__board">
                    <div class="es-corporate-management__column">
                      <div class="es-corporate-management__member">
                        <p class="es-corporate-management__name">
                          Кузнецов Виталий Валерьевич
                        </p>
                        <p class="es-corporate-management__position">
                          Член Совета директоров <br />ООО «Сибирское стекло»
                        </p>
                        <p class="es-corporate-management__description">
                          Является экспертом по системам управления и проектам
                          развития промышленных предприятий, в том числе,
                          реализации инициатив, связанных с переходом
                          к экономике замкнутого цикла.
                        </p>
                      </div>
                      <div class="es-corporate-management__member">
                        <p class="es-corporate-management__name">
                          Гаськова Татьяна Николаевна
                        </p>
                        <p class="es-corporate-management__position">
                          Член Совета директоров <br />ООО «Сибирское стекло»
                        </p>
                        <p class="es-corporate-management__description">
                          Обладает успешным опытом управления предприятиями
                          в различных сферах экономики, является ведущим
                          экспертом в области экономики и финансов.
                        </p>
                      </div>
                      <div class="es-corporate-management__member">
                        <p class="es-corporate-management__name">
                          Устинова Наталья Викторовна
                        </p>
                        <p class="es-corporate-management__position">
                          Член Совета директоров <br />ООО «Сибирское стекло»
                        </p>
                        <p class="es-corporate-management__description">
                          Обладает экспертными знаниями в области управления
                          корпоративными финансами, ESG-трансформации бизнеса
                          и ответственного инвестирования.
                        </p>
                      </div>
                      <div class="es-corporate-management__member">
                        <p class="es-corporate-management__name">
                          Бабанина Ирина Геннадьевна
                        </p>
                        <p class="es-corporate-management__position">
                          Член Совета директоров <br />ООО «Сибирское стекло»
                        </p>
                        <p class="es-corporate-management__description">
                          Имеет большой опыт управления в сфере экономики
                          и финансов промышленными предприятиями.
                        </p>
                      </div>
                    </div>

                    <div class="es-corporate-management__column">
                      <div class="es-corporate-management__member">
                        <p class="es-corporate-management__name">
                          Таркова Надежда Владимировна
                        </p>
                        <p class="es-corporate-management__position">
                          Член Совета директоров <br />ООО «Сибирское стекло»
                        </p>
                        <p class="es-corporate-management__description">
                          Обладает обширным опыт коммерческой деятельности,
                          успешной реализации проектов развития промышленных
                          предприятий.
                        </p>
                      </div>
                      <div class="es-corporate-management__member">
                        <p class="es-corporate-management__name">
                          Сквородин Юрий Петрович
                        </p>
                        <p class="es-corporate-management__position">
                          Член Совета директоров <br />ООО «Сибирское стекло»
                        </p>
                        <p class="es-corporate-management__description">
                          Имеет опыт работы в правоохранительных органах,
                          является экспертом в области экономической
                          безопасности и защиты коммерческой тайны.
                        </p>
                      </div>
                      <div class="es-corporate-management__member">
                        <p class="es-corporate-management__name">
                          Маслова Яна Игоревна
                        </p>
                        <p class="es-corporate-management__position">
                          Член Совета директоров <br />ООО «Сибирское стекло»
                        </p>
                        <p class="es-corporate-management__description">
                          Является экспертом в вопросах внутренней корпоративной
                          социальной ответственности, повышения мотивации
                          и эффективности персонала, совершенствования кадровой
                          политики.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="es-ivestors-block2" id="profitability">
        <div class="es-page__content es-calc__content">
          <p class="es-header es-header_blue">Инвестиционный калькулятор</p>
          <div class="es-calc__container">
            <div>
              <div class="es-calc__text">
                Вы можете рассчитать прибыль от своих инвестиций, указав
                планируемую сумму и дату покупки в нашем калькуляторе.
              </div>
            </div>
            <div id="calc-inputs">
              <div class="es-input-block">
                <label class="es-input-block__title">Номер выпуска</label>
                <!-- <input
                  class="es-input es-input_blue"
                  tabindex="1"
                  readonly
                  value="4B02-02-00373-R-001P от 23.09.2020 ISIN код:RU000A1026R9"
                /> -->
                <select class="es-input es-input_blue" id="issue_select">
                  <option value="0">
                    4B02-02-00373-R-001P от 23.09.2020 ISIN код:RU000A1026R9
                  </option>
                  <option value="1">
                    4B02-03-00373-R-001 от 18.10.2022 ISIN код: RU000A105C93
                  </option>
                  <option value="2">
                    4B02-04-00373-R-001P от 13.10.2023 ISIN код: RU000A107209
                  </option>
                </select>
              </div>
              <div class="es-input-block">
                <label class="es-input-block__title">Количество бумаг</label>
                <input
                  class="es-input es-input_blue"
                  data-role="price/input"
                  id="calc-size"
                  tabindex="2"
                />
              </div>
              <div class="es-calc__double-inputs">
                <div class="es-input-block es-input-block_short">
                  <label class="es-input-block__title">Дата покупки</label>
                  <input
                    class="es-input es-input_blue"
                    id="calc-pdate"
                    data-role="date/input"
                    tabindex="3"
                  />
                </div>
                <div class="es-input-block es-input-block_short">
                  <label class="es-input-block__title">Дата продажи</label>
                  <input
                    class="es-input es-input_blue"
                    id="calc-sdate"
                    data-role="date/input"
                    tabindex="4"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="es-calc__btns">
            <button
              class="es-btn es-btn_short"
              id="calc-light-btn"
              tabindex="5"
            >
              Рассчитать
            </button>
            <a
              class="es-btn es-btn_short es-btn_fade"
              style="visibility: hidden"
              >Полная версия</a
            >
          </div>
          <div class="es-calc__result">
            <div class="es-calc__subtitle">Основные показатели</div>
            <div class="es-calc__result-inputs">
              <div class="es-input-block es-input-block_short">
                <label class="es-input-block__title">Доход, руб.</label>
                <input id="calc-profit" class="es-input" readonly />
              </div>
              <div class="es-input-block es-input-block_short">
                <label class="es-input-block__title">Доходность, % ном.</label>
                <input id="calc-yield" class="es-input" readonly />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="es-ivestors-block4" id="basic-information">
        <div class="es-tabs es-tabs_border">
          <div class="es-tabs__menu-container">
            <ul class="es-page__content es-tabs__menu">
              <li
                class="es-tabs__item es-tabs__item_active"
                data-role="tab/link"
                data-id="tab1"
              >
                Общие сведения
              </li>
              <li class="es-tabs__item" data-role="tab/link" data-id="tab2">
                Устав и внутренние документы
              </li>
              <li class="es-tabs__item" data-role="tab/link" data-id="tab3">
                Эмиссионные документы
              </li>
              <li class="es-tabs__item" data-role="tab/link" data-id="tab4">
                Бухгалтерская отчётность
              </li>
              <li class="es-tabs__item" data-role="tab/link" data-id="tab5">
                Разбор отчетности
              </li>
            </ul>
          </div>
          <div class="es-page__content es-tabs__content">
            <div
              class="es-tabs__pane es-tabs__pane_active es-tabs__text-blocks"
              data-role="tab/content"
              id="tab1"
            >
              <div>
                <div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">
                    Полное наименование компании
                  </div>
                  <div class="es-ivestors-block4__subtitle">
                    Общество с ограниченной ответственностью «Сибирское стекло»
                  </div>
                </div>
                <div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">
                    Сокращенное наименование компании
                  </div>
                  <div class="es-ivestors-block4__subtitle">
                    ООО «Сибстекло»
                  </div>
                </div>
                <div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">Юридический арес</div>
                  <div class="es-ivestors-block4__subtitle">
                    630047 г. Новосибирск, ул. Даргомыжского, 8а/1, помещ. 1,
                    этаж 2, офис 26
                  </div>
                </div>
                <div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">Фактический адрес</div>
                  <div class="es-ivestors-block4__subtitle">
                    630047 г. Новосибирск, ул. Даргомыжского, 8а/1, помещ. 1,
                    этаж 2, офис 26
                  </div>
                </div>
              </div>
              <div>
                <div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">
                    Дата государственной регистрации
                  </div>
                  <div class="es-ivestors-block4__subtitle">24.02.2005</div>
                </div>
                <div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">
                    Номер Государственной регистрации (ОГРН)
                  </div>
                  <div class="es-ivestors-block4__subtitle">1055406020691</div>
                </div>
                <div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">ИНН</div>
                  <div class="es-ivestors-block4__subtitle">5406305355</div>
                </div>
                <div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">
                    Зарегистрировавший орган
                  </div>
                  <div class="es-ivestors-block4__subtitle">
                    Инспекция Федеральной налоговой службы по Центральному
                    району г. Новосибирска
                  </div>
                </div>
                <div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">ФИО руководителя</div>
                  <div class="es-ivestors-block4__subtitle">
                    Мор Антон Павлович
                  </div>
                </div>
                <!--<div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">
                    Банковские реквизиты
                  </div>
                  <div class="es-ivestors-block4__subtitle">
                    р/с 40702810812000113159
                  </div>
                  <div class="es-ivestors-block4__subtitle">
                    в филиале ООО «Экспобанк» г.Новосибирск
                  </div>
                  <div class="es-ivestors-block4__subtitle">
                    к/с 30101810450040000861,
                  </div>
                  <div class="es-ivestors-block4__subtitle">БИК 0450044861</div>
                </div>
                <div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">
                    Наименование управляющей организации
                  </div>
                  <div class="es-ivestors-block4__subtitle">
                    АО «Завод «Экран»
                  </div>
                </div>
                <div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">
                    Телефон руководителя
                  </div>
                  <div class="es-ivestors-block4__subtitle">
                    <a href="tel:+73833633770" class="es-link"
                      >+7 (383) 363-37-70</a
                    >
                  </div>
                </div>
                <div class="es-ivestors-block4__text">
                  <div class="es-ivestors-block4__title">
                    Адрес страницы в сети Интернет
                  </div>
                  <div class="es-ivestors-block4__subtitle">
                    <a
                      href="http://www.e-disclosure.ru/portal/company.aspx?id=37458"
                      class="es-link"
                      >http://www.e-disclosure.ru/portal/company.aspx?id=37458</a
                    >
                  </div>
                </div> -->
              </div>
            </div>
            <div class="es-tabs__pane" data-role="tab/content" id="tab2">
              <div class="document-widget_block">
                <div
                  class="document-widget_wrapper"
                  data-document_type="ustav_i_vnutrennie_dokumenty"
                >
                  <div class="es-file document-widget_item">
                    <img src="images/pdf.png" class="es-file__img" />
                    <div class="es-file__text">
                      <span class="es-file__title" data-param="ORIGIN"></span>
                      <a
                        target="_blank"
                        href="index.html"
                        class="es-link-blue es-file__link"
                        >Скачать .pdf</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="es-tabs__pane" data-role="tab/content" id="tab3">
              <div class="document-widget_block">
                <div
                  class="document-widget_wrapper"
                  data-document_type="emissionnye_dokumenty"
                >
                  <div class="es-file document-widget_item">
                    <img src="images/pdf.png" class="es-file__img" />
                    <div class="es-file__text">
                      <span class="es-file__title" data-param="ORIGIN"></span>
                      <a
                        target="_blank"
                        href="index.html"
                        class="es-link-blue es-file__link"
                        >Скачать .pdf</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="es-tabs__pane" data-role="tab/content" id="tab4">
              <div class="document-widget_block">
                <div
                  class="document-widget_wrapper"
                  data-document_type="buh_otczetnost"
                >
                  <div class="es-file document-widget_item">
                    <img src="images/pdf.png" class="es-file__img" />
                    <div class="es-file__text">
                      <span class="es-file__title" data-param="ORIGIN"></span>
                      <a
                        target="_blank"
                        href="index.html"
                        class="es-link-blue es-file__link"
                        >Скачать .pdf</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="es-tabs__pane" data-role="tab/content" id="tab5">
              <div class="document-widget_block">
                <div
                  class="document-widget_wrapper"
                  data-document_type="razbor_otczetnosti"
                >
                  <div class="es-file document-widget_item">
                    <img src="images/pdf.png" class="es-file__img" />
                    <div class="es-file__text">
                      <span class="es-file__title" data-param="ORIGIN"></span>
                      <a
                        target="_blank"
                        href="index.html"
                        class="es-link-blue es-file__link"
                        >Скачать .pdf</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="es-ivestors-block5" id="how-become-an-investor">
        <div class="es-page__content es-ivestors-block__content">
          <p class="es-header">
            <span class="es-header__letter">К</span>ак стать инвестором
          </p>
          <div class="es-ivestors-block__container">
            <div>
              <div class="es-ivestors-block__header">
                <div class="es-ivestors-block3__number">1</div>
                <div class="es-ivestors-block3__description">
                  <div class="es-ivestors-block3__title">Открыть</div>
                  <div class="es-ivestors-block3__subtitle">
                    Брокерский счёт:
                  </div>
                  <!-- <div class="es-ivestors-block3__text">Способы открытия:</div> -->
                </div>
              </div>
              <div class="es-ivestors-block__middle">
                <div class="es-investors-tile">
                  <div class="es-investors-tile__img">
                    <img src="images/investors/ico_01.png" alt="В офисе" />
                  </div>
                  <div class="es-investors-tile__content">
                    <div class="es-investors-tile__title">
                      Лично в офисе брокерской компании
                    </div>
                  </div>
                </div>
                <div class="es-investors-tile">
                  <div class="es-investors-tile__img">
                    <img src="images/investors/ico_02.png" alt="Через сайт" />
                  </div>
                  <div class="es-investors-tile__content">
                    <div class="es-investors-tile__title">
                      Через сайт брокерской компании
                    </div>
                    <div class="es-investors-tile__text">
                      При наличии подтвержденной регистрации на портале
                      «Госуслуги»
                    </div>
                  </div>
                </div>
              </div>
              <div class="es-callout es-ivestors__callout">
                Услуги по открытию брокерских счетов предоставляют крупные
                коммерческие банки и специализированные брокерские фирмы.
              </div>
            </div>
            <div>
              <div class="es-ivestors-block__header">
                <div class="es-ivestors-block3__number">2</div>
                <div class="es-ivestors-block3__description">
                  <div class="es-ivestors-block3__title">Приобрести</div>
                  <div class="es-ivestors-block3__subtitle">Облигации</div>
                  <!-- <div class="es-ivestors-block3__subtitle">
                    по номеру: №4B02-02-00373-R-001P от 23.09.2020
                  </div>
                  <div class="es-ivestors-block3__subtitle">
                    ISIN код: RU000A1026R9
                  </div>
                  <div class="es-ivestors-block3__text">с помощью:</div> -->
                </div>
              </div>
              <div class="es-ivestors-block__middle">
                <div class="es-investors-tile">
                  <div class="es-investors-tile__img">
                    <img src="images/investors/ico_03.png" alt="Брокер" />
                  </div>
                  <div class="es-investors-tile__content">
                    <div class="es-investors-tile__title">Брокера</div>
                    <div class="es-investors-tile__text">
                      Менеджера банка, где открыт ваш счет, оставив поручение по
                      телефону или лично в отделении
                    </div>
                  </div>
                </div>
                <div class="es-investors-tile">
                  <div class="es-investors-tile__img">
                    <img
                      src="images/investors/ico_04.png"
                      alt="Специализированное ПО"
                    />
                  </div>
                  <div class="es-investors-tile__content">
                    <div class="es-investors-tile__title">
                      Специализированного программного обеспечаения
                    </div>
                    <div class="es-investors-tile__text">
                      Программа <span class="es-uppercase">QUIK</span>
                    </div>
                  </div>
                </div>
                <div class="es-investors-tile">
                  <div class="es-investors-tile__img">
                    <img
                      src="images/investors/ico_05.png"
                      alt="Личный кабинет"
                    />
                  </div>
                  <div class="es-investors-tile__content">
                    <div class="es-investors-tile__title">
                      Личного кабинета на веб-сайте
                    </div>
                    <div class="es-investors-tile__text">
                      Такую возможность предоставляют некоторые брокеры/банки
                    </div>
                  </div>
                </div>
              </div>
              <div class="es-callout es-ivestors__callout">
                Перед покупкой необходимо пополнить свой брокерский счет на
                сумму покупки с учетом комиссии банка/брокера.
              </div>
            </div>
            <div>
              <div class="es-ivestors-block__header">
                <div class="es-ivestors-block3__number">3</div>
                <div class="es-ivestors-block3__description">
                  <div class="es-ivestors-block3__title">Получать</div>
                  <div class="es-ivestors-block3__subtitle">Купонный доход</div>
                  <div class="es-ivestors-block3__text">
                    Согласно условиям программы:
                  </div>
                </div>
              </div>
              <div class="es-ivestors-block__middle">
                <div class="es-investors-tile">
                  <div class="es-investors-tile__img">
                    <img
                      src="images/investors/ico_06.png"
                      alt="Выплата дохода"
                    />
                  </div>
                  <div class="es-investors-tile__content">
                    <div class="es-investors-tile__title">
                      Выплата дохода по купону
                    </div>
                    <div class="es-investors-tile__text">Ежемесячно</div>
                  </div>
                </div>
                <!-- <div class="es-investors-tile">
                  <div class="es-investors-tile__img">
                    <img src="images/ico_07.png" alt="Ставка" />
                  </div>
                  <div class="es-investors-tile__content">
                    <div class="es-investors-tile__title">Ставка 12,5%</div>
                    <div class="es-investors-tile__text">Годовых</div>
                  </div>
                </div>
                <div class="es-investors-tile">
                  <div class="es-investors-tile__img">
                    <img src="images/ico_08.png" alt="Оферта" />
                  </div>
                  <div class="es-investors-tile__content">
                    <div class="es-investors-tile__title">Оферта</div>
                    <div class="es-investors-tile__text">Не предусмотрена</div>
                  </div>
                </div> -->
              </div>
              <div class="es-callout es-ivestors__callout">
                По вопросам покупки биржевых облигаций ООО «Сибстекло» вы можете
                проконсультироваться со специалистами компании «Юнисервис
                Капитал».
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="es-ivestors-block2" id="press-centr">
        <!-- <div class="es-page__content es-news__content widget-wrapp typ_none">
          <p class="es-header es-header_blue">Пресс-центр</p>
          <div class="es-news-block__container widget-news_block">
            <div class="es-news-tile widget-news_item widget-news_item_img">
              <a
                href="Ссылка на новосить"
                target="_blank"
                class="block__img-link"
              >
                <img src="" />
              </a>
              <div class="es-news-tile__title widget-news_item_title">
                <a
                  href="Ссылка на новость"
                  target="_blank"
                  class="block__title-link"
                >
                  Текст заголовка
                </a>
              </div>
              <div class="es-news-tile__text widget-news_item_preview">
                <div class="block__text">Текст анонса</div>
              </div>
            </div>
            <div class="es-news-tile widget-news_item widget-news_item_img">
              <a
                href="Ссылка на новосить"
                target="_blank"
                class="block__img-link"
              >
                <img src="" />
              </a>
              <div class="es-news-tile__title widget-news_item_title">
                <a
                  href="Ссылка на новость"
                  target="_blank"
                  class="block__title-link"
                >
                  Текст заголовка
                </a>
              </div>
              <div class="es-news-tile__text widget-news_item_preview">
                <div class="block__text">Текст анонса</div>
              </div>
            </div>
            <div class="es-news-tile widget-news_item widget-news_item_img">
              <a
                href="Ссылка на новосить"
                target="_blank"
                class="block__img-link"
              >
                <img src="" />
              </a>
              <div class="es-news-tile__title widget-news_item_title">
                <a
                  href="Ссылка на новость"
                  target="_blank"
                  class="block__title-link"
                >
                  Текст заголовка
                </a>
              </div>
              <div class="es-news-tile__text widget-news_item_preview">
                <div class="block__text">Текст анонса</div>
              </div>
            </div>
          </div>
          <a
            class="es-btn es-btn_short"
            href="https://boomin.ru/publications/tag/sibsteklo"
            target="_blank"
            >Все новости</a
          >
          <button class="es-btn es-btn_short widget-news_btn">
            Все новости
          </button>
        </div> -->
        <?php
        // URL страницы, откуда парсим
        $url = 'https://boomin.ru/publications/tag/sibsteklo';

        // Получаем HTML контент страницы
        $html = file_get_contents($url);

        // Создаем объект DOMDocument для парсинга HTML
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // подавляем ошибки из-за некорректного HTML
        $dom->loadHTML($html);
        libxml_clear_errors();

        // Создаем XPath для поиска элементов
        $xpath = new DOMXPath($dom);

        // Ищем карточки новостей
        $newsItems = $xpath->query('//div[contains(@class, "publication-card__wrap")]');

        // Инициализируем счетчик новостей
        $newsCount = 0;
        $maxNews = 3; // выводим только 3 новости
        ?>

        <div class="es-page__content es-news__content widget-wrapp typ_none">
            <p class="es-header es-header_blue">Пресс-центр</p>
            <div class="es-news-block__container widget-news_block">
                <?php foreach ($newsItems as $item): ?>
                    <?php
                    // Проверяем, если уже выведено 3 новости, прерываем цикл
                    if ($newsCount >= $maxNews) break;

                    // Получаем ссылку на новость
                    $linkNode = $xpath->query('.//a[contains(@class, "publication-card__title")]', $item);
                    $link = $linkNode->length > 0 ? 'https://boomin.ru' . $linkNode->item(0)->getAttribute('href') : '#';

                    // Получаем картинку
                    $imgNode = $xpath->query('.//img[contains(@class, "publication-card__img")]', $item);
                    $img = $imgNode->length > 0 ? $imgNode->item(0)->getAttribute('src') : '';

                    // Получаем заголовок
                    $titleNode = $xpath->query('.//a[contains(@class, "publication-card__title")]', $item);
                    $title = $titleNode->length > 0 ? trim($titleNode->item(0)->textContent) : 'Без заголовка';

                    // Получаем анонс текста
                    $previewNode = $xpath->query('.//div[contains(@class, "publication-card__text")]', $item);
                    $preview = $previewNode->length > 0 ? trim($previewNode->item(0)->textContent) : 'Без описания';
                    ?>
                    <div class="es-news-tile widget-news_item widget-news_item_img">
                    <?php if ($img): // Проверяем, есть ли изображение ?>
                      <a href="<?php echo $link; ?>" target="_blank" class="block__img-link">
                          <img src="<?php echo $img; ?>" alt="Изображение новости" />
                      </a>
                    <?php endif; ?>
                    <div class="es-news-tile__title widget-news_item_title">
                        <a href="<?php echo $link; ?>" target="_blank" class="block__title-link">
                            <?php echo $title; ?>
                        </a>
                    </div>
                    <div class="es-news-tile__text widget-news_item_preview">
                        <div class="block__text"><?php echo $preview; ?></div>
                    </div>
                </div>
                <?php $newsCount++; // Увеличиваем счетчик новостей ?>
                <?php endforeach; ?>
            </div>
            <a class="es-btn es-btn_short" href="https://boomin.ru/publications/tag/sibsteklo" target="_blank">Все новости</a>
        </div>
      </section>
    </div>
    <footer class="es-footer" id="contacts">
      <div class="es-page__content es-footer__content">
        <div>
          <div class="es-page__footer-text">
            <div>ООО «Сибстекло»</div>
            <div>
              630047 г. Новосибирск, ул. Даргомыжского, 8а/1, помещ. 1, этаж 2,
              офис 26
            </div>
          </div>
        </div>
        <div>
          <div class="es-page__footer-title">
            По вопросам приобретения облигаций
          </div>
          <div class="es-page__footer-text">
            <div>ООО «Инвестиционная компания Юниcервис Капитал»</div>
            <div>630099, г. Новосибирск, ул. Романова, 28, 5 этаж»</div>
            <div>
              <a href="tel:+73833495776" class="es-link">+7 (383) 349-57-76</a>
            </div>
            <div>
              <a href="mailto:primary@uscapital.ru" class="es-link"
                >primary@uscapital.ru</a
              >
            </div>
            <div>
              <a href="http://uscapital.ru/" class="es-link">uscapital.ru</a>
            </div>
            <!--    <div>
            <a href="tel:88003013831" class="es-link">8 (800) 301-38-31 (бесплатная линия для инвесторов)</a>
          </div>  //-->
          </div>
        </div>
      </div>
    </footer>
    <div id="investors-popup" class="es-popup">
      <div class="es-page__content es-popup__content">
        <button id="investors-popup-close-btn" class="es-popup__close">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1em"
            height="1em"
            viewbox="0 0 24 24"
          >
            <path
              stroke="none"
              fill="currentColor"
              strokewidth="1.1"
              d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"
            />
          </svg>
        </button>
        <form onsubmit="return sendEmail(this);">
          <div class="es-header">
            <span class="es-header__letter">К</span>ак стать инвестором
          </div>
          <div class="es-popup__inputs">
            <div>
              <div class="es-popup__input-container">
                <input
                  type="text"
                  name="user-name"
                  class="es-popup__input"
                  value=""
                  onkeyup="this.setAttribute('value', this.value);"
                  onfocus="this.classList.remove('es-popup__input_error')"
                />
                <label class="es-popup__input-label">Ваше имя</label>
                <span
                  class="es-popup__input-message es-popup__input-message_error"
                  >введите имя</span
                >
              </div>
              <div class="es-popup__input-container">
                <input
                  type="text"
                  name="position"
                  class="es-popup__input"
                  value=""
                  onkeyup="this.setAttribute('value', this.value);"
                  onfocus="this.classList.remove('es-popup__input_error')"
                />
                <label class="es-popup__input-label">Ваша должность</label>
                <span
                  class="es-popup__input-message es-popup__input-message_error"
                  >укажите должность</span
                >
              </div>
              <div class="es-popup__input-container">
                <input
                  type="text"
                  name="company"
                  class="es-popup__input"
                  value=""
                  onkeyup="this.setAttribute('value', this.value);"
                  onfocus="this.classList.remove('es-popup__input_error')"
                />
                <label class="es-popup__input-label">Название компании</label>
                <span
                  class="es-popup__input-message es-popup__input-message_error"
                  >укажите название компании</span
                >
              </div>
              <div class="es-popup__input-container">
                <input
                  type="text"
                  name="user-cellphone"
                  class="es-popup__input"
                  value=""
                  onkeyup="this.setAttribute('value', this.value);"
                  onfocus="this.classList.remove('es-popup__input_error')"
                  data-role="phone/input"
                />
                <label class="es-popup__input-label"
                  >Ваш мобильный телефон</label
                >
                <span
                  class="es-popup__input-message es-popup__input-message_error"
                  >введите корректный номер телефона</span
                >
              </div>
            </div>
            <div>
              <div class="es-popup__input-container">
                <input
                  type="text"
                  name="email"
                  class="es-popup__input"
                  value=""
                  onkeyup="this.setAttribute('value', this.value);"
                  onfocus="this.classList.remove('es-popup__input_error')"
                />
                <label class="es-popup__input-label">Ваш e-mail</label>
                <span
                  class="es-popup__input-message es-popup__input-message_error"
                  >введите корректный почтовый адрес</span
                >
              </div>
              <div class="es-popup__input-container">
                <textarea
                  name="message"
                  class="es-popup__input"
                  value=""
                  onkeyup="this.setAttribute('value', this.value);"
                  onfocus="this.classList.remove('es-popup__input_error')"
                ></textarea>
                <label class="es-popup__input-label">Сообщение</label>
              </div>
            </div>
          </div>
          <div class="es-popup__checkbox__container">
            <div class="es-popup__checkbox">
              <input
                name="agreement"
                type="checkbox"
                class="es-popup__checkbox-input"
                onclick="this.classList.remove('es-popup__checkbox-input_error')"
              />
              <div class="es-popup__checkbox-btn">
                <img src="images/checkbox.png" class="es-popup__checkbox-img" />
              </div>
              <label class="es-popup__checkbox-label"
                >Я даю свое согласие на обработку моих персональных данных, с
                условиями
                <a
                  href="docs/user_agreement.pdf"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="es-link-blue"
                  >пользовательского соглашения</a
                >
                ознакомлен</label
              >
            </div>
          </div>
          <div class="es-popup__send-btn-block">
            <button
              type="submit"
              class="es-btn es-popup__submit-btn"
              id="send-button"
            >
              Отправить
            </button>
            <div id="popup-message" class="es-popup__message"></div>
          </div>
        </form>
      </div>
    </div>
    <!-- jquery -->
    <script src="jquery-3.2.1.min.js"></script>
    <!-- ui datepicker -->
    <script src="ui/1.12.1/jquery-ui.js"></script>
    <!-- mask -->
    <script src="imask.js"></script>
    <!-- docs widget -->
    <script src="widget.js"></script>
    <!-- theme js -->
    <script type="text/javascript" src="index.js"></script>
    <!-- <script src="https://storage.boomin.ru/local/news-widget.min.js"></script>
    <script>
      $('.widget-wrapp').newsWidget({
        token: 'dc82e2fb6026b2aaf4beb938ad0e22f2',
        debug: false
      })
    </script> -->
  </body>
</html>
