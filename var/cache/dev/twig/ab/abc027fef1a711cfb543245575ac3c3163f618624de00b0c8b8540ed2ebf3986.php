<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ce2bf6b26baacc28cd40a621e4dd1a12ac0306ff9a3c8e253dc379e592380e2b extends Twig_Template
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
        $__internal_695f5c07d0bd3ecb1ee7f1947eea80a38f33ca8045c9a8185e1a7b1c62884ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695f5c07d0bd3ecb1ee7f1947eea80a38f33ca8045c9a8185e1a7b1c62884ee9->enter($__internal_695f5c07d0bd3ecb1ee7f1947eea80a38f33ca8045c9a8185e1a7b1c62884ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0ebe7ce3dd0914348f45892866d02f015493c4aaecf9e4773495c38d3f7c7a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebe7ce3dd0914348f45892866d02f015493c4aaecf9e4773495c38d3f7c7a26->enter($__internal_0ebe7ce3dd0914348f45892866d02f015493c4aaecf9e4773495c38d3f7c7a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_695f5c07d0bd3ecb1ee7f1947eea80a38f33ca8045c9a8185e1a7b1c62884ee9->leave($__internal_695f5c07d0bd3ecb1ee7f1947eea80a38f33ca8045c9a8185e1a7b1c62884ee9_prof);

        
        $__internal_0ebe7ce3dd0914348f45892866d02f015493c4aaecf9e4773495c38d3f7c7a26->leave($__internal_0ebe7ce3dd0914348f45892866d02f015493c4aaecf9e4773495c38d3f7c7a26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
