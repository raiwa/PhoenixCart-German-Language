<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2022 Phoenix Cart

  Released under the GNU General Public License
*/

const NAVBAR_TITLE_1 = 'Anmelden';
const NAVBAR_TITLE_2 = 'Passwort vergessen';

const HEADING_TITLE = 'Ich habe mein Passwort vergessen!';

const TEXT_MAIN = 'Wenn Sie Ihr Passwort vergessen haben, geben Sie Ihre E-Mail-Adresse ein und wir senden Ihnen Anweisungen, wie Sie Ihr Passwort sicher ändern können.';

const TEXT_PASSWORD_RESET_INITIATED = 'Eine Email wurde an Ihre angegebene Adresse gesendet. Folgen Sie dem darin enthaltenen Link, um Ihr Passwort zu ändern. Der Link ist für 24 Stunden gültig';

const TEXT_NO_EMAIL_ADDRESS_FOUND = 'Fehler: Die eingegebene eMail-Adresse ist nicht registriert. Bitte versuchen Sie es noch einmal.';

const EMAIL_PASSWORD_RESET_SUBJECT = STORE_NAME . ' - Neues Passwort';
const EMAIL_PASSWORD_RESET_BODY = 'Ein neues Passwort für Ihr Konto bei ' . STORE_NAME  . " wurde angefordert\n\n" . 'Folgen Sie diesem Link, um Ihr Passwort sicher zu ändern:' . "\n\n" . '%s' . "\n\n" . 'Dieser Link wird automatisch nach 24 Stunden, oder nachdem Ihr Passwort geändert wurde, verworfen.' . "\n\n" . 'Wenn Sie Hilfe mit einem unserer Online-Dienste benötigen, mailen Sie an: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

const ERROR_ACTION_RECORDER = ' Fehler: Ein Link zum Zurücksetzen des Passworts wurde bereits gesendet. Versuchen Sie es in %s Minuten.';
const IMAGE_BUTTON_RESET_PASSWORD = 'Passwort ändern';
