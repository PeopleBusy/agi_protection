<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9bf17283dcc975e50a0ca0d294580320f9c84d57645504741a97333e4b91f77a extends Twig_Template
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
        $__internal_c56683364ba2358771776921aca10c7b968ba7018250726dc6ce6884e824740c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c56683364ba2358771776921aca10c7b968ba7018250726dc6ce6884e824740c->enter($__internal_c56683364ba2358771776921aca10c7b968ba7018250726dc6ce6884e824740c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_85dc1ad60484d2639b4fd52e7689ad6899578c7a301f432d16d891d531c9f223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85dc1ad60484d2639b4fd52e7689ad6899578c7a301f432d16d891d531c9f223->enter($__internal_85dc1ad60484d2639b4fd52e7689ad6899578c7a301f432d16d891d531c9f223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c56683364ba2358771776921aca10c7b968ba7018250726dc6ce6884e824740c->leave($__internal_c56683364ba2358771776921aca10c7b968ba7018250726dc6ce6884e824740c_prof);

        
        $__internal_85dc1ad60484d2639b4fd52e7689ad6899578c7a301f432d16d891d531c9f223->leave($__internal_85dc1ad60484d2639b4fd52e7689ad6899578c7a301f432d16d891d531c9f223_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
