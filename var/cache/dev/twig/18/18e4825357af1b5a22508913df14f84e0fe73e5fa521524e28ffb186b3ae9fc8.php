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
        $__internal_911a4fd2e88688f1380a8199dd6d7e6256cd0de55a933ca49cd5909ace3c54e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911a4fd2e88688f1380a8199dd6d7e6256cd0de55a933ca49cd5909ace3c54e6->enter($__internal_911a4fd2e88688f1380a8199dd6d7e6256cd0de55a933ca49cd5909ace3c54e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_79098d3da686f29ecab0737712264bd4de11f114447352b5a7de215a5186f7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79098d3da686f29ecab0737712264bd4de11f114447352b5a7de215a5186f7ff->enter($__internal_79098d3da686f29ecab0737712264bd4de11f114447352b5a7de215a5186f7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_911a4fd2e88688f1380a8199dd6d7e6256cd0de55a933ca49cd5909ace3c54e6->leave($__internal_911a4fd2e88688f1380a8199dd6d7e6256cd0de55a933ca49cd5909ace3c54e6_prof);

        
        $__internal_79098d3da686f29ecab0737712264bd4de11f114447352b5a7de215a5186f7ff->leave($__internal_79098d3da686f29ecab0737712264bd4de11f114447352b5a7de215a5186f7ff_prof);

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
