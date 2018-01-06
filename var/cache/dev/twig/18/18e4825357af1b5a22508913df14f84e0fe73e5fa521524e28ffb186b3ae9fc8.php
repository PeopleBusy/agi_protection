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
        $__internal_48428bc9e5ade50bef8619871e18222eedf1f11ddaa1e8ced351d949280d24a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48428bc9e5ade50bef8619871e18222eedf1f11ddaa1e8ced351d949280d24a3->enter($__internal_48428bc9e5ade50bef8619871e18222eedf1f11ddaa1e8ced351d949280d24a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a7c899abaca1c0b4236c5a19ba6a7859bbfd745cf9287ed012cb23e4b5a78af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c899abaca1c0b4236c5a19ba6a7859bbfd745cf9287ed012cb23e4b5a78af0->enter($__internal_a7c899abaca1c0b4236c5a19ba6a7859bbfd745cf9287ed012cb23e4b5a78af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_48428bc9e5ade50bef8619871e18222eedf1f11ddaa1e8ced351d949280d24a3->leave($__internal_48428bc9e5ade50bef8619871e18222eedf1f11ddaa1e8ced351d949280d24a3_prof);

        
        $__internal_a7c899abaca1c0b4236c5a19ba6a7859bbfd745cf9287ed012cb23e4b5a78af0->leave($__internal_a7c899abaca1c0b4236c5a19ba6a7859bbfd745cf9287ed012cb23e4b5a78af0_prof);

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
", "@Framework/Form/hidden_row.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
