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
        $__internal_761369cd9a5683190992eac87d1ef8dae6df52fe5bbba72d1b6c334c79841c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761369cd9a5683190992eac87d1ef8dae6df52fe5bbba72d1b6c334c79841c03->enter($__internal_761369cd9a5683190992eac87d1ef8dae6df52fe5bbba72d1b6c334c79841c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_15ec64399dbd77dbcca50a818084a1d95741e3f0c97cc4b19555e92e26767c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ec64399dbd77dbcca50a818084a1d95741e3f0c97cc4b19555e92e26767c0d->enter($__internal_15ec64399dbd77dbcca50a818084a1d95741e3f0c97cc4b19555e92e26767c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_761369cd9a5683190992eac87d1ef8dae6df52fe5bbba72d1b6c334c79841c03->leave($__internal_761369cd9a5683190992eac87d1ef8dae6df52fe5bbba72d1b6c334c79841c03_prof);

        
        $__internal_15ec64399dbd77dbcca50a818084a1d95741e3f0c97cc4b19555e92e26767c0d->leave($__internal_15ec64399dbd77dbcca50a818084a1d95741e3f0c97cc4b19555e92e26767c0d_prof);

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
", "@Framework/Form/radio_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
