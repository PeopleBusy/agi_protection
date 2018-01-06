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
        $__internal_f41d1d7eb12c56c5edb292dd5685b66d0812470efb64d657e2edc97ceffd8093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41d1d7eb12c56c5edb292dd5685b66d0812470efb64d657e2edc97ceffd8093->enter($__internal_f41d1d7eb12c56c5edb292dd5685b66d0812470efb64d657e2edc97ceffd8093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_631f931e71541e31cfb50faf0d9e91299a346c8db0dc799b6da1629b4e4e1180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631f931e71541e31cfb50faf0d9e91299a346c8db0dc799b6da1629b4e4e1180->enter($__internal_631f931e71541e31cfb50faf0d9e91299a346c8db0dc799b6da1629b4e4e1180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f41d1d7eb12c56c5edb292dd5685b66d0812470efb64d657e2edc97ceffd8093->leave($__internal_f41d1d7eb12c56c5edb292dd5685b66d0812470efb64d657e2edc97ceffd8093_prof);

        
        $__internal_631f931e71541e31cfb50faf0d9e91299a346c8db0dc799b6da1629b4e4e1180->leave($__internal_631f931e71541e31cfb50faf0d9e91299a346c8db0dc799b6da1629b4e4e1180_prof);

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
", "@Framework/Form/choice_options.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
