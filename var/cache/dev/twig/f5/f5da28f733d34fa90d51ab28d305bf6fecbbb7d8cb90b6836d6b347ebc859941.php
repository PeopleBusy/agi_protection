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
        $__internal_db5ebc5ee6991c03e1c36cbc1de9445eed5a3cc8f5f620a1b70d3625b9f502c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5ebc5ee6991c03e1c36cbc1de9445eed5a3cc8f5f620a1b70d3625b9f502c8->enter($__internal_db5ebc5ee6991c03e1c36cbc1de9445eed5a3cc8f5f620a1b70d3625b9f502c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_a13168f02e8bf1f2dec015af6a0c14cee7b4147288abe792c184acd26403f85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13168f02e8bf1f2dec015af6a0c14cee7b4147288abe792c184acd26403f85b->enter($__internal_a13168f02e8bf1f2dec015af6a0c14cee7b4147288abe792c184acd26403f85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_db5ebc5ee6991c03e1c36cbc1de9445eed5a3cc8f5f620a1b70d3625b9f502c8->leave($__internal_db5ebc5ee6991c03e1c36cbc1de9445eed5a3cc8f5f620a1b70d3625b9f502c8_prof);

        
        $__internal_a13168f02e8bf1f2dec015af6a0c14cee7b4147288abe792c184acd26403f85b->leave($__internal_a13168f02e8bf1f2dec015af6a0c14cee7b4147288abe792c184acd26403f85b_prof);

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
