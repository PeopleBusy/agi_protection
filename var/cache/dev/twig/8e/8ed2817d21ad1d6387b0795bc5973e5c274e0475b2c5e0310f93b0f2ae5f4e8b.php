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
        $__internal_ec79101ebde6fda7ca6a27efa2912bef2f79525698685fde9935f3f4f40b7d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec79101ebde6fda7ca6a27efa2912bef2f79525698685fde9935f3f4f40b7d8f->enter($__internal_ec79101ebde6fda7ca6a27efa2912bef2f79525698685fde9935f3f4f40b7d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_dbda94b9d33bac35f74f027646dea7cc21469b82efed99ca77c9d03db3686f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbda94b9d33bac35f74f027646dea7cc21469b82efed99ca77c9d03db3686f3d->enter($__internal_dbda94b9d33bac35f74f027646dea7cc21469b82efed99ca77c9d03db3686f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ec79101ebde6fda7ca6a27efa2912bef2f79525698685fde9935f3f4f40b7d8f->leave($__internal_ec79101ebde6fda7ca6a27efa2912bef2f79525698685fde9935f3f4f40b7d8f_prof);

        
        $__internal_dbda94b9d33bac35f74f027646dea7cc21469b82efed99ca77c9d03db3686f3d->leave($__internal_dbda94b9d33bac35f74f027646dea7cc21469b82efed99ca77c9d03db3686f3d_prof);

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
