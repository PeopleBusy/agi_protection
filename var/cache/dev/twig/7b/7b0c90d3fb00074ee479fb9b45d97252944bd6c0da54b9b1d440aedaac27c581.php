<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_1e97088ba27d4cf934c736a866f19b1a2cb4f481fc7fe09e89bd9676bc388b5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e97088ba27d4cf934c736a866f19b1a2cb4f481fc7fe09e89bd9676bc388b5d->enter($__internal_1e97088ba27d4cf934c736a866f19b1a2cb4f481fc7fe09e89bd9676bc388b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_dec95ec41b550e00d118b988e8d1f577a9c8c56940ca5860cad79b238ed17d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec95ec41b550e00d118b988e8d1f577a9c8c56940ca5860cad79b238ed17d2c->enter($__internal_dec95ec41b550e00d118b988e8d1f577a9c8c56940ca5860cad79b238ed17d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1e97088ba27d4cf934c736a866f19b1a2cb4f481fc7fe09e89bd9676bc388b5d->leave($__internal_1e97088ba27d4cf934c736a866f19b1a2cb4f481fc7fe09e89bd9676bc388b5d_prof);

        
        $__internal_dec95ec41b550e00d118b988e8d1f577a9c8c56940ca5860cad79b238ed17d2c->leave($__internal_dec95ec41b550e00d118b988e8d1f577a9c8c56940ca5860cad79b238ed17d2c_prof);

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
", "@Framework/Form/radio_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
