<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_d5f0240df84648f1706041693842b1634de6ed57c654624987695e3f186524ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f0240df84648f1706041693842b1634de6ed57c654624987695e3f186524ff->enter($__internal_d5f0240df84648f1706041693842b1634de6ed57c654624987695e3f186524ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6c5ca223a1402301508cdbb27bb65e187a9f1de64d8e9d0878caca1db9b7067f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5ca223a1402301508cdbb27bb65e187a9f1de64d8e9d0878caca1db9b7067f->enter($__internal_6c5ca223a1402301508cdbb27bb65e187a9f1de64d8e9d0878caca1db9b7067f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d5f0240df84648f1706041693842b1634de6ed57c654624987695e3f186524ff->leave($__internal_d5f0240df84648f1706041693842b1634de6ed57c654624987695e3f186524ff_prof);

        
        $__internal_6c5ca223a1402301508cdbb27bb65e187a9f1de64d8e9d0878caca1db9b7067f->leave($__internal_6c5ca223a1402301508cdbb27bb65e187a9f1de64d8e9d0878caca1db9b7067f_prof);

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
