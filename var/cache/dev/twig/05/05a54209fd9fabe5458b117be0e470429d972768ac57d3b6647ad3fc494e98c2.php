<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2775229b586ebda0839bec66efc4dd58d7d7e558e29ff336b14f42c60439ea56 extends Twig_Template
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
        $__internal_990b70b567c1d5aacc49d7d3691a8393c6893d4900b337adecdd9c366428a74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990b70b567c1d5aacc49d7d3691a8393c6893d4900b337adecdd9c366428a74c->enter($__internal_990b70b567c1d5aacc49d7d3691a8393c6893d4900b337adecdd9c366428a74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_88556b62b48d743593a65492eee432ff8b609765ac037db7a2fd4951eb11169b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88556b62b48d743593a65492eee432ff8b609765ac037db7a2fd4951eb11169b->enter($__internal_88556b62b48d743593a65492eee432ff8b609765ac037db7a2fd4951eb11169b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_990b70b567c1d5aacc49d7d3691a8393c6893d4900b337adecdd9c366428a74c->leave($__internal_990b70b567c1d5aacc49d7d3691a8393c6893d4900b337adecdd9c366428a74c_prof);

        
        $__internal_88556b62b48d743593a65492eee432ff8b609765ac037db7a2fd4951eb11169b->leave($__internal_88556b62b48d743593a65492eee432ff8b609765ac037db7a2fd4951eb11169b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
