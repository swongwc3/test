<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/26/2015
 * Time: 10:27 AM
 */

define('SITEURL', "http://localhost/test");
include_once('DB.php');

function get_statnamearray()
{
    global $statnamearray;
    if (isset($statnamearray))
        return $statnamearray;
    else {
        $results = DB::sql('SELECT * FROM statnames');
        foreach ($results as $stat) {
            $out[$stat['Abbr']] = $stat;
        }
        return $statnamearray = $out;
    }
}


function get_elems() {
    global $elemnamearray;
    if (isset($elemnamearray))
        return $elemnamearray;
    else {
        $results = DB::sql("SELECT * FROM element");
        foreach ($results as $elem) {
            $out[$elem['ElemID']] = $elem;
        }
        return $elemnamearray = $out;
    }
}

function get_sets() {
    global $setsarray;
    if (isset($setsarray))
        return $setsarray;
    else {
        $results = DB::sql("SELECT * FROM sets");
        foreach ($results as $set) {
            $out[$set['SetID']] = $set;
        }
        return $setsarray = $out;
    }
}

function get_types() {
    global $typesarray;
    if (isset($typesarray))
        return $typesarray;
    else {
        $results = DB::sql("SELECT * FROM type");
        foreach ($results as $type) {
            $out[$type['TypeID']] = $type;
        }
        return $typesarray = $out;
    }
}

$var = get_statnamearray();