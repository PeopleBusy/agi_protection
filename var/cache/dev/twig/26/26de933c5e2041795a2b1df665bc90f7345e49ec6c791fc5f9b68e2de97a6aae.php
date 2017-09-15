<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_f28ff632dddd0c8500e2d7d810ff86252d65be59c52e686df0eea0a6f10b9f1d extends Twig_Template
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
        $__internal_64842c6280ae024cc23b2908ee54badf1a882f423b4a24213b4599b5cf7ef585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64842c6280ae024cc23b2908ee54badf1a882f423b4a24213b4599b5cf7ef585->enter($__internal_64842c6280ae024cc23b2908ee54badf1a882f423b4a24213b4599b5cf7ef585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_c710ee8cbd47298f1f2c531e55bb70e537020c239fd89e844db4d361957bb90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c710ee8cbd47298f1f2c531e55bb70e537020c239fd89e844db4d361957bb90c->enter($__internal_c710ee8cbd47298f1f2c531e55bb70e537020c239fd89e844db4d361957bb90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_64842c6280ae024cc23b2908ee54badf1a882f423b4a24213b4599b5cf7ef585->leave($__internal_64842c6280ae024cc23b2908ee54badf1a882f423b4a24213b4599b5cf7ef585_prof);

        
        $__internal_c710ee8cbd47298f1f2c531e55bb70e537020c239fd89e844db4d361957bb90c->leave($__internal_c710ee8cbd47298f1f2c531e55bb70e537020c239fd89e844db4d361957bb90c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
