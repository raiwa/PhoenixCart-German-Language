<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/

  const MODULE_NAVBAR_SHOPPING_CART_TITLE = 'Warenkorb';
  const MODULE_NAVBAR_SHOPPING_CART_DESCRIPTION = 'Zeigt den Warenkorb in der Navbar';

  const MODULE_NAVBAR_SHOPPING_CART_CONTENTS = <<<'SC'
<span class="position-relative">
  <i title="Warenkorb: %1$s Artikel in Ihrem Warenkorb" class="fas fa-shopping-cart fa-fw fa-xl"></i>
  <span class="d-none d-sm-inline position-absolute top-0 start-100 translate-middle badge rounded-pill bg-info border">
    <span class="cart-count">%1$s</span>
  </span>
</span>
<span class="d-inline d-sm-none"><span class="cart-count">%1$s</span> Artikel in Ihrem Warenkorb</span>
SC;

  const MODULE_NAVBAR_SHOPPING_CART_NO_CONTENTS = '<i class="fas fa-shopping-cart fa-fw"></i> 0 Produkt';
  const MODULE_NAVBAR_SHOPPING_CART_HAS_CONTENTS = '<span class="cart-count">%s</span> Artikel: <span class="cart-value">%s</span>';
  const MODULE_NAVBAR_SHOPPING_CART_VIEW_CART = '<i class="fas fa-eye fa-fw"></i> zeige Warenkorb';
  const MODULE_NAVBAR_SHOPPING_CART_CHECKOUT = '<i class="fas fa-angle-right fa-fw"></i> Kasse';

  const MODULE_NAVBAR_SHOPPING_CART_PRODUCT = '%s x %s';
