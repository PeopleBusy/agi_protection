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
        $__internal_eb77fb5f4ce91fe79b5fa8076ba08652c2fbce22e5b969451e46356b18d9f7e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb77fb5f4ce91fe79b5fa8076ba08652c2fbce22e5b969451e46356b18d9f7e1->enter($__internal_eb77fb5f4ce91fe79b5fa8076ba08652c2fbce22e5b969451e46356b18d9f7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b4e8b6be571ca9d5ed21738b72762f2d54f47a97602e916d5cc1ee8175918973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e8b6be571ca9d5ed21738b72762f2d54f47a97602e916d5cc1ee8175918973->enter($__internal_b4e8b6be571ca9d5ed21738b72762f2d54f47a97602e916d5cc1ee8175918973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_eb77fb5f4ce91fe79b5fa8076ba08652c2fbce22e5b969451e46356b18d9f7e1->leave($__internal_eb77fb5f4ce91fe79b5fa8076ba08652c2fbce22e5b969451e46356b18d9f7e1_prof);

        
        $__internal_b4e8b6be571ca9d5ed21738b72762f2d54f47a97602e916d5cc1ee8175918973->leave($__internal_b4e8b6be571ca9d5ed21738b72762f2d54f47a97602e916d5cc1ee8175918973_prof);

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
", "@Framework/Form/search_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
