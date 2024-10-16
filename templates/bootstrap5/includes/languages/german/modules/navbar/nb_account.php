<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

  const MODULE_NAVBAR_ACCOUNT_TITLE = 'Account';
  const MODULE_NAVBAR_ACCOUNT_DESCRIPTION = 'zeigt Link zum Account in der Navbar';
  
  const MODULE_NAVBAR_ACCOUNT_LOGGED_OUT = <<<'LI'
  <i title="Mein Konto" class="far fa-user fa-fw fa-xl"></i><span class="d-inline d-sm-none"> Mein Konto</span>
LI;

  const MODULE_NAVBAR_ACCOUNT_LOGGED_IN = <<<'LI'
  <span class="position-relative">
    <i class="fas fa-user fa-fw fa-xl"></i>
    <span class="d-none d-sm-inline position-absolute top-0 start-100 translate-middle badge">
      <i class="fas fa-check fa-2xl text-info"></i>
    </span>
  </span>
  <span class="d-inline d-sm-none">%s, you are logged in</span>
LI;

  const MODULE_NAVBAR_ACCOUNT_LOGIN = '<i class="fas fa-sign-in-alt fa-fw fa-xl"></i> Einloggen';
  const MODULE_NAVBAR_ACCOUNT_LOGOFF = '<i class="fas fa-sign-out-alt fa-fw fa-xl"></i> Ausloggen';
  const MODULE_NAVBAR_ACCOUNT = 'Mein Profil';
  const MODULE_NAVBAR_ACCOUNT_HISTORY = 'Meine Bestellungen';
  const MODULE_NAVBAR_ACCOUNT_EDIT = 'Meine Daten';
  const MODULE_NAVBAR_ACCOUNT_ADDRESS_BOOK = 'Mein Adressbuch';
  const MODULE_NAVBAR_ACCOUNT_PASSWORD = 'Mein Passwort';
  const MODULE_NAVBAR_ACCOUNT_REGISTER = '<i class="fas fa-pencil-alt fa-fw fa-xl"></i> Registrieren';
