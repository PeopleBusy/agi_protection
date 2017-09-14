<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_39b7bccad819ec3d738ed2edfddaf31ebc914bc8e40999f57f0571743c6e79f5 extends Twig_Template
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
        $__internal_0d7a5bd3ca57566acd607f9efab562ed2b0e2b080422ef702a9b2b3322d4750a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7a5bd3ca57566acd607f9efab562ed2b0e2b080422ef702a9b2b3322d4750a->enter($__internal_0d7a5bd3ca57566acd607f9efab562ed2b0e2b080422ef702a9b2b3322d4750a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_bb6b51bec751cd9d7adf6f4bd16aad3f862f56a1299de0052ebb73dfd5ed248d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6b51bec751cd9d7adf6f4bd16aad3f862f56a1299de0052ebb73dfd5ed248d->enter($__internal_bb6b51bec751cd9d7adf6f4bd16aad3f862f56a1299de0052ebb73dfd5ed248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0d7a5bd3ca57566acd607f9efab562ed2b0e2b080422ef702a9b2b3322d4750a->leave($__internal_0d7a5bd3ca57566acd607f9efab562ed2b0e2b080422ef702a9b2b3322d4750a_prof);

        
        $__internal_bb6b51bec751cd9d7adf6f4bd16aad3f862f56a1299de0052ebb73dfd5ed248d->leave($__internal_bb6b51bec751cd9d7adf6f4bd16aad3f862f56a1299de0052ebb73dfd5ed248d_prof);

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
