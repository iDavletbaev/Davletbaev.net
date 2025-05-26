<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("Ильнур Давлетбаев");
?>

<?php
// Основной блок с информацией
$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "hero",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "BROWSER_TITLE" => "-",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => "",
        "ELEMENT_ID" => "7",
        "FIELD_CODE" => array(
            0 => "DETAIL_TEXT",
            1 => "",
        ),
        "IBLOCK_ID" => "3",
        "IBLOCK_TYPE" => "blocks",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array(
            0 => "CONTACT_BTN",
            1 => "SECOND_BTN",
            2 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_SHARE" => "N",
        "COMPONENT_TEMPLATE" => "hero"
    ),
    false
);?>

    <!-- Блок с видами деятельности -->
    <section id="skills" class="skills-section">
        <div class="container">
            <h2 class="section-title">Чем я занимаюсь</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Работа с серверами Linux</h3>
                    <p>Настройка, администрирование и оптимизация серверов на Linux. Развертывание веб-приложений.</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Веб-разработка</h3>
                    <p>Создание современных веб-приложений с использованием React, Vue.js, Node.js и других технологий.</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Адаптивный дизайн</h3>
                    <p>Разработка интерфейсов, которые идеально отображаются на любых устройствах и экранах.</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Базы данных</h3>
                    <p>Проектирование и оптимизация баз данных: MySQL, PostgreSQL, MongoDB.</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Безопасность</h3>
                    <p>Обеспечение безопасности веб-приложений, защита от уязвимостей.</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Оптимизация</h3>
                    <p>Повышение производительности веб-приложений, ускорение загрузки.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Блок с сертификатами -->
    <section id="certificates" class="certificates-section">
        <div class="container">
            <h2 class="section-title">Мои сертификаты</h2>
            <div class="certificates-grid">
                <div class="certificate-mp-card">
                    <img src="images/cert1.jpg" alt="Сертификат по веб-разработке">
                    <div class="certificate-overlay">
                        <h3>Веб-разработка</h3>
                        <p>Advanced Web Development</p>
                    </div>
                </div>
                <div class="certificate-mp-card">
                    <img src="images/cert2.jpg" alt="Сертификат по Linux">
                    <div class="certificate-overlay">
                        <h3>Linux Administration</h3>
                        <p>LPIC-1 Certified</p>
                    </div>
                </div>
                <div class="certificate-mp-card">
                    <img src="images/cert3.jpg" alt="Сертификат по JavaScript">
                    <div class="certificate-overlay">
                        <h3>JavaScript</h3>
                        <p>Advanced JS Concepts</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="certificates.html" class="btn btn-outline">Все сертификаты</a>
            </div>
        </div>
    </section>

    <!-- Блок с типовыми задачами -->
    <section id="tasks" class="tasks-section">
        <div class="container">
            <h2 class="section-title">Типовые задачи</h2>
            <div class="tasks-grid">
                <div class="task-card">
                    <div class="task-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Разработка сайтов</h3>
                    <p>Создание корпоративных сайтов, лендингов и интернет-магазинов.</p>
                </div>
                <div class="task-card">
                    <div class="task-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Настройка серверов</h3>
                    <p>Развертывание и оптимизация веб-серверов (Nginx, Apache).</p>
                </div>
                <div class="task-card">
                    <div class="task-icon">
                        <i class="fas fa-bug"></i>
                    </div>
                    <h3>Исправление ошибок</h3>
                    <p>Диагностика и устранение проблем в существующих проектах.</p>
                </div>
            </div>
            <div class="text-center">
                <a href="tasks.html" class="btn btn-outline">Все услуги</a>
            </div>
        </div>
    </section>

    <!-- Блок с контактами и формой -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title">Свяжитесь со мной</h2>
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Контактная информация</h3>
                    <ul>
                        <li><i class="fas fa-envelope"></i> ivan@example.com</li>
                        <li><i class="fas fa-phone"></i> +7 (123) 456-78-90</li>
                        <li><i class="fas fa-map-marker-alt"></i> Москва, Россия</li>
                    </ul>
                    <div class="contact-social">
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-vk"></i></a>
                    </div>
                </div>
                <div class="contact-form" data-cursor-hover>
                    <form id="feedback-form">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Ваше имя" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Ваш email" required>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Ваше сообщение" required></textarea>
                        </div>
                        <button type="submit" class="btn">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
