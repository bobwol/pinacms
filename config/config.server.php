<?php
/*
* PinaCMS
* 
* THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
* "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
* LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
* A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
* OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
* SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
* LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
* DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
* THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
* (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
* OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*
* @copyright � 2010 Dobrosite ltd.
*/

if (!defined('PATH')){ exit; }



    define('DB_HOST', 'localhost');
    define('DB_PORT', '3306');
    define('DB_USER', '');
    define('DB_PASS', '');
    define('DB_BASE', '');
    define('DB_CONNECTION_CHARSET', 'utf8');
    define('DB_DEFAULT_ENGINE', 'InnoDB');

    define ('MEMCACHE_HOST', '127.0.0.1');

    define('SITE_HOST', 'localhost');
    define('SITE_PATH', '');
    define('SITE_BASE', 'http://'.SITE_HOST.'/');
    define('SITE', SITE_BASE.SITE_PATH);

    define('SITE_CHARSET', 'utf-8');
    define('SITE_TIMEZONE', 'Europe/Moscow');

    define ('MAIL_ADMIN', '');
    define ("MAIL_CHARSET", "utf-8");
    define ("MAIL_REPLY", "");
    define ("MAIL_DEBUG", 1);
    define ("MAIL_FOOTER", "
---");

    define('CATALOG_PAGING_PER_PAGE', 12);
    define('CATALOG_PAGING_PAGES', 5);
    define('CART_INTEREST_PRODUCTS_LIMIT', 10);

    define('PRODUCT_THUMB_WIDTH',  160);
    define('PRODUCT_THUMB_HEIGHT', 107);

    define ('CATEGORY_THUMB_WIDTH', '100');
    define ('CATEGORY_THUMB_HEIGHT', '100');

    define('CATALOG_ADMIN_SUBCATEGORIES_PRODUCTS_SHOW', true);
    define('BLOCK_EXCEPTIONS', true);

    define('TEMPLATE_DEFAULT', '');