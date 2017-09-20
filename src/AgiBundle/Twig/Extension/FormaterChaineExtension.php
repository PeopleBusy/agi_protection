<?php
/**
 * Created by PhpStorm.
 * User: rachid
 * Date: 14/09/2017
 * Time: 00:44
 */

namespace AgiBundle\Twig\Extension;


class FormaterChaineExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('formaterChaine', array($this, 'formaterChaine')),
        );
    }

    public function formaterChaine($s){
        if ($s == '0' || $s == 0) {

            return "00:00";

        }else{

            return $s;

        }

    }


    public function getName()
    {
        return 'formaterChaine_extension';
    }

}