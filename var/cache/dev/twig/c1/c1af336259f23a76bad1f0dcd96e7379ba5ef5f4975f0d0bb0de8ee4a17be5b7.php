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
        $__internal_6a49b7bb61f041099991aa64b291bb26120aa4fb38d4be6ab21c03aa78ec00ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a49b7bb61f041099991aa64b291bb26120aa4fb38d4be6ab21c03aa78ec00ea->enter($__internal_6a49b7bb61f041099991aa64b291bb26120aa4fb38d4be6ab21c03aa78ec00ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_afe88bd6feb80a56577dc2a5f66a9368fc8b243ebe78708abb48622d93d9e604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe88bd6feb80a56577dc2a5f66a9368fc8b243ebe78708abb48622d93d9e604->enter($__internal_afe88bd6feb80a56577dc2a5f66a9368fc8b243ebe78708abb48622d93d9e604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6a49b7bb61f041099991aa64b291bb26120aa4fb38d4be6ab21c03aa78ec00ea->leave($__internal_6a49b7bb61f041099991aa64b291bb26120aa4fb38d4be6ab21c03aa78ec00ea_prof);

        
        $__internal_afe88bd6feb80a56577dc2a5f66a9368fc8b243ebe78708abb48622d93d9e604->leave($__internal_afe88bd6feb80a56577dc2a5f66a9368fc8b243ebe78708abb48622d93d9e604_prof);

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
