<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
// 'en_US.UTF-8', 'en_US.UTF8', 'enu_usa'
// 'en_GB.UTF-8', 'en_GB.UTF8', 'eng_gb'
// 'en_AU.UTF-8', 'en_AU.UTF8', 'ena_au'
@setlocale(LC_ALL, ['de_DE.UTF-8', 'de_DE.UTF8', 'deu_deu']);

$long_date_formatter = new IntlDateFormatter('de', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
$short_date_formatter = new IntlDateFormatter('de', IntlDateFormatter::SHORT, IntlDateFormatter::NONE);
$date_time_formatter = new IntlDateFormatter('de', IntlDateFormatter::SHORT, IntlDateFormatter::LONG);

const DATE_FORMAT = 'd/m/Y'; // this is used for date()

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
const LANGUAGE_CURRENCY = 'EUR';

// Global entries for the <html> tag
const HTML_PARAMS = ' lang="de" data-bs-theme="' . BOOTSTRAP_THEME . '"';

// charset for web pages and e-mails
const CHARSET = 'utf-8';

// page title
const TITLE = STORE_NAME;

// text in includes/modules/downloads.php
const HEADER_TITLE_MY_ACCOUNT = 'Mein Konto';

// checkout procedure text
const CHECKOUT_BAR_DELIVERY = 'Versandinformationen';
const CHECKOUT_BAR_PAYMENT = 'Zahlungsweise';
const CHECKOUT_BAR_CONFIRMATION = 'Bestätigung';

// pull down default text
const PULL_DOWN_DEFAULT = '--- Bitte wählen ---';

const ERROR_NO_PAYMENT_MODULE_SELECTED = 'Bitte wählen Sie eine Zahlungsweise für Ihre Bestellung.';

const IMAGE_BUTTON_ADD_ADDRESS = 'Neue Adresse';
const IMAGE_BUTTON_BACK = 'Zurück';
const IMAGE_BUTTON_BUY_NOW = 'In den Warenkorb';
const IMAGE_BUTTON_CHANGE_ADDRESS = 'Adresse ändern';
const IMAGE_BUTTON_CHECKOUT = 'Kasse';
const IMAGE_BUTTON_CONFIRM_ORDER = 'jetzt zahlungspflichtig bestellen';
const IMAGE_BUTTON_CONTINUE = 'Weiter';
const IMAGE_BUTTON_DELETE = 'Löschen';
const IMAGE_BUTTON_LOGIN = 'Anmelden';
const IMAGE_BUTTON_IN_CART = 'In den Warenkorb';
const IMAGE_BUTTON_SEARCH = 'Suchen';
const IMAGE_BUTTON_UPDATE = 'Aktualisieren';
const IMAGE_BUTTON_UPDATE_PREFERENCES = 'Einstellungen aktualisieren';

const SMALL_IMAGE_BUTTON_DELETE = 'Löschen';
const SMALL_IMAGE_BUTTON_EDIT = 'Bearbeiten';
const SMALL_IMAGE_BUTTON_VIEW = 'zum Artikel';
const SMALL_IMAGE_BUTTON_BUY = 'in den Warenkorb';

const TEXT_CCVAL_ERROR_INVALID_DATE = 'The expiry date entered for the credit card is invalid. Please check the date and try again.';
const TEXT_CCVAL_ERROR_INVALID_NUMBER = 'The credit card number entered is invalid. Please check the number and try again.';
const TEXT_CCVAL_ERROR_UNKNOWN_CARD = 'The first four digits of the number entered are: %s. If that number is correct, we do not accept that type of credit card. If it is wrong, please try again.';

const TEXT_SEARCH_PLACEHOLDER = 'Suche';

// message for required inputs
const FORM_REQUIRED_INFORMATION = '';
const FORM_REQUIRED_INPUT = '';

// product notifications
const PRODUCT_SUBSCRIBED = '%s wurde zu Ihren beobachteten Artikeln hinzugefügt';
const PRODUCT_UNSUBSCRIBED = '%s wurde von Ihren beobachteten Artikeln entfernt';
const PRODUCT_ADDED = '%s wurde dem Warenkorb hinzugefügt';
const PRODUCT_REMOVED = '%s wurde aus dem Warenkorb entfernt';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = '';

// noscript helper
const TEXT_NOSCRIPT = <<<'EOT'
<p><strong>JavaScript scheint nicht aktiviert zu sein.</strong></p>
<p>Bitte aktivieren Sie JavaScript, um den vollen Umfang dieser Seite nutzen zu können. <br>
<a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="noreferrer">Hier</a> gibt es Informationen zum Aktivieren von Javascript in Ihrem Browser.</p>
EOT;

// for new style internal pages
const LINK_TEXT_EDIT = '<small><a class="%s" href="%s">Bearbeiten</a></small>';
const SHIPPING_FA_ICON = '<i class="fas fa-shipping-fast fa-fw fa-3x float-end"></i>';
const PAYMENT_FA_ICON = '<i class="fas fa-file-invoice-dollar fa-fw fa-3x float-end"></i>';

const ENTRY_COMMENTS = 'Wollen Sie uns etwas mitteilen?';
const ENTRY_COMMENTS_PLACEHOLDER = 'Kommentar einfügen...';

const STAR_RATING = 'Mit %s Sternen bewertet';

// added BS5 template
const NAVBAR_ICON_CART_CONTENTS = '<span class="position-relative%2$s">
  <i title="Warenkorb: %1$s Artikel in Ihrem Warenkorb" class="fas fa-shopping-cart fa-fw fa-xl"></i>
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info border">
    <span class="cart-count">%1$s</span>
  </span>
</span>';
