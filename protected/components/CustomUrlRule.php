<?php
class CustomUrlRule extends CBaseUrlRule {

  public function createUrl($manager,$route,$params,$ampersand) {
     return your_encrypt_method($route);
  }

  public function parseUrl($manager,$request,$pathInfo,$rawPathInfo) {
    return your_decrypt_method($pathInfo);
  }
}
?>
