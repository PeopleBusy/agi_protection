<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_466dbaf351c5730a3ac450a1b595183a99ffe881d4bd422bfdccf68452ba1ea1 extends Twig_Template
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
        $__internal_6f5475bdb26f13cd2795f576b880870a867fb3f55dbc1d4b7d10e4a0cd6e45e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5475bdb26f13cd2795f576b880870a867fb3f55dbc1d4b7d10e4a0cd6e45e2->enter($__internal_6f5475bdb26f13cd2795f576b880870a867fb3f55dbc1d4b7d10e4a0cd6e45e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ab95758ac15e7b18f68f5501d18e875b57c6f5f5fca6b223c7c2f796a93bed16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab95758ac15e7b18f68f5501d18e875b57c6f5f5fca6b223c7c2f796a93bed16->enter($__internal_ab95758ac15e7b18f68f5501d18e875b57c6f5f5fca6b223c7c2f796a93bed16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6f5475bdb26f13cd2795f576b880870a867fb3f55dbc1d4b7d10e4a0cd6e45e2->leave($__internal_6f5475bdb26f13cd2795f576b880870a867fb3f55dbc1d4b7d10e4a0cd6e45e2_prof);

        
        $__internal_ab95758ac15e7b18f68f5501d18e875b57c6f5f5fca6b223c7c2f796a93bed16->leave($__internal_ab95758ac15e7b18f68f5501d18e875b57c6f5f5fca6b223c7c2f796a93bed16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
