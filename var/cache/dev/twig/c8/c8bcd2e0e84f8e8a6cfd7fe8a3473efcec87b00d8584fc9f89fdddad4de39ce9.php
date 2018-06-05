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
        $__internal_6be30a7a5a44f040f8902cb875514016cfa7a2d7c806eded78c1e450b8996281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be30a7a5a44f040f8902cb875514016cfa7a2d7c806eded78c1e450b8996281->enter($__internal_6be30a7a5a44f040f8902cb875514016cfa7a2d7c806eded78c1e450b8996281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_be14c770ff6bc088afefda3fe5fef42409c25ea7698b06f370f35ee0aa4ac386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be14c770ff6bc088afefda3fe5fef42409c25ea7698b06f370f35ee0aa4ac386->enter($__internal_be14c770ff6bc088afefda3fe5fef42409c25ea7698b06f370f35ee0aa4ac386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6be30a7a5a44f040f8902cb875514016cfa7a2d7c806eded78c1e450b8996281->leave($__internal_6be30a7a5a44f040f8902cb875514016cfa7a2d7c806eded78c1e450b8996281_prof);

        
        $__internal_be14c770ff6bc088afefda3fe5fef42409c25ea7698b06f370f35ee0aa4ac386->leave($__internal_be14c770ff6bc088afefda3fe5fef42409c25ea7698b06f370f35ee0aa4ac386_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
