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
        $__internal_f65ddb8d009d725926534ca316036893498df7e59934498e96f1ad3ef3770601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65ddb8d009d725926534ca316036893498df7e59934498e96f1ad3ef3770601->enter($__internal_f65ddb8d009d725926534ca316036893498df7e59934498e96f1ad3ef3770601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0ec6b9164ce41bac34cc46e70b7e692348d2eb08a6f1269186f954774bf14b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec6b9164ce41bac34cc46e70b7e692348d2eb08a6f1269186f954774bf14b5a->enter($__internal_0ec6b9164ce41bac34cc46e70b7e692348d2eb08a6f1269186f954774bf14b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f65ddb8d009d725926534ca316036893498df7e59934498e96f1ad3ef3770601->leave($__internal_f65ddb8d009d725926534ca316036893498df7e59934498e96f1ad3ef3770601_prof);

        
        $__internal_0ec6b9164ce41bac34cc46e70b7e692348d2eb08a6f1269186f954774bf14b5a->leave($__internal_0ec6b9164ce41bac34cc46e70b7e692348d2eb08a6f1269186f954774bf14b5a_prof);

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
