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
        $__internal_53429b787ff854d3075201dff2ba5a0a8d5e79cee170399be5210d90d901f636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53429b787ff854d3075201dff2ba5a0a8d5e79cee170399be5210d90d901f636->enter($__internal_53429b787ff854d3075201dff2ba5a0a8d5e79cee170399be5210d90d901f636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f6934e77ce7d463a647879eb4eba3950713ada7ef07715e9866daabb9f4de099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6934e77ce7d463a647879eb4eba3950713ada7ef07715e9866daabb9f4de099->enter($__internal_f6934e77ce7d463a647879eb4eba3950713ada7ef07715e9866daabb9f4de099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_53429b787ff854d3075201dff2ba5a0a8d5e79cee170399be5210d90d901f636->leave($__internal_53429b787ff854d3075201dff2ba5a0a8d5e79cee170399be5210d90d901f636_prof);

        
        $__internal_f6934e77ce7d463a647879eb4eba3950713ada7ef07715e9866daabb9f4de099->leave($__internal_f6934e77ce7d463a647879eb4eba3950713ada7ef07715e9866daabb9f4de099_prof);

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
