<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2024 Phoenix Cart

  Released under the GNU General Public License
*/

const HEADING_TITLE = 'Vorlagen für ausgehende E-Mails';

const BUTTON_INSERT_NEW_SLUG = 'Neue E-Mail-Vorlage einfügen';
const HEADING_DELETE_SLUG = 'Diese E-Mail-Vorlage löschen';
const HEADING_NEW_SLUG = 'Neue E-Mail-Vorlage';

const SLUG_SELECT = '--- Bitte Auswählen ---';

const TABLE_HEADING_SLUG = 'Vorlagenname';
const TABLE_HEADING_TITLE = 'Titel';
const TABLE_HEADING_DATE_ADDED = 'Hinzugefügt am';	
const TABLE_HEADING_ACTION = 'Aktion';

const TEXT_OUTGOING_SLUG = 'Vorlagenname';
const TEXT_OUTGOING_SLUG_TITLE = 'E-Mail-Titel';
const TEXT_OUTGOING_SLUG_TEXT = 'E-Mail-Text';

const MISSING_SLUGS = '<div class="alert alert-danger">Achtung: Diese Scheduler-Module existieren und MÜSSEN eine Vorlage dafür haben!<br><b>%s</b></div>';

const TEXT_HEADING_NEW_OUTGOING_EMAIL = 'Neue E-Mail-Vorlage hinzufügen';
const TEXT_HEADING_EDIT_OUTGOING_EMAIL = 'E-Mail-Vorlage bearbeiten';
const TEXT_HEADING_DELETE_OUTGOING_EMAIL = 'E-Mail aus der Warteschlange löschen';

const TEXT_OUTGOING_DATE = 'Senden Am:';
const TEXT_OUTGOING_EMAIL = 'E-Mail-Adresse:';

const TEXT_NEW_INTRO = 'Bitte füllen Sie die folgenden Informationen für die neue E-Mail aus';
const TEXT_EDIT_INTRO = 'Bitte nehmen Sie alle erforderlichen Änderungen vor';
const TEXT_DELETE_INTRO = 'Sind Sie sicher, dass Sie diese E-Mail löschen möchten?';

const TEXT_DATE_ADDED = 'Hinzugefügt am: %s';
const TEXT_LAST_MODIFIED = 'Zuletzt geändert: %s';

const TEXT_DISPLAY_NUMBER_OF_OUTGOING = 'Zeige <b>%s</b> bis <b>%s</b> von <b>%s</b> E-Mail-Vorlagen';
const IMAGE_VIEW_EMAIL = 'Diese E-Mail anzeigen';

$available_merge_tags = ['{{FNAME}}' => 'Vorname',
                         '{{LNAME}}' => 'Nachname',
                         '{{EMAIL}}' => 'E-Mail-Adresse'];

const GET_HELP_LINK = 'https://phoenixcart.org/phoenixcartwiki/index.php?title=Queued_Emails';
const GET_ADDONS_LINKS = [ADDONS_COMMERCIAL => 'https://phoenixcart.org/forum/app.php/addons/commercial/queued_emails-48',];
