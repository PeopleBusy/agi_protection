<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_207686c754c99085e19079cf3fc7dabc29c886ee107a9cf015144defdb79c98b extends Twig_Template
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
        $__internal_d86deeabc4c361297e3218c1606ebe0a488c883c41a0122eb782a52a24aefcf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86deeabc4c361297e3218c1606ebe0a488c883c41a0122eb782a52a24aefcf6->enter($__internal_d86deeabc4c361297e3218c1606ebe0a488c883c41a0122eb782a52a24aefcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ee2607f43a61acbef883762284d9655df3051cc1649cca5e25b2b59dd0f1e005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2607f43a61acbef883762284d9655df3051cc1649cca5e25b2b59dd0f1e005->enter($__internal_ee2607f43a61acbef883762284d9655df3051cc1649cca5e25b2b59dd0f1e005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d86deeabc4c361297e3218c1606ebe0a488c883c41a0122eb782a52a24aefcf6->leave($__internal_d86deeabc4c361297e3218c1606ebe0a488c883c41a0122eb782a52a24aefcf6_prof);

        
        $__internal_ee2607f43a61acbef883762284d9655df3051cc1649cca5e25b2b59dd0f1e005->leave($__internal_ee2607f43a61acbef883762284d9655df3051cc1649cca5e25b2b59dd0f1e005_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
