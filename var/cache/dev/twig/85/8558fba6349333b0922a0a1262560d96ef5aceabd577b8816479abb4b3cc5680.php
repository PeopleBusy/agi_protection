<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c90c8dd3700f5987348fad4c2c33b105435871ed68f1f64e799a6f3d779bb8eb extends Twig_Template
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
        $__internal_bad5638145d7d88f34d61a4f7db09725c87f2fc1ca2513b36afeb93706635c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad5638145d7d88f34d61a4f7db09725c87f2fc1ca2513b36afeb93706635c94->enter($__internal_bad5638145d7d88f34d61a4f7db09725c87f2fc1ca2513b36afeb93706635c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_938f438f1311883f0518d664f571b57d912c17e66cef9c44e8fe3b25a27797ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938f438f1311883f0518d664f571b57d912c17e66cef9c44e8fe3b25a27797ab->enter($__internal_938f438f1311883f0518d664f571b57d912c17e66cef9c44e8fe3b25a27797ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bad5638145d7d88f34d61a4f7db09725c87f2fc1ca2513b36afeb93706635c94->leave($__internal_bad5638145d7d88f34d61a4f7db09725c87f2fc1ca2513b36afeb93706635c94_prof);

        
        $__internal_938f438f1311883f0518d664f571b57d912c17e66cef9c44e8fe3b25a27797ab->leave($__internal_938f438f1311883f0518d664f571b57d912c17e66cef9c44e8fe3b25a27797ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
