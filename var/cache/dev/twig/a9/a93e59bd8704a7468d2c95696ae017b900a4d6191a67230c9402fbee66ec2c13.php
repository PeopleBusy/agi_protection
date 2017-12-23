<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ed1d4f12c59872f657460f5b301903870b46051ffabf88eca0d13a397e06e798 extends Twig_Template
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
        $__internal_bacc752290135c2ec58b9120b96bce8e6beeb358a1a591dd1079bb6dcc1aa526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bacc752290135c2ec58b9120b96bce8e6beeb358a1a591dd1079bb6dcc1aa526->enter($__internal_bacc752290135c2ec58b9120b96bce8e6beeb358a1a591dd1079bb6dcc1aa526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_19b27c794d75c29782604f715efca99a4f09ac2997342cb9a7a53334235b533f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b27c794d75c29782604f715efca99a4f09ac2997342cb9a7a53334235b533f->enter($__internal_19b27c794d75c29782604f715efca99a4f09ac2997342cb9a7a53334235b533f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bacc752290135c2ec58b9120b96bce8e6beeb358a1a591dd1079bb6dcc1aa526->leave($__internal_bacc752290135c2ec58b9120b96bce8e6beeb358a1a591dd1079bb6dcc1aa526_prof);

        
        $__internal_19b27c794d75c29782604f715efca99a4f09ac2997342cb9a7a53334235b533f->leave($__internal_19b27c794d75c29782604f715efca99a4f09ac2997342cb9a7a53334235b533f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
