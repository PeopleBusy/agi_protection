<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_bc5b8dacad0d002a3e414e1009181f6887c57d76cc6900e0e6b5ac2571bde06b extends Twig_Template
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
        $__internal_54964adb7525103fb86c2641cdf1313107f6976963a7a1dd78505ae22efb45e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54964adb7525103fb86c2641cdf1313107f6976963a7a1dd78505ae22efb45e6->enter($__internal_54964adb7525103fb86c2641cdf1313107f6976963a7a1dd78505ae22efb45e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_0d65057158fc7f223c8572651f6b39e42151a30cdcaa0ec0b3ccd29ad9b7f4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d65057158fc7f223c8572651f6b39e42151a30cdcaa0ec0b3ccd29ad9b7f4a6->enter($__internal_0d65057158fc7f223c8572651f6b39e42151a30cdcaa0ec0b3ccd29ad9b7f4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_54964adb7525103fb86c2641cdf1313107f6976963a7a1dd78505ae22efb45e6->leave($__internal_54964adb7525103fb86c2641cdf1313107f6976963a7a1dd78505ae22efb45e6_prof);

        
        $__internal_0d65057158fc7f223c8572651f6b39e42151a30cdcaa0ec0b3ccd29ad9b7f4a6->leave($__internal_0d65057158fc7f223c8572651f6b39e42151a30cdcaa0ec0b3ccd29ad9b7f4a6_prof);

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
", "@Framework/Form/widget_attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
