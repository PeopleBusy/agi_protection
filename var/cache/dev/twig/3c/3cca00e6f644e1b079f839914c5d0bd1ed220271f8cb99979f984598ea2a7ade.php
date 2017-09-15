<?php

/* AgiBundle:Default/site:pdf.html.twig */
class __TwigTemplate_a8d5d4b7ae22b433d2b4c268d41d50ec7d686f851c141c297bf5fbc426d39e13 extends Twig_Template
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
        $__internal_19ff68df7a66ff299152f83152a59e474a0f08b6e6572dc6bfb4c05c12e09d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ff68df7a66ff299152f83152a59e474a0f08b6e6572dc6bfb4c05c12e09d41->enter($__internal_19ff68df7a66ff299152f83152a59e474a0f08b6e6572dc6bfb4c05c12e09d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:pdf.html.twig"));

        $__internal_2c827a257da3934d148f265786c0b49c3f2d9a2b0f03f819d63dcc808031cf52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c827a257da3934d148f265786c0b49c3f2d9a2b0f03f819d63dcc808031cf52->enter($__internal_2c827a257da3934d148f265786c0b49c3f2d9a2b0f03f819d63dcc808031cf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:pdf.html.twig"));

        // line 1
        echo "<style type=\"text/css\">
    table {width: 100% !important; border-collapse: collapse !important;}
    .header td {width: 50%; vertical-align: top;}
    .text-left {text-align: left;}
    .text-right {text-align: right;}
    .text-center {text-align: center;}
    .separator {height: 10px;}
    .breakW {word-wrap: break-word !important;}
    .content td {border: solid 1px #CFD1D2; padding: 2px;}
    .content th {border: solid 1px #000000; padding: 2px; background-color: #000000; color: #ffffff;}
    .bBlackFontWhite {background-color: yellow; color: #000000; font-weight: bold;}
</style>

<page backtop=\"0\" backright=\"0\" backbottom=\"0\" backleft=\"0\">

    <table class=\"header\">
        <tr>
            <td class=\"text-left\">
                <b>Client: </b> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "nomSite", array()), "html", null, true);
        echo "<br><br>
                <b>Période: </b> ";
        // line 20
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "
            </td>
        </tr>
    </table>

    <div class=\"separator\"></div>

    <table id=\"\" class=\"content\">
        <thead>
            <tr>
                <th class=\"breakW\">Agent</th>
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vacations"] ?? $this->getContext($context, "vacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 43
            echo "            <tr class=\"\">
                <td class=\"breakW\"><span class=\"\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "prenom", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureDebVac", array()), "d/m/Y H:i"), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureFinVac", array()), "d/m/Y H:i"), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heurePanier", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureJour", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureNuit", array()), "html", null, true);
            echo "</span></td>
                <td class=\"text-center\"><span class=\"\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes($this->getAttribute($context["v"], "heureJour", array()), $this->getAttribute($context["v"], "heureNuit", array())), "html", null, true);
            echo "</span></td>
                ";
            // line 51
            if (($this->getAttribute($context["v"], "heureDimanche", array()) == "00:00")) {
                // line 52
                echo "                    <td class=\"text-center\"><span class=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
                echo "</span></td>
                ";
            } else {
                // line 54
                echo "                    <td class=\"bBlackFontWhite text-center\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
                echo "</span></td>
                ";
            }
            // line 56
            echo "                <td><span class=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureFerie", array()), "html", null, true);
            echo "</span></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        </tbody>
        <tfoot>
        <tr>
            <th colspan=\"3\"></th>
            <th class=\"text-center\">TP: <span class=\"badge bg-red\"> ";
        // line 64
        echo twig_escape_filter($this->env, ($context["thp"] ?? $this->getContext($context, "thp")), "html", null, true);
        echo "</span></th>
            <th class=\"text-center\">THJ: <span class=\"badge bg-red\"> ";
        // line 65
        echo twig_escape_filter($this->env, ($context["thj"] ?? $this->getContext($context, "thj")), "html", null, true);
        echo "</span></th>
            <th class=\"text-center\">THN: <span class=\"badge bg-red\"> ";
        // line 66
        echo twig_escape_filter($this->env, ($context["thn"] ?? $this->getContext($context, "thn")), "html", null, true);
        echo "</span></th>
            <th class=\"text-center\">THM: <span class=\"badge bg-red\"> ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes(($context["thj"] ?? $this->getContext($context, "thj")), ($context["thn"] ?? $this->getContext($context, "thn"))), "html", null, true);
        echo "</span></th>
            <th class=\"text-center\">THD: <span class=\"badge bg-red\"> ";
        // line 68
        echo twig_escape_filter($this->env, ($context["thd"] ?? $this->getContext($context, "thd")), "html", null, true);
        echo "</span></th>
            <th class=\"text-center\">THF: <span class=\"badge bg-red\"> ";
        // line 69
        echo twig_escape_filter($this->env, ($context["thf"] ?? $this->getContext($context, "thf")), "html", null, true);
        echo "</span></th>
        </tr>
        </tfoot>
    </table>
