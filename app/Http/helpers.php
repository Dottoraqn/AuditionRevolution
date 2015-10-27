<?php

class Helpers {
  public static function setActive($path, $active = 'active') {
     return  Request::is($path) ? $active : '';
  }
}

?>
