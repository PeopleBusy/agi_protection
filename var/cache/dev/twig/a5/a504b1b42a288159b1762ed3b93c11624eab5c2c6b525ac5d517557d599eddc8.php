<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_ed0576c670246e2a7e81746cf90fa02311696a253b3dcb055a7ffa5340c24c6b extends Twig_Template
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
        $__internal_38517e4b6fab744a765aed6ed7db17cb8adf862dee858baec06c3b6f039cc546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38517e4b6fab744a765aed6ed7db17cb8adf862dee858baec06c3b6f039cc546->enter($__internal_38517e4b6fab744a765aed6ed7db17cb8adf862dee858baec06c3b6f039cc546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_6c28506e8c8447cd2e7641ea0fd39f28a6289d02af05716d17b38cd1fc66f399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c28506e8c8447cd2e7641ea0fd39f28a6289d02af05716d17b38cd1fc66f399->enter($__internal_6c28506e8c8447cd2e7641ea0fd39f28a6289d02af05716d17b38cd1fc66f399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_38517e4b6fab744a765aed6ed7db17cb8adf862dee858baec06c3b6f039cc546->leave($__internal_38517e4b6fab744a765aed6ed7db17cb8adf862dee858baec06c3b6f039cc546_prof);

        
        $__internal_6c28506e8c8447cd2e7641ea0fd39f28a6289d02af05716d17b38cd1fc66f399->leave($__internal_6c28506e8c8447cd2e7641ea0fd39f28a6289d02af05716d17b38cd1fc66f399_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
