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
        $__internal_89eaea8ea7eb603440e8fd4ec3c97c200bcbaf60e328a1d83911572f5e11febf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89eaea8ea7eb603440e8fd4ec3c97c200bcbaf60e328a1d83911572f5e11febf->enter($__internal_89eaea8ea7eb603440e8fd4ec3c97c200bcbaf60e328a1d83911572f5e11febf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:pdf.html.twig"));

        $__internal_c7c2d99c2030084ffb19def2d504efbb6ebbc6453f8987677afe82286df490f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c2d99c2030084ffb19def2d504efbb6ebbc6453f8987677afe82286df490f9->enter($__internal_c7c2d99c2030084ffb19def2d504efbb6ebbc6453f8987677afe82286df490f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:pdf.html.twig"));

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
            if ((($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureFinVac", array())) == "6") || ($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureFinVac", array())) == "7"))) {
                // line 55
                echo "                <tr class=\"bBlackFontWhite\">
            ";
            } elseif ((($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute(            // line 56
$context["v"], "heureDebVac", array())) == "6") || ($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureDebVac", array())) == "7"))) {
                // line 57
                echo "                <tr class=\"bBlackFontWhite\">
            ";
            } else {
                // line 59
                echo "                <tr class=\"\">
            ";
            }
            // line 61
            echo "
                <td class=\"breakW\"><span class=\"\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "site", array()), "nomSite", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureDebVac", array()), "d/m/Y H:i"), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureFinVac", array()), "d/m/Y H:i"), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heurePanier", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\FormaterChaineExtension')->formaterChaine($this->getAttribute($context["v"], "heureJour", array())), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\FormaterChaineExtension')->formaterChaine($this->getAttribute($context["v"], "heureNuit", array())), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes($this->getAttribute($context["v"], "heureJour", array()), $this->getAttribute($context["v"], "heureNuit", array())), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\FormaterChaineExtension')->formaterChaine($this->getAttribute($context["v"], "heureDimanche", array())), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\FormaterChaineExtension')->formaterChaine($this->getAttribute($context["v"], "heureFerie", array())), "html", null, true);
            echo "</span></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
        </tbody>
        <tfoot class=\"tfcontent\">
            <tr>
                <th class=\"\" colspan=\"3\"></th>
                <th class=\"text-center\">TP:<span class=\"badge bg-red\"> ";
        // line 78
        echo twig_escape_filter($this->env, ($context["thp"] ?? $this->getContext($context, "thp")), "html", null, true);
        echo "</span></th>
                <th class=\"text-center\">THJ:<span class=\"badge bg-red\"> ";
        // line 79
        echo twig_escape_filter($this->env, ($context["thj"] ?? $this->getContext($context, "thj")), "html", null, true);
        echo "</span></th>
                <th class=\"text-center\">THN:<span class=\"badge bg-red\"> ";
        // line 80
        echo twig_escape_filter($this->env, ($context["thn"] ?? $this->getContext($context, "thn")), "html", null, true);
        echo "</span></th>
                <th class=\"text-center\">THM:<span class=\"badge bg-red\"> ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes(($context["thj"] ?? $this->getContext($context, "thj")), ($context["thn"] ?? $this->getContext($context, "thn"))), "html", null, true);
        echo "</span></th>
                <th class=\"text-center\">THD:<span class=\"badge bg-red\"> ";
        // line 82
        echo twig_escape_filter($this->env, ($context["thd"] ?? $this->getContext($context, "thd")), "html", null, true);
        echo "</span></th>
                <th class=\"text-center\">THF:<span class=\"badge bg-red\"> ";
        // line 83
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
        
        $__internal_89eaea8ea7eb603440e8fd4ec3c97c200bcbaf60e328a1d83911572f5e11febf->leave($__internal_89eaea8ea7eb603440e8fd4ec3c97c200bcbaf60e328a1d83911572f5e11febf_prof);

        
        $__internal_c7c2d99c2030084ffb19def2d504efbb6ebbc6453f8987677afe82286df490f9->leave($__internal_c7c2d99c2030084ffb19def2d504efbb6ebbc6453f8987677afe82286df490f9_prof);

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
        return array (  181 => 83,  177 => 82,  173 => 81,  169 => 80,  165 => 79,  161 => 78,  154 => 73,  145 => 70,  141 => 69,  137 => 68,  133 => 67,  129 => 66,  125 => 65,  121 => 64,  117 => 63,  113 => 62,  110 => 61,  106 => 59,  102 => 57,  100 => 56,  97 => 55,  94 => 54,  90 => 53,  65 => 33,  57 => 28,  48 => 22,  25 => 1,);
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
            {% if v.heureFinVac|dayByDate == \"6\" or v.heureFinVac|dayByDate == \"7\"  %}
                <tr class=\"bBlackFontWhite\">
            {% elseif v.heureDebVac|dayByDate == \"6\" or v.heureDebVac|dayByDate == \"7\"  %}
                <tr class=\"bBlackFontWhite\">
            {% else %}
                <tr class=\"\">
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
