var _____WB$wombat$assign$function_____ = function (name) {
  return (
    (self._wb_wombat &&
      self._wb_wombat.local_init &&
      self._wb_wombat.local_init(name)) ||
    self[name]
  );
};
if (!self.__WB_pmw) {
  self.__WB_pmw = function (obj) {
    this.__WB_source = obj;
    return this;
  };
}
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

  var CALC_API_TOKEN = "32e854f861f6e04e7414a54212c1a52a";
  var CALC_API_TOKEN_FULL = "32e854f861f6e04e7414a54212c1a52a";

  document.addEventListener("DOMContentLoaded", function (event) {
    // var tabLinks = document.querySelectorAll('[data-role="tab/link"]');

    // for (var index = 0; index < tabLinks.length; index++) {
    //   const tabLink = tabLinks[index];
    //   tabLink.addEventListener('click', function() {
    //     document.querySelector('.es-tabs__pane_active').classList.remove('es-tabs__pane_active');
    //     document.querySelector('.es-tabs__item_active').classList.remove('es-tabs__item_active');
    //     document.getElementById(this.dataset.id).classList.add('es-tabs__pane_active');
    //     this.classList.add('es-tabs__item_active');
    //   });
    // };
    var tabContainers = document.querySelectorAll(
      ".es-ivestors-block3, .es-ivestors-block4, .es-ivestors-block6"
    );

    tabContainers.forEach(function (container) {
      var tabLinks = container.querySelectorAll('[data-role="tab/link"]');

      tabLinks.forEach(function (tabLink) {
        tabLink.addEventListener("click", function () {
          // Сброс активных классов внутри текущего контейнера
          var activePane = container.querySelector(".es-tabs__pane_active");
          var activeTab = container.querySelector(".es-tabs__item_active");

          if (activePane) activePane.classList.remove("es-tabs__pane_active");
          if (activeTab) activeTab.classList.remove("es-tabs__item_active");

          // Устанавливаем активные классы для выбранных табов и панелей
          var newPane = container.querySelector(`#${tabLink.dataset.id}`);
          if (newPane) newPane.classList.add("es-tabs__pane_active");
          tabLink.classList.add("es-tabs__item_active");
        });
      });
    });

    var investorPopup = document.getElementById("investors-popup");
    var investorBtn = document.getElementById("become-investor-btn");
    var messageElement = document.getElementById("popup-message");

    if (investorBtn && investorPopup) {
      investorBtn.addEventListener("click", function () {
        investorPopup.classList.add("es-popup_show");
        messageElement.innerHTML = "";
      });
      document
        .getElementById("investors-popup-close-btn")
        .addEventListener("click", function () {
          investorPopup.classList.remove("es-popup_show");
        });
    }

    var presentationBtn = document.getElementById("presentation-btn");

    if (presentationBtn) {
      presentationBtn.addEventListener("click", function () {
        window.open(
          "https://sibstek.ru/files/%D0%9F%D1%80%D0%B5%D0%B7%D0%B5%D0%BD%D1%82%D0%B0%D1%86%D0%B8%D1%8F%20%D0%B4%D0%BB%D1%8F%20%D0%B8%D0%BD%D0%B2%D0%B5%D1%81%D1%82%D0%BE%D1%80%D0%BE%D0%B2.pdf",
          "_blank"
        );
      });
    }

    // phone inputs
    var phoneInputs = document.querySelectorAll('[data-role="phone/input"]');

    for (var index = 0; index < phoneInputs.length; index++) {
      const phoneInput = phoneInputs[index];

      var mask = new IMask(phoneInput, {
        mask: "+{7} (000) 000-00-00",
      });
    }

    // date inputs
    var dateInputs = document.querySelectorAll('[data-role="date/input"]');

    for (var index = 0; index < dateInputs.length; index++) {
      const dateInput = dateInputs[index];

      var mask = new IMask(dateInput, {
        mask: Date,
        min: new Date(1990, 0, 1),
        max: new Date(2050, 11, 31),
        lazy: false,
      });
    }

    // price inputs
    var priceInputs = document.querySelectorAll('[data-role="price/input"]');

    for (var index = 0; index < priceInputs.length; index++) {
      const priceInput = priceInputs[index];

      var mask = new IMask(priceInput, {
        mask: "num",
        blocks: {
          num: {
            mask: Number,
            thousandsSeparator: " ",
          },
        },
      });
    }

    // menu
    document
      .getElementById("collapsable-menu-btn")
      .addEventListener("click", function () {
        document
          .getElementById("collapsable-menu")
          .classList.toggle("es-nav__menu-ul_show");
      });

    document.addEventListener("click", function (event) {
      if (event.target.id !== "collapsable-menu-btn") {
        document
          .getElementById("collapsable-menu")
          .classList.remove("es-nav__menu-ul_show");
      }
    });

    // calculator
    var calcLightBtn = document.getElementById("calc-light-btn");

    if (calcLightBtn) {
      var pdateElement = document.getElementById("calc-pdate");
      var sdateElement = document.getElementById("calc-sdate");
      var sizeElement = document.getElementById("calc-size");
      var profitElement = document.getElementById("calc-profit");
      var yieldElement = document.getElementById("calc-yield");
      var inputsElement = document.getElementById("calc-inputs");

      calcLightBtn.addEventListener("click", function () {
        var pdate = parseDate(pdateElement.value);
        var sdate = parseDate(sdateElement.value);
        var size = parsePrice(sizeElement.value);

        pdateElement.classList.toggle("es-input_error", !pdate);
        sdateElement.classList.toggle("es-input_error", !sdate);
        sizeElement.classList.toggle("es-input_error", size === "");

        if (pdate && sdate && size !== "") {
          profitElement.value = "...";
          yieldElement.value = "...";
          calcLightBtn.classList.add("es-disabled");
          inputsElement.classList.add("es-disabled");

          console.log(
            `https://boomin.ru/api/calculate/min?token=${CALC_API_TOKEN}&pdate=${pdate}&sdate=${sdate}&size=${size}`
          );

          httpGetAsync(
            `https://boomin.ru/api/calculate/min?token=${CALC_API_TOKEN}&pdate=${pdate}&sdate=${sdate}&size=${size}`,
            function (response) {
              const result = JSON.parse(response);
              if (result.error == "200") {
                // no error
                profitElement.value = result.data.Pribl;
                yieldElement.value = result.data.DohProst;
              }
            }
          );
          calcLightBtn.classList.remove("es-disabled");
          inputsElement.classList.remove("es-disabled");
        }
      });
    }

    var calcBtn = document.getElementById("calc-btn");

    if (calcBtn) {
      var pdateElement = document.getElementById("calc-pdate");
      var sdateElement = document.getElementById("calc-sdate");
      var volumeElement = document.getElementById("calc-volume");
      var dutyElement = document.getElementById("calc-duty");
      var ppriceElement = document.getElementById("calc-pprice");
      var spriceElement = document.getElementById("calc-sprice");

      var inputsElement = document.getElementById("calc-inputs");
      var profitElement = document.getElementById("calc-profit");
      var yieldElement = document.getElementById("calc-yield");
      var dateSaleElement = document.getElementById("calc-date-sell");
      var dateRedemptionElement = document.getElementById(
        "calc-date-redemption"
      );

      var priceBuyClearElement = document.getElementById(
        "calc-buy-price-clear"
      );
      var priceBuyClearPercentsElement = document.getElementById(
        "calc-buy-price-clear-percents"
      );
      var priceBuyFullElement = document.getElementById("calc-buy-price-full");
      var priceBuyFullPercentsElement = document.getElementById(
        "calc-buy-price-full-percents"
      );
      var brokerBuyCommissionElement = document.getElementById(
        "calc-buy-broker-commission"
      );
      var nkdBuyElement = document.getElementById("calc-buy-nkd");

      var priceSellClearElement = document.getElementById(
        "calc-sell-price-clear"
      );
      var priceSellClearPercentsElement = document.getElementById(
        "calc-sell-price-clear-percents"
      );
      var priceSellFullElement = document.getElementById(
        "calc-sell-price-full"
      );
      var priceSellFullPercentsElement = document.getElementById(
        "calc-sell-price-full-percents"
      );
      var brokerSellCommissionElement = document.getElementById(
        "calc-sell-broker-commission"
      );
      var nkdSellElement = document.getElementById("calc-sell-nkd");

      var placementDateElement = document.getElementById("calc-placement-date");
      var repaymentDateElement = document.getElementById("calc-repayment-date");
      var currentRateElement = document.getElementById("calc-current-rate");
      var nominalElement = document.getElementById("calc-nominal");
      var couponPaymentElement = document.getElementById("calc-coupon-payment");

      calcBtn.addEventListener("click", function () {
        var pdate = parseDate(pdateElement.value);
        var sdate = parseDate(sdateElement.value);
        var volume = volumeElement.value;
        var duty = dutyElement.value;
        var pprice = parsePrice(ppriceElement.value);
        var sprice = parsePrice(spriceElement.value);

        pdateElement.classList.toggle("es-input_error", !pdate);
        sdateElement.classList.toggle("es-input_error", !sdate);
        volumeElement.classList.toggle("es-input_error", volume === "");
        dutyElement.classList.toggle("es-input_error", duty === "");
        ppriceElement.classList.toggle("es-input_error", pprice === "");
        spriceElement.classList.toggle("es-input_error", sprice === "");

        if (
          pdate &&
          sdate &&
          volume !== "" &&
          duty !== "" &&
          pprice !== "" &&
          sprice !== ""
        ) {
          profitElement.value = "...";
          yieldElement.value = "...";
          dateSaleElement.value = "...";
          dateRedemptionElement.value = "...";

          priceBuyClearElement.value = "...";
          priceBuyClearPercentsElement.value = "...";
          priceBuyFullElement.value = "...";
          priceBuyFullPercentsElement.value = "...";
          brokerBuyCommissionElement.value = "...";
          nkdBuyElement.value = "...";

          priceSellClearElement.value = "...";
          priceSellClearPercentsElement.value = "...";
          priceSellFullElement.value = "...";
          priceSellFullPercentsElement.value = "...";
          brokerSellCommissionElement.value = "...";
          nkdSellElement.value = "...";

          placementDateElement.value = "...";
          repaymentDateElement.value = "...";
          currentRateElement.value = "...";
          nominalElement.value = "...";
          couponPaymentElement.value = "...";

          calcBtn.classList.add("es-disabled");
          inputsElement.classList.add("es-disabled");

          console.log(
            `https://boomin.ru/api/calculate/full?token=${CALC_API_TOKEN_FULL}&duty=${duty}&pdate=${pdate}&pprice=${pprice}&sdate=${sdate}&sprice=${sprice}&volume=${volume}`
          );

          httpGetAsync(
            `https://boomin.ru/api/calculate/full?token=${CALC_API_TOKEN_FULL}&duty=${duty}&pdate=${pdate}&pprice=${pprice}&sdate=${sdate}&sprice=${sprice}&volume=${volume}`,
            function (response) {
              const result = JSON.parse(response);
              console.log(result);

              calcBtn.classList.remove("es-disabled");
              inputsElement.classList.remove("es-disabled");

              if (result.error === "200") {
                // no error
                profitElement.value = result.data.Pribl;
                yieldElement.value = result.data.DohProst;
                dateSaleElement.value = result.data.dateSale;
                dateRedemptionElement.value = result.data.dateRedemption;

                priceBuyClearElement.value = result.data.clearPriceRubPok;
                priceBuyClearPercentsElement.value =
                  result.data.priceClearProcPok;
                priceBuyFullElement.value = result.data.fullPriceRubPok;
                priceBuyFullPercentsElement.value =
                  result.data.fullPriceProcPok;
                brokerBuyCommissionElement.value =
                  result.data.brokerCommissionPok;
                nkdBuyElement.value = result.data.nkdPok;

                priceSellClearElement.value = result.data.clearPriceRubPr;
                priceSellClearPercentsElement.value =
                  result.data.priceClearProcPr;
                priceSellFullElement.value = result.data.fullPriceRubPr;
                priceSellFullPercentsElement.value =
                  result.data.fullPriceProcPr;
                brokerSellCommissionElement.value =
                  result.data.brokerCommissionPr;
                nkdSellElement.value = result.data.nkdPr;

                placementDateElement.value = result.data.placementDate;
                repaymentDateElement.value = result.data.datePog;
                currentRateElement.value = result.data.currentRate;
                nominalElement.value = result.data.nominal;
                couponPaymentElement.value = result.data.payment;
              }
            }
          );
        }
      });
    }

    function parsePrice(priceStr) {
      return priceStr.replace(/\s/g, "");
    }

    function parseDate(dateStr) {
      var parsed = dateStr.split(".");
      var result = [];

      if (parsed.length !== 3) {
        return;
      }

      for (let index = 0; index < 3; index++) {
        const num = +parsed[index];

        if (isNaN(num)) {
          return;
        }

        result.push(num >= 10 ? num : `0${num}`);
      }

      return `${result[2]}-${result[1]}-${result[0]}`;
    }

    function httpGetAsync(theUrl, callback) {
      var xmlHttp = new XMLHttpRequest();
      xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
          callback(xmlHttp.responseText);
        }
      };
      xmlHttp.open("GET", theUrl, true);
      xmlHttp.send(null);
    }

    // window.onorientationchange = function() {
    //   var page = document.querySelector('.es-page');
    //   if (page) {
    //     page.style.display = 'block';
    //     setTimeout(function() {
    //       page.style.display = 'flex';
    //       document.body.style.zoom = 1.0
    //     });
    //   }
    // };

    const sections = document.querySelectorAll(
      "#bonds, #profitability, #basic-information, #how-become-an-investor, #press-centr"
    );
    const navItems = document.querySelectorAll(".es-nav__item");

    // Добавляем плавную прокрутку при клике на якорные ссылки
    document.querySelectorAll(".es-nav__link").forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href").substring(1);
        const targetElement = document.getElementById(targetId);

        window.scrollTo({
          top: targetElement.offsetTop - 99, // Учитываем отступ
          behavior: "smooth", // Плавная прокрутка
        });
      });
    });

    // Функция для добавления активного класса к текущему пункту меню
    window.addEventListener("scroll", function () {
      let currentSection = "";

      // Проверяем, какая секция на экране
      sections.forEach((section) => {
        const sectionTop = section.offsetTop - 99; // Учитываем фиксированное меню
        if (pageYOffset >= sectionTop) {
          currentSection = section.getAttribute("id");
        }
      });

      // Удаляем активный класс у всех пунктов меню и добавляем к текущему
      navItems.forEach((item) => {
        item.classList.remove("es-nav__item_active");
        const link = item.querySelector("a");
        if (link && link.getAttribute("href") === `#${currentSection}`) {
          item.classList.add("es-nav__item_active");
        }
      });
    });
  });

  // function sendEmail(form) {
  //   var data = new FormData(form)

  //   var isError = false

  //   function checkTextField(key) {
  //     var value = data.get(key)
  //     var element = form.querySelector('[name="' + key + '"]')
  //     var messageElement = form.querySelector(
  //       '[name="' + key + '"] ~ label ~ span'
  //     )
  //     var isFieldError = value === ''
  //     element.classList.toggle('es-popup__input_error', isFieldError)
  //     messageElement &&
  //       messageElement.classList.toggle(
  //         'es-popup__input-message_show',
  //         isFieldError
  //       )
  //     isError = isError || isFieldError
  //   }

  //   checkTextField('user-name')
  //   checkTextField('company')
  //   checkTextField('position')
  //   checkTextField('message')

  //   function checkCheckbox(key) {
  //     var value = data.get(key)
  //     var element = form.querySelector('[name="' + key + '"]')
  //     var isFieldError = value !== 'on'
  //     element.classList.toggle('es-popup__checkbox-input_error', isFieldError)
  //     isError = isError || isFieldError
  //   }

  //   checkCheckbox('agreement')

  //   function checkEmail(key) {
  //     var value = data.get(key)
  //     var element = form.querySelector('[name="' + key + '"]')
  //     var messageElement = form.querySelector(
  //       '[name="' + key + '"] ~ label ~ span'
  //     )

  //     var re =
  //       /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i

  //     var isFieldError = value === '' || !re.test(value)
  //     element.classList.toggle('es-popup__input_error', isFieldError)
  //     messageElement &&
  //       messageElement.classList.toggle(
  //         'es-popup__input-message_show',
  //         isFieldError
  //       )
  //     isError = isError || isFieldError
  //   }

  //   checkEmail('email')

  //   function checkPhone(key) {
  //     var value = data.get(key)
  //     var element = form.querySelector('[name="' + key + '"]')
  //     var messageElement = form.querySelector(
  //       '[name="' + key + '"] ~ label ~ span'
  //     )

  //     var re = /^(?:\+)?\d \(\d{3}\) \d{3}-\d{2}-\d{2}/

  //     var isFieldError = value === '' || !re.test(value)
  //     element.classList.toggle('es-popup__input_error', isFieldError)
  //     messageElement &&
  //       messageElement.classList.toggle(
  //         'es-popup__input-message_show',
  //         isFieldError
  //       )
  //     isError = isError || isFieldError
  //   }

  //   checkPhone('user-cellphone')

  //   if (isError) {
  //     return false
  //   }

  //   grecaptcha.ready(function () {
  //     grecaptcha
  //       .execute('6LdLRnoUAAAAADtEY6uckKKn04dqZDCNnpcwoseK', {
  //         action: 'investors/mail'
  //       })
  //       .then(function (token) {
  //         var messageElement = document.getElementById('popup-message')
  //         messageElement.innerHTML = ''

  //         var xmlHttp = new XMLHttpRequest()

  //         xmlHttp.addEventListener('load', function (event) {
  //           messageElement.classList.remove('es-popup__message_error')
  //           messageElement.innerHTML = 'Ваше сообщение успешно отправленно!'

  //           setTimeout(function () {
  //             var investorPopup = document.getElementById('investors-popup')
  //             investorPopup.classList.remove('es-popup_show')
  //           }, 2000)
  //         })

  //         // Define what happens in case of error
  //         xmlHttp.addEventListener('error', function (event) {
  //           messageElement.classList.add('es-popup__message_error')
  //           messageElement.innerHTML =
  //             'К сожалению ваше сообщение не оптравленно. Попробуйте позже.'
  //         })

  //         data.append('g-recaptcha-response', token)

  //         xmlHttp.open('POST', '/scripts/mail.php')
  //         xmlHttp.send(data)
  //       })
  //   })

  //   return false
  // }

  function sendEmail(form) {
    console.log("Начало отправки формы");
    var data = new FormData(form);

    var isError = false;

    // Проверка полей
    function checkTextField(key) {
      var value = data.get(key);
      console.log(key + ": " + value); // Логируем значения
      var element = form.querySelector('[name="' + key + '"]');
      var messageElement = form.querySelector(
        '[name="' + key + '"] ~ label ~ span'
      );
      var isFieldError = value === "";
      element.classList.toggle("es-popup__input_error", isFieldError);
      if (messageElement) {
        messageElement.classList.toggle(
          "es-popup__input-message_show",
          isFieldError
        );
      }
      isError = isError || isFieldError;
    }

    checkTextField("user-name");
    checkTextField("company");
    checkTextField("position");
    checkTextField("message");

    // Проверка чекбокса согласия
    function checkCheckbox(key) {
      var value = data.get(key);
      var element = form.querySelector('[name="' + key + '"]');
      var isFieldError = value !== "on";
      element.classList.toggle("es-popup__checkbox-input_error", isFieldError);
      isError = isError || isFieldError;
    }

    checkCheckbox("agreement");

    // Проверка Email
    function checkEmail(key) {
      var value = data.get(key);
      var element = form.querySelector('[name="' + key + '"]');
      var messageElement = form.querySelector(
        '[name="' + key + '"] ~ label ~ span'
      );
      var re =
        /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
      var isFieldError = value === "" || !re.test(value);
      element.classList.toggle("es-popup__input_error", isFieldError);
      if (messageElement) {
        messageElement.classList.toggle(
          "es-popup__input-message_show",
          isFieldError
        );
      }
      isError = isError || isFieldError;
    }

    checkEmail("email");

    // Проверка телефона
    function checkPhone(key) {
      var value = data.get(key);
      var element = form.querySelector('[name="' + key + '"]');
      var messageElement = form.querySelector(
        '[name="' + key + '"] ~ label ~ span'
      );
      var re = /^(?:\+)?\d \(\d{3}\) \d{3}-\d{2}-\d{2}/;
      var isFieldError = value === "" || !re.test(value);
      element.classList.toggle("es-popup__input_error", isFieldError);
      if (messageElement) {
        messageElement.classList.toggle(
          "es-popup__input-message_show",
          isFieldError
        );
      }
      isError = isError || isFieldError;
    }

    checkPhone("user-cellphone");

    if (isError) {
      console.log("Форма содержит ошибки.");
      return false;
    }

    console.log("Форма проверена, отправляем данные.");

    // AJAX запрос через XMLHttpRequest
    var xmlHttp = new XMLHttpRequest()

    xmlHttp.addEventListener('load', function (event) {
      console.log('Ответ от сервера получен: ', event.target.responseText)
      var messageElement = document.getElementById('popup-message')
      messageElement.classList.remove('es-popup__message_error')
      messageElement.innerHTML = 'Ваше сообщение успешно отправлено!'
      setTimeout(function () {
        var investorPopup = document.getElementById('investors-popup')
        investorPopup.classList.remove('es-popup_show')
      }, 2000)
    })

    xmlHttp.addEventListener('error', function (event) {
      console.error('Ошибка при отправке формы: ', event)
      var messageElement = document.getElementById('popup-message')
      messageElement.classList.add('es-popup__message_error')
      messageElement.innerHTML =
        'К сожалению, ваше сообщение не отправлено. Попробуйте позже.'
    })

    console.log('Отправляем запрос на сервер.')
    xmlHttp.open('POST', 'http://localhost:7000/sendEmail')
    xmlHttp.send(data)

    return false;
  }

  $(function () {
    $.datepicker.setDefaults($.datepicker.regional["ru"]);
    $("#calc-pdate").datepicker({
      minDate: new Date(2020, 10 - 1, 5),
      maxDate: new Date(2025, 9 - 1, 9),
      onSelect: function (selectedDate) {
        $("#calc-sdate").datepicker("option", "minDate", selectedDate);
      },
    });
    $("#calc-sdate").datepicker({
      defaultDate: "+1y",
      maxDate: new Date(2025, 9 - 1, 9),
      onSelect: function (selectedDate) {
        $("#calc-pdate").datepicker("option", "maxDate", selectedDate);
      },
    });
  });
  /* Russian (UTF-8) initialisation for the jQuery UI date picker plugin. */
  /* Written by Andrew Stromnov (stromnov@gmail.com). */
  (function (factory) {
    if (typeof define === "function" && define.amd) {
      // AMD. Register as an anonymous module.
      define(["../widgets/datepicker"], factory);
    } else {
      // Browser globals
      factory(jQuery.datepicker);
    }
  })(function (datepicker) {
    datepicker.regional.ru = {
      closeText: "Закрыть",
      prevText: "&#x3C;Пред",
      nextText: "След&#x3E;",
      currentText: "Сегодня",
      monthNames: [
        "Январь",
        "Февраль",
        "Март",
        "Апрель",
        "Май",
        "Июнь",
        "Июль",
        "Август",
        "Сентябрь",
        "Октябрь",
        "Ноябрь",
        "Декабрь",
      ],
      monthNamesShort: [
        "Янв",
        "Фев",
        "Мар",
        "Апр",
        "Май",
        "Июн",
        "Июл",
        "Авг",
        "Сен",
        "Окт",
        "Ноя",
        "Дек",
      ],
      dayNames: [
        "воскресенье",
        "понедельник",
        "вторник",
        "среда",
        "четверг",
        "пятница",
        "суббота",
      ],
      dayNamesShort: ["вск", "пнд", "втр", "срд", "чтв", "птн", "сбт"],
      dayNamesMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
      weekHeader: "Нед",
      dateFormat: "dd.mm.yy",
      minDate: new Date(2018, 4, 25),
      maxDate: new Date(2021, 6, 8),
      firstDay: 1,
      isRTL: false,
      showMonthAfterYear: false,
      yearSuffix: "",
    };

    datepicker.regional.ru1 = {
      closeText: "Закрыть",
      prevText: "&#x3C;Пред",
      nextText: "След&#x3E;",
      currentText: "Сегодня",
      monthNames: [
        "Январь",
        "Февраль",
        "Март",
        "Апрель",
        "Май",
        "Июнь",
        "Июль",
        "Август",
        "Сентябрь",
        "Октябрь",
        "Ноябрь",
        "Декабрь",
      ],
      monthNamesShort: [
        "Янв",
        "Фев",
        "Мар",
        "Апр",
        "Май",
        "Июн",
        "Июл",
        "Авг",
        "Сен",
        "Окт",
        "Ноя",
        "Дек",
      ],
      dayNames: [
        "воскресенье",
        "понедельник",
        "вторник",
        "среда",
        "четверг",
        "пятница",
        "суббота",
      ],
      dayNamesShort: ["вск", "пнд", "втр", "срд", "чтв", "птн", "сбт"],
      dayNamesMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
      weekHeader: "Нед",
      dateFormat: "dd.mm.yy",
      minDate: new Date(2020, 2, 11),
      maxDate: new Date(2023, 3, 25),
      firstDay: 1,
      isRTL: false,
      showMonthAfterYear: false,
      yearSuffix: "",
    };

    datepicker.setDefaults(datepicker.regional.ru);
    return datepicker.regional.ru;
  });

  documentWidget.load({
    companyDirectory: "sibsteklo",
  });
}
