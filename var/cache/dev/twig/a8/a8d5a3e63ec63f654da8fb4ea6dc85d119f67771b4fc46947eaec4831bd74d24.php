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
        $__internal_f440ba7b696e9366f9cd5d8ec5a7e107924a94eaf55a4b480ea6adc5f3c66fd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f440ba7b696e9366f9cd5d8ec5a7e107924a94eaf55a4b480ea6adc5f3c66fd9->enter($__internal_f440ba7b696e9366f9cd5d8ec5a7e107924a94eaf55a4b480ea6adc5f3c66fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a82e04d25ecde50da187358e9f76d87150bd89628c23f1adde6429b8170f7172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82e04d25ecde50da187358e9f76d87150bd89628c23f1adde6429b8170f7172->enter($__internal_a82e04d25ecde50da187358e9f76d87150bd89628c23f1adde6429b8170f7172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f440ba7b696e9366f9cd5d8ec5a7e107924a94eaf55a4b480ea6adc5f3c66fd9->leave($__internal_f440ba7b696e9366f9cd5d8ec5a7e107924a94eaf55a4b480ea6adc5f3c66fd9_prof);

        
        $__internal_a82e04d25ecde50da187358e9f76d87150bd89628c23f1adde6429b8170f7172->leave($__internal_a82e04d25ecde50da187358e9f76d87150bd89628c23f1adde6429b8170f7172_prof);

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
