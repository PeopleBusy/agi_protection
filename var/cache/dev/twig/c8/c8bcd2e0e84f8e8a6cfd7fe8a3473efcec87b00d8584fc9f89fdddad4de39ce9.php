<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8347d7eaa36d0913200076e01b6246cbe20ddd7ebbe68dcf1125dd6e81d9e9ff extends Twig_Template
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
        $__internal_4f83311e5b4974640d95053c08bece8f40cf1e76ffa749604a457843f2136762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f83311e5b4974640d95053c08bece8f40cf1e76ffa749604a457843f2136762->enter($__internal_4f83311e5b4974640d95053c08bece8f40cf1e76ffa749604a457843f2136762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_67075656f2f843eda7f82f01caef7aca82ff64f8b56f836391f4dbbe40c77521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67075656f2f843eda7f82f01caef7aca82ff64f8b56f836391f4dbbe40c77521->enter($__internal_67075656f2f843eda7f82f01caef7aca82ff64f8b56f836391f4dbbe40c77521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4f83311e5b4974640d95053c08bece8f40cf1e76ffa749604a457843f2136762->leave($__internal_4f83311e5b4974640d95053c08bece8f40cf1e76ffa749604a457843f2136762_prof);

        
        $__internal_67075656f2f843eda7f82f01caef7aca82ff64f8b56f836391f4dbbe40c77521->leave($__internal_67075656f2f843eda7f82f01caef7aca82ff64f8b56f836391f4dbbe40c77521_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
