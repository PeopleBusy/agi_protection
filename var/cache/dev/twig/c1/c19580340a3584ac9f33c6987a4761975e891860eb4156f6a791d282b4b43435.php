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
        $__internal_b8ef0a8a6c043a0255d3995b0a1e115153cb3c2ccac3282006d7920eb2ae1876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ef0a8a6c043a0255d3995b0a1e115153cb3c2ccac3282006d7920eb2ae1876->enter($__internal_b8ef0a8a6c043a0255d3995b0a1e115153cb3c2ccac3282006d7920eb2ae1876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_18a2651666ae67f7c9fad9ec41468dad16dd2fa5efb8371a08a958f7bc0170f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a2651666ae67f7c9fad9ec41468dad16dd2fa5efb8371a08a958f7bc0170f9->enter($__internal_18a2651666ae67f7c9fad9ec41468dad16dd2fa5efb8371a08a958f7bc0170f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b8ef0a8a6c043a0255d3995b0a1e115153cb3c2ccac3282006d7920eb2ae1876->leave($__internal_b8ef0a8a6c043a0255d3995b0a1e115153cb3c2ccac3282006d7920eb2ae1876_prof);

        
        $__internal_18a2651666ae67f7c9fad9ec41468dad16dd2fa5efb8371a08a958f7bc0170f9->leave($__internal_18a2651666ae67f7c9fad9ec41468dad16dd2fa5efb8371a08a958f7bc0170f9_prof);

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
