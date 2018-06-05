<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_5bed711bd529d97aafdec2aae391b2878ca236620972aa93d7d25bbd6b0e0859 extends Twig_Template
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
        $__internal_30949f8076f4f7c0046e5ced1cacab5aeff91d199ebb9c68be329b7ddfae3063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30949f8076f4f7c0046e5ced1cacab5aeff91d199ebb9c68be329b7ddfae3063->enter($__internal_30949f8076f4f7c0046e5ced1cacab5aeff91d199ebb9c68be329b7ddfae3063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_95f33506f43c40cd4941535e2ae2db72bdcbf34653bbdfb4d4e2f742aae49934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f33506f43c40cd4941535e2ae2db72bdcbf34653bbdfb4d4e2f742aae49934->enter($__internal_95f33506f43c40cd4941535e2ae2db72bdcbf34653bbdfb4d4e2f742aae49934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_30949f8076f4f7c0046e5ced1cacab5aeff91d199ebb9c68be329b7ddfae3063->leave($__internal_30949f8076f4f7c0046e5ced1cacab5aeff91d199ebb9c68be329b7ddfae3063_prof);

        
        $__internal_95f33506f43c40cd4941535e2ae2db72bdcbf34653bbdfb4d4e2f742aae49934->leave($__internal_95f33506f43c40cd4941535e2ae2db72bdcbf34653bbdfb4d4e2f742aae49934_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
