<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4c45fdc33df41fad9c4084d63bb1a477a65fc661343a6c978aeb13366f2f1b70 extends Twig_Template
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
        $__internal_796768f3aa8b7d69604fa84195477a09de459fe84b9b467f1effa6c74ca86e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796768f3aa8b7d69604fa84195477a09de459fe84b9b467f1effa6c74ca86e0e->enter($__internal_796768f3aa8b7d69604fa84195477a09de459fe84b9b467f1effa6c74ca86e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ebf4747b7032da8711aee8806804cd095ed918983e1f7513e6d456ea15cbd9dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf4747b7032da8711aee8806804cd095ed918983e1f7513e6d456ea15cbd9dd->enter($__internal_ebf4747b7032da8711aee8806804cd095ed918983e1f7513e6d456ea15cbd9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_796768f3aa8b7d69604fa84195477a09de459fe84b9b467f1effa6c74ca86e0e->leave($__internal_796768f3aa8b7d69604fa84195477a09de459fe84b9b467f1effa6c74ca86e0e_prof);

        
        $__internal_ebf4747b7032da8711aee8806804cd095ed918983e1f7513e6d456ea15cbd9dd->leave($__internal_ebf4747b7032da8711aee8806804cd095ed918983e1f7513e6d456ea15cbd9dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
