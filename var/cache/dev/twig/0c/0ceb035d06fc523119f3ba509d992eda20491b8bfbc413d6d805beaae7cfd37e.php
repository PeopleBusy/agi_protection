<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a613460bff8d95f3e4cd222f89856befc9503068b7f3b576bb61fe5bbbc2221 extends Twig_Template
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
        $__internal_1759fb390825121bea0ed4a578ce21aabd01ce1d672e903511b299fd88b645a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1759fb390825121bea0ed4a578ce21aabd01ce1d672e903511b299fd88b645a1->enter($__internal_1759fb390825121bea0ed4a578ce21aabd01ce1d672e903511b299fd88b645a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8c7ae6241f2a5d23b000b100b42edc8b0706352da94eaa5d71dc7e60c0bf7b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7ae6241f2a5d23b000b100b42edc8b0706352da94eaa5d71dc7e60c0bf7b66->enter($__internal_8c7ae6241f2a5d23b000b100b42edc8b0706352da94eaa5d71dc7e60c0bf7b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1759fb390825121bea0ed4a578ce21aabd01ce1d672e903511b299fd88b645a1->leave($__internal_1759fb390825121bea0ed4a578ce21aabd01ce1d672e903511b299fd88b645a1_prof);

        
        $__internal_8c7ae6241f2a5d23b000b100b42edc8b0706352da94eaa5d71dc7e60c0bf7b66->leave($__internal_8c7ae6241f2a5d23b000b100b42edc8b0706352da94eaa5d71dc7e60c0bf7b66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
