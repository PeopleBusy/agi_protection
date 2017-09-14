<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5c6c7f7e4edd9ea082228bbeb52f88615a38a4ecead6399f3fb6281305de7795 extends Twig_Template
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
        $__internal_47869a4687e28cfb93740218e2b50be04e405b8caea4ec1642b4339934502c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47869a4687e28cfb93740218e2b50be04e405b8caea4ec1642b4339934502c9c->enter($__internal_47869a4687e28cfb93740218e2b50be04e405b8caea4ec1642b4339934502c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b39e11888de2829f16d91f8d3ab9abfdd98ccbc2d574f1a6a87d3e2348c7b79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39e11888de2829f16d91f8d3ab9abfdd98ccbc2d574f1a6a87d3e2348c7b79e->enter($__internal_b39e11888de2829f16d91f8d3ab9abfdd98ccbc2d574f1a6a87d3e2348c7b79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_47869a4687e28cfb93740218e2b50be04e405b8caea4ec1642b4339934502c9c->leave($__internal_47869a4687e28cfb93740218e2b50be04e405b8caea4ec1642b4339934502c9c_prof);

        
        $__internal_b39e11888de2829f16d91f8d3ab9abfdd98ccbc2d574f1a6a87d3e2348c7b79e->leave($__internal_b39e11888de2829f16d91f8d3ab9abfdd98ccbc2d574f1a6a87d3e2348c7b79e_prof);

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
", "@Framework/Form/container_attributes.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
