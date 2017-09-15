<?php
/**
 * Created by PhpStorm.
 * User: rachid
 * Date: 14/09/2017
 * Time: 00:44
 */

namespace AgiBundle\Twig\Extension;


class SumHeureExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('sumheure', array($this, 'sumOfTwoTimes')),
        );
    }

    public function sumOfTwoTimes($time1, $time2){
        $h1 = intval(mbsplit(":", $time1)[0]);
        $m1 = intval(mbsplit(":", $time1)[1]);

        $h2 = intval(mbsplit(":", $time2)[0]);
        $m2 = intval(mbsplit(":", $time2)[1]);

        $h = $h1 + $h2;
        $m = $m1 + $m2;

        if($m >= 60){
            $h += floor($m / 60);
            $m = ($m % 60);
        }
        if($h < 10){
            $h = '0' . $h;
        }
        if($m < 10){
            $m = '0' . $m;
        }
        $time = $h . ':' . $m;
        /*if($h == "00" && $m == "00"){
            $time = 0;
        }*/

        return $time;
    }


    public function getName()
    {
        return 'sumheure_extension';
    }

}