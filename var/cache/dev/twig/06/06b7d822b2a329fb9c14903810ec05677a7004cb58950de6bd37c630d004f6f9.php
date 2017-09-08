<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_46a61dfdb1f1f10291938d6de7ae8079b8eaaa2a4cc6b10a0d9d62efe3a57a31 extends Twig_Template
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
        $__internal_f1203a55d2f2f50566106dad3cb665c284b92205cb3208b08bb1d61ce631ddf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1203a55d2f2f50566106dad3cb665c284b92205cb3208b08bb1d61ce631ddf5->enter($__internal_f1203a55d2f2f50566106dad3cb665c284b92205cb3208b08bb1d61ce631ddf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_957a2f6652a1f2e14efc0a0d72ff52053c8c6b601d19ed6c457666c6325bd079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957a2f6652a1f2e14efc0a0d72ff52053c8c6b601d19ed6c457666c6325bd079->enter($__internal_957a2f6652a1f2e14efc0a0d72ff52053c8c6b601d19ed6c457666c6325bd079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f1203a55d2f2f50566106dad3cb665c284b92205cb3208b08bb1d61ce631ddf5->leave($__internal_f1203a55d2f2f50566106dad3cb665c284b92205cb3208b08bb1d61ce631ddf5_prof);

        
        $__internal_957a2f6652a1f2e14efc0a0d72ff52053c8c6b601d19ed6c457666c6325bd079->leave($__internal_957a2f6652a1f2e14efc0a0d72ff52053c8c6b601d19ed6c457666c6325bd079_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
