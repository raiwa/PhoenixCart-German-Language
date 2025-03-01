<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const NAVBAR_TITLE = 'Sicherheitshinweis';
const HEADING_TITLE = 'Sicherheitshinweis';

const TEXT_INFORMATION = <<<'EOT'
Wir haben festgestellt, dass Ihr Browser eine andere SSL-Session-ID generiert hat, die auf unseren sicheren Seiten verwendet wird.<br><br>
Aus Sicherheitsgründen müssen Sie sich erneut in Ihr Profil einloggen, um mit dem Einkauf fortzufahren.<br><br>
Einige Browser können automatisch keine sichere SSL-Session-ID generieren. Wenn Sie einen solchen Browser verwenden, empfehlen wir, zu einem moderneren Browser wie <a href="https://www.microsoft.com/en-us/edge/download?form=MA13FJ" target="_blank" rel="noreferrer">Microsoft Edge</a>, <a href="https://support.google.com/chrome/answer/95346" target="_blank" rel="noreferrer">Google Chrome</a> oder <a href="https://www.mozilla.org/en-GB/firefox/" target="_blank" rel="noreferrer">Mozilla Firefox</a> zu wechseln, um unsere Seite weiterhin nutzen zu können.<br><br>
Wir haben diese Sicherheitsmaßnahme zu Ihrem Nutzen getroffen und entschuldigen uns für etwaige Unannehmlichkeiten.<br><br>
Bitte <a class="btn btn-success" role="button" href="%s">kontaktieren Sie uns</a>, wenn Sie Fragen zu diesem Anforderungen haben.
EOT;

const BOX_INFORMATION_HEADING = 'Privatsphäre und Sicherheit';
const BOX_INFORMATION = <<<'EOT'
Die von Ihrem Browser erzeugte SSL-Session ID wird von uns bei jedem Zugriff auf eine sichere Seite überprüft.<br><br>
Diese Überprüfung garantiert, dass der Zugriff tatsächlich von Ihrem Browser erfolgte und nicht von einem anderen Browser stammt.
EOT;
