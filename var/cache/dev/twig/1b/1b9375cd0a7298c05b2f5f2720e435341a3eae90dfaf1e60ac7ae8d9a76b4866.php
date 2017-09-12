<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_a6258756c609d9966ea5b8713a098e1f5e2e153dc3abde0ae0e67a7b662fcdeb extends Twig_Template
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
        $__internal_271eec98dbaf7de2bf306a69598fa394a908c91c773b229258965ad0355a8e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271eec98dbaf7de2bf306a69598fa394a908c91c773b229258965ad0355a8e00->enter($__internal_271eec98dbaf7de2bf306a69598fa394a908c91c773b229258965ad0355a8e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_12628a598456e98666b87949798e64a2846152a0743c63f5fd7f370d54a6ed3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12628a598456e98666b87949798e64a2846152a0743c63f5fd7f370d54a6ed3c->enter($__internal_12628a598456e98666b87949798e64a2846152a0743c63f5fd7f370d54a6ed3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_271eec98dbaf7de2bf306a69598fa394a908c91c773b229258965ad0355a8e00->leave($__internal_271eec98dbaf7de2bf306a69598fa394a908c91c773b229258965ad0355a8e00_prof);

        
        $__internal_12628a598456e98666b87949798e64a2846152a0743c63f5fd7f370d54a6ed3c->leave($__internal_12628a598456e98666b87949798e64a2846152a0743c63f5fd7f370d54a6ed3c_prof);

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
", "@Framework/Form/repeated_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
