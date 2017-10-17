<?php

/* AgiBundle:Default/agent:pdf.html.twig */
class __TwigTemplate_c821da491527066727b3bdbdb430a3ce649cfee08808651ccad43a467c16d956 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a8573a020e4ef16239e2cc7f9a75137b089ff720d955579e80ada4a3d4b5425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a8573a020e4ef16239e2cc7f9a75137b089ff720d955579e80ada4a3d4b5425->enter($__internal_2a8573a020e4ef16239e2cc7f9a75137b089ff720d955579e80ada4a3d4b5425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:pdf.html.twig"));

        $__internal_be53b68faaaefb6c7beffd6776b90e5f3d2faf21d775c9158c630bc4e1cc6c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be53b68faaaefb6c7beffd6776b90e5f3d2faf21d775c9158c630bc4e1cc6c74->enter($__internal_be53b68faaaefb6c7beffd6776b90e5f3d2faf21d775c9158c630bc4e1cc6c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:pdf.html.twig"));

        // line 1
        echo "<style type=\"text/css\">
    table {width: 100% !important; border-collapse: collapse !important;}
    .header td {width: 50% !important; vertical-align: top;}
    .text-left {text-align: left;}
    .text-right {text-align: right;}
    .text-center {text-align: center;}
    .separator {height: 5px;}
    .breakW {word-wrap: break-word !important;}
    .content td {border: solid 1px #CFD1D2; padding: 2px;}
    .thcontent th {border: solid 1px #000000; padding: 2px; background-color: #000000; color: #ffffff;}
    .tfcontent th {border: solid 1px #000000; padding: 2px; background-color: red; color: #ffffff;}
    .bBlackFontWhite {background-color: yellow; color: #000000; font-weight: bold;}
    .redFontWhite {background-color: red !important; color: #000000 !important; font-weight: bold !important;}
</style>

<page backtop=\"0\" backright=\"0\" backbottom=\"0\" backleft=\"0\" pageset=\"old\">


    <table class=\"header\">
        <tr>
            <td class=\"text-left\">
                <img class=\"\" style=\"width: 60px;height: 60px;\" src=\".";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\">
            </td>
        </tr>
    </table>

    <div class=\"text-center\" style=\"position:absolute;top: 0px; width: 100%; font-size: 20px;\">
        <span class=\"\" >PLANNING DU ";
        // line 28
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</span>
    </div>

    <div class=\"text-right\" style=\"position:absolute;top: 40px; width: 100%;font-style: italic;\">
        <span style=\"\">Agent: </span>
        <span style=\"font-weight: bold; color: green;\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agent"] ?? $this->getContext($context, "agent")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agent"] ?? $this->getContext($context, "agent")), "prenom", array()), "html", null, true);
        echo "</span>
    </div>

    <div class=\"separator\"></div>

    <table id=\"\" class=\"content\">
        <thead class=\"thcontent\">
            <tr>
                <th class=\"breakW\">Client</th>
                <th class=\"text-center\">Date début</th>
                <th class=\"text-center\">Date fin</th>
                <th class=\"text-center\">Panier</th>
                <th class=\"text-center\">HJ</th>
                <th class=\"text-center\">HN</th>
                <th class=\"text-center\">TH</th>
                <th class=\"text-center\">HD</th>
                <th class=\"text-center\">HF</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vacations"] ?? $this->getContext($context, "vacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 54
            echo "            ";
            if (($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureFinVac", array())) == "6")) {
                // line 55
                echo "                <tr class=\"bBlackFontWhite\">
            ";
            } elseif (($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute(            // line 56
$context["v"], "heureDebVac", array())) == "6")) {
                // line 57
                echo "                <tr class=\"bBlackFontWhite\">
            ";
            } elseif (($this->getAttribute(            // line 58
$context["v"], "heureDimanche", array()) == "00:00")) {
                // line 59
                echo "                <tr class=\"\">
            ";
            } else {
                // line 61
                echo "                <tr class=\"bBlackFontWhite\">
            ";
            }
            // line 63
            echo "
                <td class=\"breakW\"><span class=\"\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "site", array()), "nomSite", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureDebVac", array()), "d/m/Y H:i"), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureFinVac", array()), "d/m/Y H:i"), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heurePanier", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\FormaterChaineExtension')->formaterChaine($this->getAttribute($context["v"], "heureJour", array())), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\FormaterChaineExtension')->formaterChaine($this->getAttribute($context["v"], "heureNuit", array())), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes($this->getAttribute($context["v"], "heureJour", array()), $this->getAttribute($context["v"], "heureNuit", array())), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\FormaterChaineExtension')->formaterChaine($this->getAttribute($context["v"], "heureDimanche", array())), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\FormaterChaineExtension')->formaterChaine($this->getAttribute($context["v"], "heureFerie", array())), "html", null, true);
            echo "</span></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
        </tbody>
        <tfoot class=\"tfcontent\">
            <tr>
                <th class=\"\" colspan=\"3\"></th>
                <th class=\"text-center\">TP:<span class=\"badge bg-red\"> ";
        // line 80
        echo twig_escape_filter($this->env, ($context["thp"] ?? $this->getContext($context, "thp")), "html", null, true);
        echo "</span></th>
                <th class=\"text-center\">THJ:<span class=\"badge bg-red\"> ";
        // line 81
        echo twig_escape_filter($this->env, ($context["thj"] ?? $this->getContext($context, "thj")), "html", null, true);
        echo "</span></th>
                <th class=\"text-center\">THN:<span class=\"badge bg-red\"> ";
        // line 82
        echo twig_escape_filter($this->env, ($context["thn"] ?? $this->getContext($context, "thn")), "html", null, true);
        echo "</span></th>
                <th class=\"text-center\">THM:<span class=\"badge bg-red\"> ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes(($context["thj"] ?? $this->getContext($context, "thj")), ($context["thn"] ?? $this->getContext($context, "thn"))), "html", null, true);
        echo "</span></th>
                <th class=\"text-center\">THD:<span class=\"badge bg-red\"> ";
        // line 84
        echo twig_escape_filter($this->env, ($context["thd"] ?? $this->getContext($context, "thd")), "html", null, true);
        echo "</span></th>
                <th class=\"text-center\">THF:<span class=\"badge bg-red\"> ";
        // line 85
        echo twig_escape_filter($this->env, ($context["thf"] ?? $this->getContext($context, "thf")), "html", null, true);
        echo "</span></th>
            </tr>
        </tfoot>
    </table>

    <div class=\"separator\"></div>

    <div style=\"position:absolute;bottom: 50px; width: 100%;\">
        <table id=\"\" style=\"table-layout: fixed; width: 100%;\" class=\"content\">
            <thead class=\"thcontent\">
            <tr>
                <th style=\"width: 50%;\" class=\"text-center\">Signature de la Direction</th>
                <th style=\"width: 50%;\" class=\"text-center\">Signature de l'agent</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style=\"width: 50%; height: 3px;\" class=\"text-center\"><h1></h1></td>
                <td style=\"width: 50%; height: 3px;\"class=\"text-center\"><h1></h1></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class=\"separator\"></div>

    <div class=\"text-center\" style=\"position:absolute;bottom: 0px; width: 100%;\">
        <span style=\"color: red; font-size: 10px;\" >Siège Social : 62 rue du Solayer – 63100 CLERMONT-FERRAND - Tel : 04.73.92.48.56 - Télécopie : 04.73.92.29.68</span><br>
        <span style=\"font-size: 10px;\">N° d'autorisation CNAPS : AUT-063-2113-09-22-20140367933 ; Article L612-14 du code de la sécurité intérieure </span><br>
        <span style=\"font-size: 10px;\">L’autorisation administrative préalable ne confère aucun caractère officiel à l’entreprise ou aux personnes qui en bénéficient.</span>
    </div>


</page>";
        
        $__internal_2a8573a020e4ef16239e2cc7f9a75137b089ff720d955579e80ada4a3d4b5425->leave($__internal_2a8573a020e4ef16239e2cc7f9a75137b089ff720d955579e80ada4a3d4b5425_prof);

        
        $__internal_be53b68faaaefb6c7beffd6776b90e5f3d2faf21d775c9158c630bc4e1cc6c74->leave($__internal_be53b68faaaefb6c7beffd6776b90e5f3d2faf21d775c9158c630bc4e1cc6c74_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/agent:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 85,  182 => 84,  178 => 83,  174 => 82,  170 => 81,  166 => 80,  159 => 75,  150 => 72,  146 => 71,  142 => 70,  138 => 69,  134 => 68,  130 => 67,  126 => 66,  122 => 65,  118 => 64,  115 => 63,  111 => 61,  107 => 59,  105 => 58,  102 => 57,  100 => 56,  97 => 55,  94 => 54,  90 => 53,  65 => 33,  57 => 28,  48 => 22,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\">
    table {width: 100% !important; border-collapse: collapse !important;}
    .header td {width: 50% !important; vertical-align: top;}
    .text-left {text-align: left;}
    .text-right {text-align: right;}
    .text-center {text-align: center;}
    .separator {height: 5px;}
    .breakW {word-wrap: break-word !important;}
    .content td {border: solid 1px #CFD1D2; padding: 2px;}
    .thcontent th {border: solid 1px #000000; padding: 2px; background-color: #000000; color: #ffffff;}
    .tfcontent th {border: solid 1px #000000; padding: 2px; background-color: red; color: #ffffff;}
    .bBlackFontWhite {background-color: yellow; color: #000000; font-weight: bold;}
    .redFontWhite {background-color: red !important; color: #000000 !important; font-weight: bold !important;}
</style>

<page backtop=\"0\" backright=\"0\" backbottom=\"0\" backleft=\"0\" pageset=\"old\">


    <table class=\"header\">
        <tr>
            <td class=\"text-left\">
                <img class=\"\" style=\"width: 60px;height: 60px;\" src=\".{{asset('img/logo1.png') }}\">
            </td>
        </tr>
    </table>

    <div class=\"text-center\" style=\"position:absolute;top: 0px; width: 100%; font-size: 20px;\">
        <span class=\"\" >PLANNING DU {{ title }}</span>
    </div>

    <div class=\"text-right\" style=\"position:absolute;top: 40px; width: 100%;font-style: italic;\">
        <span style=\"\">Agent: </span>
        <span style=\"font-weight: bold; color: green;\">{{ agent.nom }} {{ agent.prenom }}</span>
    </div>

    <div class=\"separator\"></div>

    <table id=\"\" class=\"content\">
        <thead class=\"thcontent\">
            <tr>
                <th class=\"breakW\">Client</th>
                <th class=\"text-center\">Date début</th>
                <th class=\"text-center\">Date fin</th>
                <th class=\"text-center\">Panier</th>
                <th class=\"text-center\">HJ</th>
                <th class=\"text-center\">HN</th>
                <th class=\"text-center\">TH</th>
                <th class=\"text-center\">HD</th>
                <th class=\"text-center\">HF</th>
            </tr>
        </thead>
        <tbody>
        {% for v in vacations %}
            {% if v.heureFinVac|dayByDate == \"6\"  %}
                <tr class=\"bBlackFontWhite\">
            {% elseif v.heureDebVac|dayByDate == \"6\" %}
                <tr class=\"bBlackFontWhite\">
            {% elseif v.heureDimanche == \"00:00\" %}
                <tr class=\"\">
            {% else %}
                <tr class=\"bBlackFontWhite\">
            {% endif %}

                <td class=\"breakW\"><span class=\"\">{{ v.site.nomSite }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureDebVac| date('d/m/Y H:i') }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureFinVac| date('d/m/Y H:i') }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heurePanier }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureJour | formaterChaine }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureNuit | formaterChaine }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureJour|sumheure(v.heureNuit) }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureDimanche | formaterChaine }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureFerie | formaterChaine }}</span></td>
            </tr>
        {% endfor %}

        </tbody>
        <tfoot class=\"tfcontent\">
            <tr>
                <th class=\"\" colspan=\"3\"></th>
                <th class=\"text-center\">TP:<span class=\"badge bg-red\"> {{ thp }}</span></th>
                <th class=\"text-center\">THJ:<span class=\"badge bg-red\"> {{ thj }}</span></th>
                <th class=\"text-center\">THN:<span class=\"badge bg-red\"> {{ thn }}</span></th>
                <th class=\"text-center\">THM:<span class=\"badge bg-red\"> {{ thj|sumheure(thn) }}</span></th>
                <th class=\"text-center\">THD:<span class=\"badge bg-red\"> {{ thd }}</span></th>
                <th class=\"text-center\">THF:<span class=\"badge bg-red\"> {{ thf }}</span></th>
            </tr>
        </tfoot>
    </table>

    <div class=\"separator\"></div>

    <div style=\"position:absolute;bottom: 50px; width: 100%;\">
        <table id=\"\" style=\"table-layout: fixed; width: 100%;\" class=\"content\">
            <thead class=\"thcontent\">
            <tr>
                <th style=\"width: 50%;\" class=\"text-center\">Signature de la Direction</th>
                <th style=\"width: 50%;\" class=\"text-center\">Signature de l'agent</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style=\"width: 50%; height: 3px;\" class=\"text-center\"><h1></h1></td>
                <td style=\"width: 50%; height: 3px;\"class=\"text-center\"><h1></h1></td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class=\"separator\"></div>

    <div class=\"text-center\" style=\"position:absolute;bottom: 0px; width: 100%;\">
        <span style=\"color: red; font-size: 10px;\" >Siège Social : 62 rue du Solayer – 63100 CLERMONT-FERRAND - Tel : 04.73.92.48.56 - Télécopie : 04.73.92.29.68</span><br>
        <span style=\"font-size: 10px;\">N° d'autorisation CNAPS : AUT-063-2113-09-22-20140367933 ; Article L612-14 du code de la sécurité intérieure </span><br>
        <span style=\"font-size: 10px;\">L’autorisation administrative préalable ne confère aucun caractère officiel à l’entreprise ou aux personnes qui en bénéficient.</span>
    </div>


</page>", "AgiBundle:Default/agent:pdf.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/agent/pdf.html.twig");
    }
}
