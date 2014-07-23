<?php

use Jenssegers\Mongodb\Model as Eloquent;

class Breach extends Eloquent {

    protected $collection = 'breaches';
    //protected static $unguarded = true;
    protected $fillable = array('OrganizationName','DatesOfBreach','ReportedDate','Notes');
}
