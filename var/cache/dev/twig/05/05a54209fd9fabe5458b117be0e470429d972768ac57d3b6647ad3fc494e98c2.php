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
        $__internal_e93b27fa21bbd356f239a7a4426ba35e84e158bcb56fe70a6bf888e306e90874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93b27fa21bbd356f239a7a4426ba35e84e158bcb56fe70a6bf888e306e90874->enter($__internal_e93b27fa21bbd356f239a7a4426ba35e84e158bcb56fe70a6bf888e306e90874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_df7df042962ac23964979b44d57dfb09ec0bfd19825282c04562c78b13306395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7df042962ac23964979b44d57dfb09ec0bfd19825282c04562c78b13306395->enter($__internal_df7df042962ac23964979b44d57dfb09ec0bfd19825282c04562c78b13306395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e93b27fa21bbd356f239a7a4426ba35e84e158bcb56fe70a6bf888e306e90874->leave($__internal_e93b27fa21bbd356f239a7a4426ba35e84e158bcb56fe70a6bf888e306e90874_prof);

        
        $__internal_df7df042962ac23964979b44d57dfb09ec0bfd19825282c04562c78b13306395->leave($__internal_df7df042962ac23964979b44d57dfb09ec0bfd19825282c04562c78b13306395_prof);

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
", "@Framework/Form/number_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
