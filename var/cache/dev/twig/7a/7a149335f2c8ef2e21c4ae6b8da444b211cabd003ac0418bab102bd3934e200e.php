<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b6975709208f12cfaeb9803ffdf6965fac624c0ba52f0f775711970af923f94c extends Twig_Template
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
        $__internal_dbeb8fddb67e96bd0faa2ba8c72a4af193a5710086364b0cf1b72a9f8e04c38f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbeb8fddb67e96bd0faa2ba8c72a4af193a5710086364b0cf1b72a9f8e04c38f->enter($__internal_dbeb8fddb67e96bd0faa2ba8c72a4af193a5710086364b0cf1b72a9f8e04c38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_6d84bdcb154777b2fc329aea6c8878b72620eb6b103b96b064abce3f0ab5ddfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d84bdcb154777b2fc329aea6c8878b72620eb6b103b96b064abce3f0ab5ddfc->enter($__internal_6d84bdcb154777b2fc329aea6c8878b72620eb6b103b96b064abce3f0ab5ddfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dbeb8fddb67e96bd0faa2ba8c72a4af193a5710086364b0cf1b72a9f8e04c38f->leave($__internal_dbeb8fddb67e96bd0faa2ba8c72a4af193a5710086364b0cf1b72a9f8e04c38f_prof);

        
        $__internal_6d84bdcb154777b2fc329aea6c8878b72620eb6b103b96b064abce3f0ab5ddfc->leave($__internal_6d84bdcb154777b2fc329aea6c8878b72620eb6b103b96b064abce3f0ab5ddfc_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}