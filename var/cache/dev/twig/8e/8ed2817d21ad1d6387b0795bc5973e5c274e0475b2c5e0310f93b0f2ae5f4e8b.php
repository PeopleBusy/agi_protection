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
        $__internal_a8c65bf383460ba73f0d72a1665cd35a0a935237085f43795ae1ad74516ee421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c65bf383460ba73f0d72a1665cd35a0a935237085f43795ae1ad74516ee421->enter($__internal_a8c65bf383460ba73f0d72a1665cd35a0a935237085f43795ae1ad74516ee421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_449ec09878d8b1cffb382a2d4e218e8246a51b48650ec22de79c5e38d659f060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449ec09878d8b1cffb382a2d4e218e8246a51b48650ec22de79c5e38d659f060->enter($__internal_449ec09878d8b1cffb382a2d4e218e8246a51b48650ec22de79c5e38d659f060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a8c65bf383460ba73f0d72a1665cd35a0a935237085f43795ae1ad74516ee421->leave($__internal_a8c65bf383460ba73f0d72a1665cd35a0a935237085f43795ae1ad74516ee421_prof);

        
        $__internal_449ec09878d8b1cffb382a2d4e218e8246a51b48650ec22de79c5e38d659f060->leave($__internal_449ec09878d8b1cffb382a2d4e218e8246a51b48650ec22de79c5e38d659f060_prof);

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
", "@Framework/Form/container_attributes.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
