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

	const TEXT_MAIN = 'Wenn Sie Ihr Passwort vergessen haben, geben Sie bitte Ihre E-Mail-Adresse ein. Wir senden Ihnen Anweisungen, wie Sie Ihr Passwort sicher zurücksetzen können.';

	const TEXT_PASSWORD_RESET_INITIATED = 'Bitte überprüfen Sie Ihre E-Mail, um Anweisungen zum Zurücksetzen Ihres Passworts zu erhalten. Diese enthalten einen Link, der nur 24 Stunden gültig ist oder bis Ihr Passwort aktualisiert wurde.';

	const TEXT_NO_EMAIL_ADDRESS_FOUND = 'Fehler: Diese E-Mail-Adresse ist nicht in unseren Daten vorhanden, bitte versuchen Sie es erneut.';

	const EMAIL_PASSWORD_RESET_SUBJECT = STORE_NAME . ' - Neues Passwort';
	const EMAIL_PASSWORD_RESET_BODY = 'Für Ihr Konto bei ' . STORE_NAME . ' wurde ein neues Passwort angefordert.' . "\n\n" . 'Bitte folgen Sie diesem persönlichen Link, um Ihr Passwort sicher zu ändern:' . "\n\n" . '%s' . "\n\n" . 'Dieser Link wird automatisch nach 24 Stunden oder nach Änderung Ihres Passworts ungültig.' . "\n\n" . 'Für Hilfe zu unseren Dienstleistungen schreiben Sie bitte an: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n";

	const ERROR_ACTION_RECORDER = 'Fehler: Es wurde bereits ein Link zum Zurücksetzen des Passworts gesendet. Bitte versuchen Sie es erneut in %s Minuten.';

	const IMAGE_BUTTON_RESET_PASSWORD = 'Mein Passwort zurücksetzen';
