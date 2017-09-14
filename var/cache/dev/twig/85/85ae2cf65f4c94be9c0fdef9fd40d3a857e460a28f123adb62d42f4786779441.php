<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ef85ad287ef2ef5d6aadafa73c41fe35bbaa151fc58efbb1f62e85e9ab7313d8 extends Twig_Template
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
        $__internal_f715d2a660182737262a5c8fcaa6c7c15d887dbb90e4f54015bc8fbdaa28def5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f715d2a660182737262a5c8fcaa6c7c15d887dbb90e4f54015bc8fbdaa28def5->enter($__internal_f715d2a660182737262a5c8fcaa6c7c15d887dbb90e4f54015bc8fbdaa28def5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_02a9ae646c8a483b1054f8a6356188888acbb427ba4193a633a7ffba1ac9c0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a9ae646c8a483b1054f8a6356188888acbb427ba4193a633a7ffba1ac9c0ee->enter($__internal_02a9ae646c8a483b1054f8a6356188888acbb427ba4193a633a7ffba1ac9c0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f715d2a660182737262a5c8fcaa6c7c15d887dbb90e4f54015bc8fbdaa28def5->leave($__internal_f715d2a660182737262a5c8fcaa6c7c15d887dbb90e4f54015bc8fbdaa28def5_prof);

        
        $__internal_02a9ae646c8a483b1054f8a6356188888acbb427ba4193a633a7ffba1ac9c0ee->leave($__internal_02a9ae646c8a483b1054f8a6356188888acbb427ba4193a633a7ffba1ac9c0ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
