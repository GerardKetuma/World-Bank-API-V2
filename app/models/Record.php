<?php

class Record extends Eloquent {
  protected $guarded = array();

  public static $rules = array();

  public function country() {
    return $this->belongsTo('Country');
  }
}
