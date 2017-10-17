<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f59d8b04853c8272f7d88d942539d218cbe89974f8faab8c4aea6e0d38fb64a1 extends Twig_Template
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
        $__internal_4d36d546c101ab6bb616a19af6ecacb9613737d5a80f623e89de1863faece08a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d36d546c101ab6bb616a19af6ecacb9613737d5a80f623e89de1863faece08a->enter($__internal_4d36d546c101ab6bb616a19af6ecacb9613737d5a80f623e89de1863faece08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_571ecfb1b5816f9a17a31310e8959f7e5619ad98b376c1cf6cdcd47017542bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571ecfb1b5816f9a17a31310e8959f7e5619ad98b376c1cf6cdcd47017542bf1->enter($__internal_571ecfb1b5816f9a17a31310e8959f7e5619ad98b376c1cf6cdcd47017542bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4d36d546c101ab6bb616a19af6ecacb9613737d5a80f623e89de1863faece08a->leave($__internal_4d36d546c101ab6bb616a19af6ecacb9613737d5a80f623e89de1863faece08a_prof);

        
        $__internal_571ecfb1b5816f9a17a31310e8959f7e5619ad98b376c1cf6cdcd47017542bf1->leave($__internal_571ecfb1b5816f9a17a31310e8959f7e5619ad98b376c1cf6cdcd47017542bf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
