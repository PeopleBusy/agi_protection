<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f4d3ec44f4a7d9bab193b2bc0051b3dd46c0955bb4efdc9af9ea5c40f7ab715e extends Twig_Template
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
        $__internal_69eedf19b53aa1e8d6b4f0b13237ff990f2e9042e44cba959088b91a4893faf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69eedf19b53aa1e8d6b4f0b13237ff990f2e9042e44cba959088b91a4893faf9->enter($__internal_69eedf19b53aa1e8d6b4f0b13237ff990f2e9042e44cba959088b91a4893faf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_001590dd0a4d220d6934a620ea191653bb32c7d9f83ca0ae1698d9723346254e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001590dd0a4d220d6934a620ea191653bb32c7d9f83ca0ae1698d9723346254e->enter($__internal_001590dd0a4d220d6934a620ea191653bb32c7d9f83ca0ae1698d9723346254e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_69eedf19b53aa1e8d6b4f0b13237ff990f2e9042e44cba959088b91a4893faf9->leave($__internal_69eedf19b53aa1e8d6b4f0b13237ff990f2e9042e44cba959088b91a4893faf9_prof);

        
        $__internal_001590dd0a4d220d6934a620ea191653bb32c7d9f83ca0ae1698d9723346254e->leave($__internal_001590dd0a4d220d6934a620ea191653bb32c7d9f83ca0ae1698d9723346254e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
