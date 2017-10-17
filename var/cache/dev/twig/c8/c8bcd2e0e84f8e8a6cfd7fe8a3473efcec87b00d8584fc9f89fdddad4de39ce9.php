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
        $__internal_fa02e92961f218cfd2ac058a83d30870584120840fd4f77a1ce4e7292191762c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa02e92961f218cfd2ac058a83d30870584120840fd4f77a1ce4e7292191762c->enter($__internal_fa02e92961f218cfd2ac058a83d30870584120840fd4f77a1ce4e7292191762c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_571ed793fe68d9dc80f4885cc0382e4da5c76c09db0de4a0c9db9d831ed10048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571ed793fe68d9dc80f4885cc0382e4da5c76c09db0de4a0c9db9d831ed10048->enter($__internal_571ed793fe68d9dc80f4885cc0382e4da5c76c09db0de4a0c9db9d831ed10048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_fa02e92961f218cfd2ac058a83d30870584120840fd4f77a1ce4e7292191762c->leave($__internal_fa02e92961f218cfd2ac058a83d30870584120840fd4f77a1ce4e7292191762c_prof);

        
        $__internal_571ed793fe68d9dc80f4885cc0382e4da5c76c09db0de4a0c9db9d831ed10048->leave($__internal_571ed793fe68d9dc80f4885cc0382e4da5c76c09db0de4a0c9db9d831ed10048_prof);

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
