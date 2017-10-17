<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_5d2f59b455bd9b18eb53d215f18f9cd2063739924082f97c95ffc58ddcf2f73c extends Twig_Template
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
        $__internal_b52593fa81a6652a3570766af891222a5c1edd3332ea7fc0dac44d3cdbb5b6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52593fa81a6652a3570766af891222a5c1edd3332ea7fc0dac44d3cdbb5b6fd->enter($__internal_b52593fa81a6652a3570766af891222a5c1edd3332ea7fc0dac44d3cdbb5b6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_23013e036e69e541db88689edb69c0e253eb4647f9df13e88a9b711a02a23ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23013e036e69e541db88689edb69c0e253eb4647f9df13e88a9b711a02a23ee3->enter($__internal_23013e036e69e541db88689edb69c0e253eb4647f9df13e88a9b711a02a23ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b52593fa81a6652a3570766af891222a5c1edd3332ea7fc0dac44d3cdbb5b6fd->leave($__internal_b52593fa81a6652a3570766af891222a5c1edd3332ea7fc0dac44d3cdbb5b6fd_prof);

        
        $__internal_23013e036e69e541db88689edb69c0e253eb4647f9df13e88a9b711a02a23ee3->leave($__internal_23013e036e69e541db88689edb69c0e253eb4647f9df13e88a9b711a02a23ee3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
