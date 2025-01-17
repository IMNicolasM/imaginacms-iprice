<?php

namespace Modules\Iprice\Entities;

class Type
{
  const PERCENTAGE = 1;
  const FIXEDVALUE = 2;

  private $types;

  public function __construct()
  {
    $this->types = [
      self::PERCENTAGE => ['title' => trans('iprice::tariffs.types.percentage'), 'id' => self::PERCENTAGE, 'icon' => 'fa-solid fa-percent'],
      self::FIXEDVALUE => ['title' => trans('iprice::tariffs.types.fixedvalue'), 'id' => self::FIXEDVALUE, 'icon' => 'fa-solid fa-value-absolute'],
    ];
  }
}
