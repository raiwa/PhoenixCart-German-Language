<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2026 Phoenix Cart

  Released under the GNU General Public License
*/

const MODULE_NOTIFICATIONS_PASSWORD_FORGOTTEN_TITLE = 'Benachrichtigung: Passwort vergessen';
const MODULE_NOTIFICATIONS_PASSWORD_FORGOTTEN_DESCRIPTION = 'Sendet eine E-Mail mit dem Link zum Zurücksetzen des Passworts.';

const MODULE_NOTIFICATIONS_PASSWORD_FORGOTTEN_TEXT_SUBJECT = STORE_NAME . ' - Passwort zurücksetzen';
const MODULE_NOTIFICATIONS_PASSWORD_FORGOTTEN_TEXT_BODY = 'Wir haben eine Anfrage zum Zurücksetzen des Passworts für Ihr Konto bei ' . STORE_NAME . ' erhalten.' . "\n\n" . 'Klicken Sie auf den folgenden Link, um ein neues Passwort zu wählen:' . "\n\n%s\n\n" . 'Dieser Link läuft in 24 Stunden ab.' . "\n\n" . 'Benötigen Sie Hilfe? Kontaktieren Sie uns unter: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n";
