<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_461fed3294067ab5e7373a8b92cedc12b6e83b899d945e51b07a6e0df96844d6 extends Twig_Template
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
        $__internal_07022278017c9eee87df294186a528f4a946dfbc8f3c1b720a1125a4c2d29170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07022278017c9eee87df294186a528f4a946dfbc8f3c1b720a1125a4c2d29170->enter($__internal_07022278017c9eee87df294186a528f4a946dfbc8f3c1b720a1125a4c2d29170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_34d85995e24eb18702aa4d3fd81d65cc1ee0aa0733108f13798683e6d220316f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d85995e24eb18702aa4d3fd81d65cc1ee0aa0733108f13798683e6d220316f->enter($__internal_34d85995e24eb18702aa4d3fd81d65cc1ee0aa0733108f13798683e6d220316f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_07022278017c9eee87df294186a528f4a946dfbc8f3c1b720a1125a4c2d29170->leave($__internal_07022278017c9eee87df294186a528f4a946dfbc8f3c1b720a1125a4c2d29170_prof);

        
        $__internal_34d85995e24eb18702aa4d3fd81d65cc1ee0aa0733108f13798683e6d220316f->leave($__internal_34d85995e24eb18702aa4d3fd81d65cc1ee0aa0733108f13798683e6d220316f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
