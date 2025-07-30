<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Paypal Standard Payments
  Basic Paypal Payment Module for Phoenix Cart
  More sophisticated Paypal integration available at https://phoenixcart.org/forum/addons/

  author: John Ferguson @BrockleyJohn phoenix@cartmart.uk

  Copyright (c) 2024 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_TITLE = 'PayPal Standard-Zahlungen';
const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_PUBLIC_TITLE = 'PayPal';
const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_DESCRIPTION = '<div class="alert alert-warning text-break">Aktivieren Sie die automatische Rückkehr für Website-Zahlungen in Ihren PayPal-Einstellungen und konfigurieren Sie die Rückgabe-URL auf:<br>%s<br><br>Aktivieren Sie PDT und kopieren Sie das Identitäts-Token in das Modul.<br><br>Aktivieren Sie die Sofortige Zahlungsbenachrichtigung und setzen Sie die Benachrichtigungs-URL auf:<br>%s</div><i class="fas fa-external-link-alt me-2"></i><a href="https://www.paypal.com" target="_blank" rel="noopener">PayPal-Website</a>';

const MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_RETURN_BUTTON = 'Zurück zu ' . STORE_NAME; // max. 60 Zeichen

const MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CONFIGURATION_SELLER = 'Dieses Modul wird nicht geladen, bis die Verkäufer-E-Mail konfiguriert wurde. Bitte bearbeiten und konfigurieren Sie die Einstellungen dieses Moduls.';
const MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CONFIGURATION_PDT = 'Das Modul wird ohne das PDT-Identitäts-Token zur zusätzlichen Zahlungssicherheit nicht geladen.';

const MODULE_PAYMENT_PAYPAL_STANDARD_CONFIG_ERROR = 'PayPal ist nicht korrekt konfiguriert; bitte versuchen Sie eine andere Zahlungsmethode oder kontaktieren Sie uns.';
const MODULE_PAYMENT_PAYPAL_STANDARD_UPDATE_COMMENT_ERROR = 'Die Bestellkommentare konnten nicht gespeichert werden. Bitte versuchen Sie es erneut, und wenn das Problem weiterhin besteht, kontaktieren Sie uns.';
const MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_VALIDATE_FAIL = 'Die PayPal-Transaktion konnte nicht überprüft werden – bitte versuchen Sie es erneut. Falls das Problem weiterhin besteht, versuchen Sie eine andere Zahlungsmethode oder kontaktieren Sie uns.';

const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_LINK_TEXT = 'Serververbindung testen';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TITLE = 'API-Serververbindungstest';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_GENERAL_TEXT = 'Verbindung zum Server wird getestet...';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_CLOSE = 'Schließen';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TIME = 'Verbindungszeit:';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_SUCCESS = 'Erfolgreich!';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_FAILED = 'Verbindung fehlgeschlagen: Bitte überprüfen Sie Ihre Einstellungen und versuchen Sie es erneut.';
const MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_ERROR = 'Ein Fehler ist aufgetreten. Bitte aktualisieren Sie die Seite, überprüfen Sie Ihre Einstellungen und versuchen Sie es erneut.';
