<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_45441ef9ea83d81e1de8b09028b8e3bc55bedb9c36fac8fea13323f16388f75a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45441ef9ea83d81e1de8b09028b8e3bc55bedb9c36fac8fea13323f16388f75a->enter($__internal_45441ef9ea83d81e1de8b09028b8e3bc55bedb9c36fac8fea13323f16388f75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_349a3bcdd41305e466d8c2399042edbef4b6d6b88787fec9d63546ce8e607670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349a3bcdd41305e466d8c2399042edbef4b6d6b88787fec9d63546ce8e607670->enter($__internal_349a3bcdd41305e466d8c2399042edbef4b6d6b88787fec9d63546ce8e607670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_45441ef9ea83d81e1de8b09028b8e3bc55bedb9c36fac8fea13323f16388f75a->leave($__internal_45441ef9ea83d81e1de8b09028b8e3bc55bedb9c36fac8fea13323f16388f75a_prof);

        
        $__internal_349a3bcdd41305e466d8c2399042edbef4b6d6b88787fec9d63546ce8e607670->leave($__internal_349a3bcdd41305e466d8c2399042edbef4b6d6b88787fec9d63546ce8e607670_prof);

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