</page>";
        
        $__internal_19ff68df7a66ff299152f83152a59e474a0f08b6e6572dc6bfb4c05c12e09d41->leave($__internal_19ff68df7a66ff299152f83152a59e474a0f08b6e6572dc6bfb4c05c12e09d41_prof);

        
        $__internal_2c827a257da3934d148f265786c0b49c3f2d9a2b0f03f819d63dcc808031cf52->leave($__internal_2c827a257da3934d148f265786c0b49c3f2d9a2b0f03f819d63dcc808031cf52_prof);

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
        return array (  162 => 69,  158 => 68,  154 => 67,  150 => 66,  146 => 65,  142 => 64,  135 => 59,  125 => 56,  119 => 54,  113 => 52,  111 => 51,  107 => 50,  103 => 49,  99 => 48,  95 => 47,  91 => 46,  87 => 45,  81 => 44,  78 => 43,  74 => 42,  49 => 20,  45 => 19,  25 => 1,);
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
    .header td {width: 50%; vertical-align: top;}
    .text-left {text-align: left;}
    .text-right {text-align: right;}
    .text-center {text-align: center;}
    .separator {height: 10px;}
    .breakW {word-wrap: break-word !important;}
    .content td {border: solid 1px #CFD1D2; padding: 2px;}
    .content th {border: solid 1px #000000; padding: 2px; background-color: #000000; color: #ffffff;}
    .bBlackFontWhite {background-color: yellow; color: #000000; font-weight: bold;}
</style>

<page backtop=\"0\" backright=\"0\" backbottom=\"0\" backleft=\"0\">

    <table class=\"header\">
        <tr>
            <td class=\"text-left\">
                <b>Client: </b> {{ site.nomSite }}<br><br>
                <b>Période: </b> {{ title }}
            </td>
        </tr>
    </table>

    <div class=\"separator\"></div>

    <table id=\"\" class=\"content\">
        <thead>
            <tr>
                <th class=\"breakW\">Agent</th>
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
            <tr class=\"\">
                <td class=\"breakW\"><span class=\"\">{{ v.agent.nom }} {{ v.agent.prenom }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureDebVac| date('d/m/Y H:i') }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureFinVac| date('d/m/Y H:i') }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heurePanier }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureJour }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureNuit }}</span></td>
                <td class=\"text-center\"><span class=\"\">{{ v.heureJour|sumheure(v.heureNuit) }}</span></td>
                {% if v.heureDimanche == \"00:00\" %}
                    <td class=\"text-center\"><span class=\"\">{{ v.heureDimanche }}</span></td>
                {% else %}
                    <td class=\"bBlackFontWhite text-center\"><span>{{ v.heureDimanche }}</span></td>
                {% endif %}
                <td><span class=\"\">{{ v.heureFerie }}</span></td>
            </tr>
        {% endfor %}

        </tbody>
        <tfoot>
        <tr>
            <th colspan=\"3\"></th>
            <th class=\"text-center\">TP: <span class=\"badge bg-red\"> {{ thp }}</span></th>
            <th class=\"text-center\">THJ: <span class=\"badge bg-red\"> {{ thj }}</span></th>
            <th class=\"text-center\">THN: <span class=\"badge bg-red\"> {{ thn }}</span></th>
            <th class=\"text-center\">THM: <span class=\"badge bg-red\"> {{ thj|sumheure(thn) }}</span></th>
            <th class=\"text-center\">THD: <span class=\"badge bg-red\"> {{ thd }}</span></th>
            <th class=\"text-center\">THF: <span class=\"badge bg-red\"> {{ thf }}</span></th>
        </tr>
        </tfoot>
    </table>
</page>", "AgiBundle:Default/site:pdf.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/site/pdf.html.twig");
    }
}
