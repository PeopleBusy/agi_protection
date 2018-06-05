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
        $__internal_b0cfb4fcbeb788dabe24c55a59049052b3e0914d2a1b1275156091da02a5d795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0cfb4fcbeb788dabe24c55a59049052b3e0914d2a1b1275156091da02a5d795->enter($__internal_b0cfb4fcbeb788dabe24c55a59049052b3e0914d2a1b1275156091da02a5d795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_1c6bb2d309905296176ffcb17d8812ebeb2cabd3e46acb2072ac4d190ab5bce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6bb2d309905296176ffcb17d8812ebeb2cabd3e46acb2072ac4d190ab5bce4->enter($__internal_1c6bb2d309905296176ffcb17d8812ebeb2cabd3e46acb2072ac4d190ab5bce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b0cfb4fcbeb788dabe24c55a59049052b3e0914d2a1b1275156091da02a5d795->leave($__internal_b0cfb4fcbeb788dabe24c55a59049052b3e0914d2a1b1275156091da02a5d795_prof);

        
        $__internal_1c6bb2d309905296176ffcb17d8812ebeb2cabd3e46acb2072ac4d190ab5bce4->leave($__internal_1c6bb2d309905296176ffcb17d8812ebeb2cabd3e46acb2072ac4d190ab5bce4_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
