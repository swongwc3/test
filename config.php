<?php
/**
 * Created by PhpStorm.
 * User: Sharon
 * Date: 6/26/2015
 * Time: 10:27 AM
 */

define('SITEURL', "http://localhost/test");

function get_statnamearray()
{
    global $statnamearray;
    if (isset($statnamearray))
        return $statnamearray;
    else {
        $results = DB::sql('SELECT * FROM statnames');
        foreach ($results as $stat) {
            $out[$stat['abbr']] = $stat;
        }
        return $statnamearray = $out;
    }

}

$var = get_statnamearray();
echo $var['HP']['fullname'];