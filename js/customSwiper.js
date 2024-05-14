const swiper = new Swiper('.swiper', {
    // Направление свайпа
    direction: 'horizontal',
    // Чувствительность свайпа
    touchRatio: 2,
    // Автовысота
    autoHeight: true,
    // Отключение свайпера при недостующем кол-ве слайдов
    watchOverflow: true,
    // Отступ между слайдами
    spaceBetween: 50,
    // Скорость смены слайда
    speed: 800,

    // Стрелки
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    
    // Буллеты/Прогрессбар
    pagination: {
        el: '.swiper-pagination',
        // Кликабельность
        clickable: true,
        // Динамическое изменение точек
        dynamicBullets: true,
    },

    // Скролл
    scrollbar: {
        el: '.swiper-scrollbar',
        // Кликабельность
        draggable: true,
    },

    // Навигация по хешу
    hashNavigation: {
        // Стрелки браузера
        watchState: true,
    },
    
    // Управление стрелками на клавиатуре
    keyboard: {
        // вкл/выкл
        enabled: true,
        // Управление в поле зрения
        onlyInViewport: true,
        // Управление page up/down на клавиатуре
        pageUpDown: true,
    },

    // virtual: {
    //     slides: (function () {
    //         let slide = []
    //         for (let i = 0; i < 10; i++) {
    //             slide.push(`<div class="image-slider_text">Слайд №${i}</div>`);
    //         }
    //         return slide;
    //     }()),
    // },
});

// 44 минута заполнение данными