<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

class hook_admin_siteWide_fontAwesome {
  var $version = '5.13.1';

  var $sitestart = null;

  function listen_injectSiteStart() {
    $this->sitestart .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />' . PHP_EOL;

    return $this->sitestart;
  }
  
}
