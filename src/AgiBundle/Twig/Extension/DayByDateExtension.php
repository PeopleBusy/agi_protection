<?php
/**
 * Created by PhpStorm.
 * User: rachid
 * Date: 14/09/2017
 * Time: 00:44
 */

namespace AgiBundle\Twig\Extension;

use \DateTime;

class DayByDateExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('dayByDate', array($this, 'isSaturday')),
        );
    }

    public function isSaturday($date){
        $is_samedi = false;

        //$input_date = DateTime::createFromFormat('d/m/Y', $date);


        if($date->format('N') == 6){
            $is_samedi = true;
        }

        return strval($date->format('N'));

        //return $is_samedi;
    }


    public function getName()
    {
        return 'dayByDate_extension';
    }

}