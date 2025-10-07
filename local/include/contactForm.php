<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use \Bitrix\Main\Localization\Loc;
//
?>

<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="section-title">Свяжитесь со мной</h2>
        <div class="contact-grid">
            <div class="contact-info">

                <h3><?=Loc::getMessage('CONTACT_BLOCK_TITLE')?></h3>
                <ul>
                    <li><i class="fas fa-envelope"></i>
                        <?= $GLOBALS['CONTACTS']['Email']['UF_DAV_VALUE'] ?>
                    </li>

                    <li>
                        <i class="fab fa-github"></i>
                        <a href="<?= $GLOBALS['CONTACTS']['GitHub']['UF_DAV_VALUE'] ?>"
                           title="<?= $GLOBALS['CONTACTS']['GitHub']['UF_DAV_NAME'] ?>"
                           target="_blank"
                        >
                            <?= $GLOBALS['CONTACTS']['GitHub']['UF_DAV_NAME'] ?>
                        </a>
                    </li>

                    <li>
                        <i class="fab fa-linkedin"></i>
                        <a href="<?= $GLOBALS['CONTACTS']['LinkedIn']['UF_DAV_VALUE'] ?>"
                           title="<?= $GLOBALS['CONTACTS']['LinkedIn']['UF_DAV_NAME'] ?>"
                           target="_blank"
                        >
                            <?= $GLOBALS['CONTACTS']['LinkedIn']['UF_DAV_NAME'] ?>
                        </a>
                    </li>

                    <li>
                        <i class="fab fa-telegram"></i>
                        <a href="<?= $GLOBALS['CONTACTS']['Telegram']['UF_DAV_VALUE'] ?>"
                           title="<?= $GLOBALS['CONTACTS']['Telegram']['UF_DAV_NAME'] ?>"
                           target="_blank"
                        >
                            <?= $GLOBALS['CONTACTS']['Telegram']['UF_DAV_NAME'] ?>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="contact-form" data-cursor-hover="">
                <form id="feedback-form">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Ваше имя" required="">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Ваш email" required="">
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" placeholder="Ваше сообщение" required=""></textarea>
                    </div>
                    <button type="submit" class="btn">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</section>
