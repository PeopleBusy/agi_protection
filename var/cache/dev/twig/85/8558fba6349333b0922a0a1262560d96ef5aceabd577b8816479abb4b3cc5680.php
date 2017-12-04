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
        $__internal_5db3d551489e27b116cc667208ac0424dde6090e50cb594ca7c107047861b694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db3d551489e27b116cc667208ac0424dde6090e50cb594ca7c107047861b694->enter($__internal_5db3d551489e27b116cc667208ac0424dde6090e50cb594ca7c107047861b694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_285e074352f338aedc8a83c1b5e379f0c4aadc492a5087c008cd4b2710e56530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285e074352f338aedc8a83c1b5e379f0c4aadc492a5087c008cd4b2710e56530->enter($__internal_285e074352f338aedc8a83c1b5e379f0c4aadc492a5087c008cd4b2710e56530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5db3d551489e27b116cc667208ac0424dde6090e50cb594ca7c107047861b694->leave($__internal_5db3d551489e27b116cc667208ac0424dde6090e50cb594ca7c107047861b694_prof);

        
        $__internal_285e074352f338aedc8a83c1b5e379f0c4aadc492a5087c008cd4b2710e56530->leave($__internal_285e074352f338aedc8a83c1b5e379f0c4aadc492a5087c008cd4b2710e56530_prof);

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
", "@Framework/Form/email_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
