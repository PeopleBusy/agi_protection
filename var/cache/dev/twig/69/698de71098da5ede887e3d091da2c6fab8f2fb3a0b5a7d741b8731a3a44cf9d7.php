<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_fa2cdaeae3006b013e2aae3b836ebb9bbe03a6ec63e44dfe47e7ac6b750cfcd5 extends Twig_Template
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
        $__internal_d0192540c82252c47af2097056ebeb3927d8877da67bc3414ecdda22af4f92b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0192540c82252c47af2097056ebeb3927d8877da67bc3414ecdda22af4f92b7->enter($__internal_d0192540c82252c47af2097056ebeb3927d8877da67bc3414ecdda22af4f92b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c396feb38e4d102805fa33f8e9b326fd57a0767a8a5b07e993caa79873148e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c396feb38e4d102805fa33f8e9b326fd57a0767a8a5b07e993caa79873148e0f->enter($__internal_c396feb38e4d102805fa33f8e9b326fd57a0767a8a5b07e993caa79873148e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d0192540c82252c47af2097056ebeb3927d8877da67bc3414ecdda22af4f92b7->leave($__internal_d0192540c82252c47af2097056ebeb3927d8877da67bc3414ecdda22af4f92b7_prof);

        
        $__internal_c396feb38e4d102805fa33f8e9b326fd57a0767a8a5b07e993caa79873148e0f->leave($__internal_c396feb38e4d102805fa33f8e9b326fd57a0767a8a5b07e993caa79873148e0f_prof);

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
", "@Framework/Form/choice_options.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
