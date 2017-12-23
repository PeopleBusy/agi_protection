<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_ff8434ca7e93d453d1ace8202b3dfb7f96dff1170c28adb751c1ded683fc91f6 extends Twig_Template
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
        $__internal_e8d038a3182c1b85b5c222f95d1b368b2839ba37bb86a1e944aec74a80b94cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d038a3182c1b85b5c222f95d1b368b2839ba37bb86a1e944aec74a80b94cdb->enter($__internal_e8d038a3182c1b85b5c222f95d1b368b2839ba37bb86a1e944aec74a80b94cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_9befda068038bb404818c97a091c02f1a4db8fcd3f73b37ab790ab9c5ad5e69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9befda068038bb404818c97a091c02f1a4db8fcd3f73b37ab790ab9c5ad5e69b->enter($__internal_9befda068038bb404818c97a091c02f1a4db8fcd3f73b37ab790ab9c5ad5e69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e8d038a3182c1b85b5c222f95d1b368b2839ba37bb86a1e944aec74a80b94cdb->leave($__internal_e8d038a3182c1b85b5c222f95d1b368b2839ba37bb86a1e944aec74a80b94cdb_prof);

        
        $__internal_9befda068038bb404818c97a091c02f1a4db8fcd3f73b37ab790ab9c5ad5e69b->leave($__internal_9befda068038bb404818c97a091c02f1a4db8fcd3f73b37ab790ab9c5ad5e69b_prof);

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
", "@Framework/Form/button_attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
