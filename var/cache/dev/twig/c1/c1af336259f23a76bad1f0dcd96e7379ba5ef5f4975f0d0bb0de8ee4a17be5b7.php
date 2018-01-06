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
        $__internal_d374b3f8f1931e9bb9bec02c31066158543df9163835df8975fb90edd37ca624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d374b3f8f1931e9bb9bec02c31066158543df9163835df8975fb90edd37ca624->enter($__internal_d374b3f8f1931e9bb9bec02c31066158543df9163835df8975fb90edd37ca624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_074dc87e578842b51821fbb4b1618837274ffdc28deb2ffc060ea89f35f75175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074dc87e578842b51821fbb4b1618837274ffdc28deb2ffc060ea89f35f75175->enter($__internal_074dc87e578842b51821fbb4b1618837274ffdc28deb2ffc060ea89f35f75175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d374b3f8f1931e9bb9bec02c31066158543df9163835df8975fb90edd37ca624->leave($__internal_d374b3f8f1931e9bb9bec02c31066158543df9163835df8975fb90edd37ca624_prof);

        
        $__internal_074dc87e578842b51821fbb4b1618837274ffdc28deb2ffc060ea89f35f75175->leave($__internal_074dc87e578842b51821fbb4b1618837274ffdc28deb2ffc060ea89f35f75175_prof);

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
", "@Framework/Form/widget_attributes.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
