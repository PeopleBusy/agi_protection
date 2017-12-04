<?php

/* AgiBundle:Default/site:pdf.html.twig */
class __TwigTemplate_cd35d944d028f6896509f613c0326ffcf1ccfb2ddb7bae28c22a69db60342a9f extends Twig_Template
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
        $__internal_d6077dd3c850beee0ce75156a5a148ba206af9672e04f429c42acfc37b2898b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6077dd3c850beee0ce75156a5a148ba206af9672e04f429c42acfc37b2898b5->enter($__internal_d6077dd3c850beee0ce75156a5a148ba206af9672e04f429c42acfc37b2898b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:pdf.html.twig"));

        $__internal_ee41dc5651c2de1b0ce79e14c21c3ea752459ecf50a49ece8f6eee609241648f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee41dc5651c2de1b0ce79e14c21c3ea752459ecf50a49ece8f6eee609241648f->enter($__internal_ee41dc5651c2de1b0ce79e14c21c3ea752459ecf50a49ece8f6eee609241648f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:pdf.html.twig"));

        // line 1
        echo "<style type=\"text/css\">
    table {width: 100% !important; border-collapse: collapse !important;}
    .header td {width: 50% !important; vertical-align: top;}
    .text-left {text-align: left;}
    .text-right {text-align: right;}
    .text-center {text-align: center;}
    .separator {height: 2px;}
    .breakW {white-space: -o-pre-wrap;
        word-wrap: break-word;
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: pre-wrap;}
    .content td {border: solid 1px #CFD1D2; padding: 1px;}
    .thcontent th {border: solid 1px #000000; padding: 1px; background-color: #000000; color: #ffffff;}
    .tfcontent th {border: solid 1px #000000; padding: 1px; background-color: red; color: #ffffff;}
    .bBlackFontWhite {background-color: yellow; color: #000000; font-weight: bold;}
    .redFontWhite {background-color: red !important; color: #000000 !important; font-weight: bold !important;}
    .wid20 {width: 10px !important;}
</style>

<page backtop=\"0\" backright=\"0\" backbottom=\"0\" backleft=\"0\">


    <table class=\"header\">
        <tr>
            <td class=\"text-left\">
                <img class=\"\" style=\"width: 60px;height: 60px;\" src=\".";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\">
            </td>
        </tr>
    </table>

    <div class=\"text-center\" style=\"position:absolute;top: 0px; width: 100%; font-size: 20px;\">
        <span class=\"\" >PLANNING DU ";
        // line 33
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</span>
    </div>

    <div class=\"text-right\" style=\"position:absolute;top: 40px; width: 100%;font-style: italic;\">
        <span style=\"\">Client: </span>
        <span style=\"font-weight: bold; color: green;\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "nomSite", array()), "html", null, true);
        echo "</span>
    </div>

    <div class=\"separator\"></div>

    <table id=\"\" style=\"table-layout: fixed;\" class=\"content\">
        <thead class=\"thcontent\">
            <tr>
                <th>Agent</th>
                <th class=\"text-center\">Début</th>
                <th class=\"text-center\">Fin</th>
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
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vacations"] ?? $this->getContext($context, "vacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 59
            echo "
            ";
            // line 60
            if ((($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureFinVac", array())) == "6") || ($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureFinVac", array())) == "7"))) {
                // line 61
                echo "                <tr class=\"bBlackFontWhite\">
            ";
            } elseif ((($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute(            // line 62
$context["v"], "heureDebVac", array())) == "6") || ($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureDebVac", array())) == "7"))) {
                // line 63
                echo "                <tr class=\"bBlackFontWhite\">
            ";
            } else {
                // line 65
                echo "                <tr class=\"\">
            ";
            }
            // line 67
            echo "
                <td class=\"text-left breakW\" style=\"width: 100px;\"><span class=\"\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "prenom", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center wid20 breakW\"><span class=\"\">";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureDebVac", array()), "d/m/Y H:i"), "html", null, true);
            echo "</span></td>
                <td class=\"text-center wid20 breakW\"><span class=\"\">";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureFinVac", array()), "d/m/Y H:i"), "html", null, true);
            echo "</span></td>
                <td class=\"text-center wid20\"><span class=\"\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heurePanier", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center wid20\"><span class=\"\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureJour", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center wid20\"><span class=\"\">";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureNuit", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center wid20\"><span class=\"\">";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes($this->getAttribute($context["v"], "heureJour", array()), $this->getAttribute($context["v"], "heureNuit", array())), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center wid20\"><span class=\"\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureFerie", array()), "html", null, true);
            echo "</span></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
        </tbody>
        <tfoot class=\"tfcontent\">
            <tr>
                <th class=\"\" colspan=\"3\"></th>
                <th class=\"text-center wid20 breakW\" style=\"width: 10px;\">TP:<span class=\"badge bg-red\"> ";
        // line 84
        echo twig_escape_filter($this->env, ($context["thp"] ?? $this->getContext($context, "thp")), "html", null, true);
        echo "</span></th>
                <th class=\"text-center wid20 breakW\">THJ:<span class=\"badge bg-red\"> ";
        // line 85
        echo twig_escape_filter($this->env, ($context["thj"] ?? $this->getContext($context, "thj")), "html", null, true);
        echo "</span></th>
                <th class=\"text-center wid20 breakW\">THN:<span class=\"badge bg-red\"> ";
        // line 86
        echo twig_escape_filter($this->env, ($context["thn"] ?? $this->getContext($context, "thn")), "html", null, true);
        echo "</span></th>
                <th class=\"text-center wid20 breakW\">THM:<span class=\"badge bg-red\"> ";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes(($context["thj"] ?? $this->getContext($context, "thj")), ($context["thn"] ?? $this->getContext($context, "thn"))), "html", null, true);
        echo "</span></th>
                <th class=\"text-center wid20 breakW\">THD:<span class=\"badge bg-red\"> ";
        // line 88
        echo twig_escape_filter($this->env, ($context["thd"] ?? $this->getContext($context, "thd")), "html", null, true);
        echo "</span></th>
                <th class=\"text-center wid20 breakW\">THF:<span class=\"badge bg-red\"> ";
        // line 89
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
        
        $__internal_d6077dd3c850beee0ce75156a5a148ba206af9672e04f429c42acfc37b2898b5->leave($__internal_d6077dd3c850beee0ce75156a5a148ba206af9672e04f429c42acfc37b2898b5_prof);

        
        $__internal_ee41dc5651c2de1b0ce79e14c21c3ea752459ecf50a49ece8f6eee609241648f->leave($__internal_ee41dc5651c2de1b0ce79e14c21c3ea752459ecf50a49ece8f6eee609241648f_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/site:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 89,  184 => 88,  180 => 87,  176 => 86,  172 => 85,  168 => 84,  161 => 79,  152 => 76,  148 => 75,  144 => 74,  140 => 73,  136 => 72,  132 => 71,  128 => 70,  124 => 69,  118 => 68,  115 => 67,  111 => 65,  107 => 63,  105 => 62,  102 => 61,  100 => 60,  97 => 59,  93 => 58,  70 => 38,  62 => 33,  53 => 27,  25 => 1,);
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
    .separator {height: 2px;}
    .breakW {white-space: -o-pre-wrap;
        word-wrap: break-word;
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: pre-wrap;}
    .content td {border: solid 1px #CFD1D2; padding: 1px;}
    .thcontent th {border: solid 1px #000000; padding: 1px; background-color: #000000; color: #ffffff;}
    .tfcontent th {border: solid 1px #000000; padding: 1px; background-color: red; color: #ffffff;}
    .bBlackFontWhite {background-color: yellow; color: #000000; font-weight: bold;}
    .redFontWhite {background-color: red !important; color: #000000 !important; font-weight: bold !important;}
    .wid20 {width: 10px !important;}
</style>

<page backtop=\"0\" backright=\"0\" backbottom=\"0\" backleft=\"0\">


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
        <span style=\"\">Client: </span>
        <span style=\"font-weight: bold; color: green;\">{{ site.nomSite }}</span>
    </div>

    <div class=\"separator\"></div>

    <table id=\"\" style=\"table-layout: fixed;\" class=\"content\">
        <thead class=\"thcontent\">
            <tr>
                <th>Agent</th>
                <th class=\"text-center\">Début</th>
                <th class=\"text-center\">Fin</th>
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

                <td class=\"text-left breakW\" style=\"width: 100px;\"><span class=\"\">{{ v.agent.nom }} {{ v.agent.prenom }}</span></td>
                <td class=\"text-center wid20 breakW\"><span class=\"\">{{ v.heureDebVac| date('d/m/Y H:i') }}</span></td>
                <td class=\"text-center wid20 breakW\"><span class=\"\">{{ v.heureFinVac| date('d/m/Y H:i') }}</span></td>
                <td class=\"text-center wid20\"><span class=\"\">{{ v.heurePanier }}</span></td>
                <td class=\"text-center wid20\"><span class=\"\">{{ v.heureJour }}</span></td>
                <td class=\"text-center wid20\"><span class=\"\">{{ v.heureNuit }}</span></td>
                <td class=\"text-center wid20\"><span class=\"\">{{ v.heureJour|sumheure(v.heureNuit) }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureDimanche }}</span></td>
                <td class=\"text-center wid20\"><span class=\"\">{{ v.heureFerie }}</span></td>
            </tr>
        {% endfor %}

        </tbody>
        <tfoot class=\"tfcontent\">
            <tr>
                <th class=\"\" colspan=\"3\"></th>
                <th class=\"text-center wid20 breakW\" style=\"width: 10px;\">TP:<span class=\"badge bg-red\"> {{ thp }}</span></th>
                <th class=\"text-center wid20 breakW\">THJ:<span class=\"badge bg-red\"> {{ thj }}</span></th>
                <th class=\"text-center wid20 breakW\">THN:<span class=\"badge bg-red\"> {{ thn }}</span></th>
                <th class=\"text-center wid20 breakW\">THM:<span class=\"badge bg-red\"> {{ thj|sumheure(thn) }}</span></th>
                <th class=\"text-center wid20 breakW\">THD:<span class=\"badge bg-red\"> {{ thd }}</span></th>
                <th class=\"text-center wid20 breakW\">THF:<span class=\"badge bg-red\"> {{ thf }}</span></th>
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


</page>", "AgiBundle:Default/site:pdf.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/site/pdf.html.twig");
    }
}
