<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_6d7de4026a7070d2d7cc2a4b8dd838716a7ae0085a7550426ed998ce93c523ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7de4026a7070d2d7cc2a4b8dd838716a7ae0085a7550426ed998ce93c523ee->enter($__internal_6d7de4026a7070d2d7cc2a4b8dd838716a7ae0085a7550426ed998ce93c523ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c43af52ee1eab5d03c2443029bfa13f64273059500d22e2dafe310da0efd4a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43af52ee1eab5d03c2443029bfa13f64273059500d22e2dafe310da0efd4a17->enter($__internal_c43af52ee1eab5d03c2443029bfa13f64273059500d22e2dafe310da0efd4a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6d7de4026a7070d2d7cc2a4b8dd838716a7ae0085a7550426ed998ce93c523ee->leave($__internal_6d7de4026a7070d2d7cc2a4b8dd838716a7ae0085a7550426ed998ce93c523ee_prof);

        
        $__internal_c43af52ee1eab5d03c2443029bfa13f64273059500d22e2dafe310da0efd4a17->leave($__internal_c43af52ee1eab5d03c2443029bfa13f64273059500d22e2dafe310da0efd4a17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}