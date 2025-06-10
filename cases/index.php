<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Кейсы"); ?>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/dist/css/cases.css">
<script src="<?=SITE_TEMPLATE_PATH?>/js/cases.js"></script>

<?php $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"cases", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "lists",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Кейсы",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "cases"
	),
	false
);?>

<main class="cases-page">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">Мои кейсы</h1>
            <p class="page-subtitle">Реализованные проекты и успешные решения</p>
        </div>

        <div class="cases-categories">
            <button class="category-btn active" data-category="all">Все</button>
            <button class="category-btn" data-category="web">Веб-сайты</button>
            <button class="category-btn" data-category="app">Приложения</button>
            <button class="category-btn" data-category="ecommerce">Интернет-магазины</button>
            <button class="category-btn" data-category="optimization">Оптимизация</button>
        </div>

        <div class="cases-grid">
            <!-- Кейс 1 -->
            <article class="case-card" data-category="web" data-case="1">
                <div class="case-card-image">
                    <img src="images/cases/web-project.jpg" alt="Корпоративный сайт">
                    <span class="case-category">Веб-сайты</span>
                </div>
                <div class="case-card-content">
                    <div class="case-meta">
                        <span class="case-date"><i class="far fa-calendar"></i> Январь 2023</span>
                        <span class="case-duration"><i class="far fa-clock"></i> 3 недели</span>
                    </div>
                    <h3 class="case-title">Корпоративный сайт для ООО "ТехноПром"</h3>
                    <p class="case-excerpt">Разработка современного адаптивного сайта с системой управления контентом...</p>
                    <button class="case-read-more">Подробнее <i class="fas fa-arrow-right"></i></button>
                </div>
            </article>

            <!-- Кейс 2 -->
            <article class="case-card" data-category="ecommerce" data-case="2">
                <div class="case-card-image">
                    <img src="images/cases/ecommerce-project.jpg" alt="Интернет-магазин">
                    <span class="case-category">Интернет-магазины</span>
                </div>
                <div class="case-card-content">
                    <div class="case-meta">
                        <span class="case-date"><i class="far fa-calendar"></i> Март 2023</span>
                        <span class="case-duration"><i class="far fa-clock"></i> 6 недель</span>
                    </div>
                    <h3 class="case-title">Интернет-магазин мебели "Домовой"</h3>
                    <p class="case-excerpt">Полный цикл разработки интернет-магазина с интеграцией платежной системы...</p>
                    <button class="case-read-more">Подробнее <i class="fas fa-arrow-right"></i></button>
                </div>
            </article>

            <!-- Другие кейсы -->
        </div>

        <div class="cases-pagination">
            <a href="#" class="pagination-btn active">1</a>
            <a href="#" class="pagination-btn">2</a>
            <a href="#" class="pagination-btn">3</a>
            <a href="#" class="pagination-btn">Следующая <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</main>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
