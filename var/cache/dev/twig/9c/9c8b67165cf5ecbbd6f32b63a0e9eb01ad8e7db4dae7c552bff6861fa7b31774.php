<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_7151bdc1f420ec5b8c87dd6d486c0fdf4739f5767b451e78b9f6b3e55b45fafe extends Twig_Template
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
        $__internal_e675fdb00454ec2b200c6c82621c9a27909f166aa6e273058375c1618bbb9559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e675fdb00454ec2b200c6c82621c9a27909f166aa6e273058375c1618bbb9559->enter($__internal_e675fdb00454ec2b200c6c82621c9a27909f166aa6e273058375c1618bbb9559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4bec5d9d1867b15b1da06f2eddccc093f7d292f3a14aaa67e56875a8ade7640e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bec5d9d1867b15b1da06f2eddccc093f7d292f3a14aaa67e56875a8ade7640e->enter($__internal_4bec5d9d1867b15b1da06f2eddccc093f7d292f3a14aaa67e56875a8ade7640e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e675fdb00454ec2b200c6c82621c9a27909f166aa6e273058375c1618bbb9559->leave($__internal_e675fdb00454ec2b200c6c82621c9a27909f166aa6e273058375c1618bbb9559_prof);

        
        $__internal_4bec5d9d1867b15b1da06f2eddccc093f7d292f3a14aaa67e56875a8ade7640e->leave($__internal_4bec5d9d1867b15b1da06f2eddccc093f7d292f3a14aaa67e56875a8ade7640e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
