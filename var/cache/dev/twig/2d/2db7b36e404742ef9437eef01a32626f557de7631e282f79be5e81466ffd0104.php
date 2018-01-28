<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3b56e6709e96a9f701054ac7df3259ffd7aca4d92264f95ea060512c724c1ecc extends Twig_Template
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
        $__internal_d8b63a2fa19f655a56d30f31ee17543982c1e8cd3c87301637eefa136884636f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b63a2fa19f655a56d30f31ee17543982c1e8cd3c87301637eefa136884636f->enter($__internal_d8b63a2fa19f655a56d30f31ee17543982c1e8cd3c87301637eefa136884636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_81cf5f06aaf5db9122dfe5c6237458205c6e7054948bf44e51e25ebedab61b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cf5f06aaf5db9122dfe5c6237458205c6e7054948bf44e51e25ebedab61b78->enter($__internal_81cf5f06aaf5db9122dfe5c6237458205c6e7054948bf44e51e25ebedab61b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d8b63a2fa19f655a56d30f31ee17543982c1e8cd3c87301637eefa136884636f->leave($__internal_d8b63a2fa19f655a56d30f31ee17543982c1e8cd3c87301637eefa136884636f_prof);

        
        $__internal_81cf5f06aaf5db9122dfe5c6237458205c6e7054948bf44e51e25ebedab61b78->leave($__internal_81cf5f06aaf5db9122dfe5c6237458205c6e7054948bf44e51e25ebedab61b78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
