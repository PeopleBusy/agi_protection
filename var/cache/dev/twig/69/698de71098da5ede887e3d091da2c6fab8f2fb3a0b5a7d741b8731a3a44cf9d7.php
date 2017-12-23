<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_fa2cdaeae3006b013e2aae3b836ebb9bbe03a6ec63e44dfe47e7ac6b750cfcd5 extends Twig_Template
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
        $__internal_7b0d0dfb545efb2bfebd8cf6ab45e2d0862806bcca8f824093fdd75a803c0760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0d0dfb545efb2bfebd8cf6ab45e2d0862806bcca8f824093fdd75a803c0760->enter($__internal_7b0d0dfb545efb2bfebd8cf6ab45e2d0862806bcca8f824093fdd75a803c0760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_fe98f26807c35b9b2bac2b53187385cbd1764bb4e276a6ebad462da76d833810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe98f26807c35b9b2bac2b53187385cbd1764bb4e276a6ebad462da76d833810->enter($__internal_fe98f26807c35b9b2bac2b53187385cbd1764bb4e276a6ebad462da76d833810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7b0d0dfb545efb2bfebd8cf6ab45e2d0862806bcca8f824093fdd75a803c0760->leave($__internal_7b0d0dfb545efb2bfebd8cf6ab45e2d0862806bcca8f824093fdd75a803c0760_prof);

        
        $__internal_fe98f26807c35b9b2bac2b53187385cbd1764bb4e276a6ebad462da76d833810->leave($__internal_fe98f26807c35b9b2bac2b53187385cbd1764bb4e276a6ebad462da76d833810_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
