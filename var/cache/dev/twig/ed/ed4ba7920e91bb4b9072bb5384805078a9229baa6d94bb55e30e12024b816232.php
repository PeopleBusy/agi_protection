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
        $__internal_51abd7b8337859e21872d1a44c7240e90e814c4f10c781e74d226688ab1aa930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51abd7b8337859e21872d1a44c7240e90e814c4f10c781e74d226688ab1aa930->enter($__internal_51abd7b8337859e21872d1a44c7240e90e814c4f10c781e74d226688ab1aa930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_93b5dc10cb8ecb0bb098d8f49df31f664d7bedb3735a75705dae5255d47b2b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b5dc10cb8ecb0bb098d8f49df31f664d7bedb3735a75705dae5255d47b2b9e->enter($__internal_93b5dc10cb8ecb0bb098d8f49df31f664d7bedb3735a75705dae5255d47b2b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_51abd7b8337859e21872d1a44c7240e90e814c4f10c781e74d226688ab1aa930->leave($__internal_51abd7b8337859e21872d1a44c7240e90e814c4f10c781e74d226688ab1aa930_prof);

        
        $__internal_93b5dc10cb8ecb0bb098d8f49df31f664d7bedb3735a75705dae5255d47b2b9e->leave($__internal_93b5dc10cb8ecb0bb098d8f49df31f664d7bedb3735a75705dae5255d47b2b9e_prof);

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
", "@Framework/Form/choice_attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
