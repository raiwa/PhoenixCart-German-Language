<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

const TABLE_HEADING_NEW_PRODUCTS = 'Neue Produkte im %s';

const TEXT_NO_PRODUCTS = 'Es gibt keine Produkte in dieser Kategorie.';
const TEXT_NUMBER_OF_PRODUCTS = 'Produkte: ';
const TEXT_SHOW = '<strong>Zeigen:</strong>';
const TEXT_BUY = 'Bestelle \'';
const TEXT_NOW = '\' jetzt';
const TEXT_ALL_CATEGORIES = 'Alle Kategorien';
const TEXT_ALL_MANUFACTURERS = 'Alle Hersteller';

// seo
if ( ($category_depth == 'top') && (!isset($_GET['manufacturers_id'])) ) {
  define('META_SEO_TITLE', 'Index Page Title');
  define('META_SEO_DESCRIPTION', 'This is the description of your site to be used in the META Description Element');
}

