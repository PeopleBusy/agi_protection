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
        $__internal_c269ad612775256d48563a444dfa42b85dc12958cd90e847b127fdc4950a9016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c269ad612775256d48563a444dfa42b85dc12958cd90e847b127fdc4950a9016->enter($__internal_c269ad612775256d48563a444dfa42b85dc12958cd90e847b127fdc4950a9016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_9e1092c73ecd0997741af76cfb035681de31ad3dd951a8956be6d3b8d4b35268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1092c73ecd0997741af76cfb035681de31ad3dd951a8956be6d3b8d4b35268->enter($__internal_9e1092c73ecd0997741af76cfb035681de31ad3dd951a8956be6d3b8d4b35268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c269ad612775256d48563a444dfa42b85dc12958cd90e847b127fdc4950a9016->leave($__internal_c269ad612775256d48563a444dfa42b85dc12958cd90e847b127fdc4950a9016_prof);

        
        $__internal_9e1092c73ecd0997741af76cfb035681de31ad3dd951a8956be6d3b8d4b35268->leave($__internal_9e1092c73ecd0997741af76cfb035681de31ad3dd951a8956be6d3b8d4b35268_prof);

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
", "@Framework/Form/choice_options.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
