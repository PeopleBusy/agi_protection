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
        $__internal_926f342aebda131275721ac0dcb3ae557725a669456247a1ffbfe02262f94db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926f342aebda131275721ac0dcb3ae557725a669456247a1ffbfe02262f94db7->enter($__internal_926f342aebda131275721ac0dcb3ae557725a669456247a1ffbfe02262f94db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_5faca5f6243eaa67230f64fe8b0d3402abad38cb9350334f8cb89b1e694741d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5faca5f6243eaa67230f64fe8b0d3402abad38cb9350334f8cb89b1e694741d1->enter($__internal_5faca5f6243eaa67230f64fe8b0d3402abad38cb9350334f8cb89b1e694741d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_926f342aebda131275721ac0dcb3ae557725a669456247a1ffbfe02262f94db7->leave($__internal_926f342aebda131275721ac0dcb3ae557725a669456247a1ffbfe02262f94db7_prof);

        
        $__internal_5faca5f6243eaa67230f64fe8b0d3402abad38cb9350334f8cb89b1e694741d1->leave($__internal_5faca5f6243eaa67230f64fe8b0d3402abad38cb9350334f8cb89b1e694741d1_prof);

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
