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
        $__internal_7b9d34ead7b2e1be825678cf443ed21ee3cb42e9c73286ecdb760a9961423847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b9d34ead7b2e1be825678cf443ed21ee3cb42e9c73286ecdb760a9961423847->enter($__internal_7b9d34ead7b2e1be825678cf443ed21ee3cb42e9c73286ecdb760a9961423847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_601f4a8408a8b1ba8ef91aafb7ac83111e69dff885c437a24d9ec0921315309a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601f4a8408a8b1ba8ef91aafb7ac83111e69dff885c437a24d9ec0921315309a->enter($__internal_601f4a8408a8b1ba8ef91aafb7ac83111e69dff885c437a24d9ec0921315309a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7b9d34ead7b2e1be825678cf443ed21ee3cb42e9c73286ecdb760a9961423847->leave($__internal_7b9d34ead7b2e1be825678cf443ed21ee3cb42e9c73286ecdb760a9961423847_prof);

        
        $__internal_601f4a8408a8b1ba8ef91aafb7ac83111e69dff885c437a24d9ec0921315309a->leave($__internal_601f4a8408a8b1ba8ef91aafb7ac83111e69dff885c437a24d9ec0921315309a_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
