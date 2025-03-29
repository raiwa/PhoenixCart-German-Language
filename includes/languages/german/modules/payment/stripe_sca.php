<?php
/*
* $Id: stripe_sca.php
* $Loc: /includes/languages/english/modules/payment/
*
* Name: StripeSCA
* Version: 1.70
* Release Date: 2025-03-02
* Author: Rainer Schmied
* 	 phoenixcartaddonsaddons.com / raiwa@phoenixcartaddons.com
*
* License: Released under the GNU General Public License
*
* Comments: Author: [Rainer Schmied @raiwa]
* Author URI: [www.phoenixcartaddons.com]
* 
* CE Phoenix, E-Commerce made Easy
* https://phoenixcart.org
* 
* Copyright (c) 2021 Phoenix Cart
* 
* 
*/
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_TITLE = 'Stripe SCA';
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_PUBLIC_TITLE = 'Kreditkarte (Stripe SCA)';
  const MODULE_PAYMENT_STRIPE_SCA_TEXT_DESCRIPTION = '<i class="fas fa-external-link-alt me-2"></i><a href="https://www.stripe.com" target="_blank" rel="noopener">Stripe-Website besuchen</a>';

  const MODULE_PAYMENT_STRIPE_SCA_ERROR_ADMIN_CURL = 'Dieses Modul erfordert, dass cURL in PHP aktiviert ist, und wird nicht geladen, bis es auf diesem Webserver aktiviert wurde.';
  const MODULE_PAYMENT_STRIPE_SCA_ERROR_ADMIN_CONFIGURATION = 'Dieses Modul wird nicht geladen, bis die Publishable Key und Secret Key Parameter konfiguriert wurden. Bitte bearbeiten und konfigurieren Sie die Einstellungen dieses Moduls.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_STATUS_TITLE = 'Stripe SCA-Modul aktivieren';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_STATUS_DESC = 'Möchten Sie Stripe v3-Zahlungen akzeptieren?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SERVER_TITLE = 'Transaktionsserver';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SERVER_DESC = 'Transaktionen auf dem Produktionsserver oder auf dem Testserver durchführen.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_PUB_TITLE = 'Live Publishable API Key';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_PUB_DESC = 'Der veröffentlichbare API-Schlüssel des Stripe-Kontos für Produktions-Transaktionen.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_SECRET_TITLE = 'Live Secret API Key';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_SECRET_DESC = 'Der geheime API-Schlüssel des Stripe-Kontos für die Verwendung mit dem Live Publishable Key.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_WEBHOOK_TITLE = 'Live Webhook Signing Secret';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LIVE_WEBHOOK_DESC = 'Das Live-Webhook-Signaturgeheimnis des Stripe-Kontos für das erstellte Webhook zur Überwachung von payment_intent.succeeded-Ereignissen.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_PUB_TITLE = 'Test Publishable API Key';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_PUB_DESC = 'Der veröffentlichbare API-Schlüssel des Stripe-Kontos für Testzwecke.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_SECRET_TITLE = 'Test Secret API Key';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_SECRET_DESC = 'Der geheime API-Schlüssel des Stripe-Kontos für die Verwendung mit dem Test Publishable Key.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_WEBHOOK_TITLE = 'Test Webhook Signing Secret';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TEST_WEBHOOK_DESC = 'Das Test-Webhook-Signaturgeheimnis des Stripe-Kontos für das erstellte Webhook zur Überwachung von payment_intent.succeeded-Ereignissen.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TOKENS_TITLE = 'Token erstellen';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TOKENS_DESC = 'Token für Kartenzahlungen erstellen und speichern, damit Kunden diese für ihren nächsten Einkauf verwenden können?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_CARD_DATA_TITLE = 'Einzeiliges Kartendaten-Eingabefeld verwenden';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_CARD_DATA_DESC = 'Einzeiliges Kartendaten-Eingabefeld verwenden, wenn auf "Wahr" gesetzt, oder drei separate Eingabefelder, wenn auf "Falsch" gesetzt.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LOG_TITLE = 'Ereignisse protokollieren';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_LOG_DESC = 'Aufrufe von Stripe-Funktionen protokollieren?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_METHOD_TITLE = 'Transaktionsmethode';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_METHOD_DESC = 'Die Verarbeitungsmethode für jede Transaktion.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_NEW_ORDER_TITLE = 'Neuen Bestellstatus setzen';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_NEW_ORDER_DESC = 'Den Status von Bestellungen, die mit diesem Zahlungsmodul erstellt wurden, auf diesen Wert setzen.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROCESSED_TITLE = 'Bestellstatus für verarbeitete Bestellungen setzen';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROCESSED_DESC = 'Den Status von erfolgreich verarbeiteten Bestellungen mit diesem Zahlungsmodul auf diesen Wert setzen.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TRANSACTION_TITLE = 'Transaktions-Bestellstatus';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_TRANSACTION_DESC = 'Transaktionsinformationen in diesem Bestellstatus-Level einfügen.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_ZONE_TITLE = 'Zahlungszone';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_ZONE_DESC = 'Wenn eine Zone ausgewählt ist, wird diese Zahlungsmethode nur für diese Zone aktiviert.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SSL_TITLE = 'SSL-Zertifikat überprüfen';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SSL_DESC = 'SSL-Zertifikat des Gateway-Servers bei der Verbindung überprüfen?';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROXY_TITLE = 'Proxy-Server';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_PROXY_DESC = 'API-Anfragen über diesen Proxy-Server senden. (Host:Port, z.B.: 123.45.67.89:8080 oder proxy.example.com:8080)';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_EMAIL_TITLE = 'Debug-E-Mail-Adresse';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_EMAIL_DESC = 'Alle Parameter einer ungültigen Transaktion werden an diese E-Mail-Adresse gesendet.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_DAYS_DELETE_TITLE = 'Tage bis zur automatischen Löschung unvollständiger Stripe-Bestellungen';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_DAYS_DELETE_DESC = 'Nach wie vielen Tagen sollen unvollständige Stripe-Bestellungen automatisch gelöscht werden? Leer lassen, um zu deaktivieren.';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SORT_TITLE = 'Sortierreihenfolge der Anzeige';
  const MODULE_PAYMENT_STRIPE_SCA_ADMIN_SOR_DESC = 'Sortierreihenfolge der Anzeige. Die niedrigste, nicht-null Zahl wird zuerst angezeigt.';

  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_NEW = 'Neue Karte eingeben';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_OWNER = 'Karteninhaber';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_TYPE = 'Kartennummer > dann Ablaufdatum > dann 3 Zahlen auf der Rückseite (CVC)';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_NUMBER = 'Kartennummer';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_EXPIRY = 'Ablaufdatum (MM/JJ)';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_CVC = '3 Zahlen auf der Rückseite (CVC)';
  const MODULE_PAYMENT_STRIPE_SCA_CREDITCARD_SAVE = 'Karte für nächsten Einkauf speichern?';
  const MODULE_PAYMENT_STRIPE_SCA_MISSING_INTENT = 'Fehlende Intent-ID';
  const MODULE_PAYMENT_STRIPE_SCA_MISSING_CUSTOMER_TOKEN = 'Fehlendes Kundentoken';
  const MODULE_PAYMENT_STRIPE_SCA_MISSING_CARD_FOR_TOKEN = 'Keine Kartendetails für Token gefunden';

  const MODULE_PAYMENT_STRIPE_SCA_WEBHOOK_PARAMETER = 'Unerwarteter Parameterwert empfangen';
  const MODULE_PAYMENT_STRIPE_SCA_SECRET_ERROR = 'Ungültiges Webhook-Signaturgeheimnis';
  const MODULE_PAYMENT_STRIPE_SCA_WEBHOOK_SERVER = 'Serverfehler – Protokolle überprüfen';

  const MODULE_PAYMENT_STRIPE_SCA_ERROR_TITLE = 'Es gab einen Fehler bei der Verarbeitung Ihrer Kreditkarte';
  const MODULE_PAYMENT_STRIPE_SCA_ERROR_GENERAL = 'Bitte versuchen Sie es erneut. Falls das Problem weiterhin besteht, versuchen Sie eine andere Zahlungsmethode.';
  const MODULE_PAYMENT_STRIPE_SCA_ERROR_CARDSTORED = 'Die gespeicherte Karte konnte nicht gefunden werden. Bitte versuchen Sie es erneut oder wählen Sie eine andere Zahlungsmethode.';

  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_LINK_TITLE = 'API-Serververbindung testen';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_TITLE = 'API-Serververbindungstest';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_GENERAL_TEXT = 'Verbindung zum Server wird getestet...';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_BUTTON_CLOSE = 'Schließen';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_TIME = 'Verbindungszeit:';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_SUCCESS = 'Erfolgreich!';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_FAILED = 'Fehlgeschlagen! Bitte überprüfen Sie die Einstellungen für die SSL-Zertifikatsüberprüfung und versuchen Sie es erneut.';
  const MODULE_PAYMENT_STRIPE_SCA_DIALOG_CONNECTION_ERROR = 'Ein Fehler ist aufgetreten. Bitte aktualisieren Sie die Seite, überprüfen Sie Ihre Einstellungen und versuchen Sie es erneut.';

  const MODULE_PAYMENT_STRIPE_SCA_PROCESSING_TEXT = 'Vielen Dank. Ihre Bestellung wird nun bearbeitet...';
  const MODULE_PAYMENT_STRIPE_SCA_FINALIZE_TEXT = 'Abschließen und bezahlen';
