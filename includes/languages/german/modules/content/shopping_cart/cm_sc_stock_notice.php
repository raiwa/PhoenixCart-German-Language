<?php
/*
  $Id$

  Copyright (c) 2016:
    Dan Cole - @Dan Cole
    James Keebaugh - @kymation
    Lambros - @Tsimi
    Rainer Schmied - @raiwa

  All rights reserved.
  
  Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

  1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

  2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

  3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

const MODULE_CONTENT_SC_STOCK_NOTICE_TITLE = 'Hinweis: Nicht auf Lager';
const MODULE_CONTENT_SC_STOCK_NOTICE_DESCRIPTION = 'Zeigt den Hinweis: Nicht auf Lager im Warenkorb.';
  
const MODULE_CONTENT_SC_STOCK_NOTICE_CANT_CHECKOUT = '<p><b>Die mit <span class="align-middle">' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . <<<'EOT'
</span> markierten Produkte, sind leider nicht in der von Ihnen gewünschten Menge auf Lager.</b></p>
<p>Bitte reduzieren Sie Ihre Bestellmenge für die gekennzeichneten Produkte, 
EOT
. STOCK_MARK_PRODUCT_OUT_OF_STOCK . ', vielen Dank.</p>';

const MODULE_CONTENT_SC_STOCK_NOTICE_CAN_CHECKOUT = '<p><b>Die mit <span class="align-middle">' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . <<<'EOT'
</span> markierten Produkte, sind leider nicht in der von Ihnen gewünschten Menge auf Lager.</b></p>
<p>Sie können sie trotzdem kaufen. Wir versenden sofort, was vorrätig ist, und die restliche Menge später nachsenden.</p>
EOT;
