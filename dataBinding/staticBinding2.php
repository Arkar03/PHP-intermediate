<?php

class One
{
  public static $name = "Akm";
  public static function authorName()
  {
    return self::authorName();
  }
}

// class Two extends One {
//     public static function authorName()
//     {
//         retrun static::$name . " and Crab!";
//     }
// }

One::authorName();