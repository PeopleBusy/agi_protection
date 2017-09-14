<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c6bdfe208efa5d63cdd8337f9390a6f537b815670440a4144c63a852263944a7 extends Twig_Template
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
        $__internal_43209e6b569c7941264833a45802910fcf3646430f28e7dc35a30cc3e5341230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43209e6b569c7941264833a45802910fcf3646430f28e7dc35a30cc3e5341230->enter($__internal_43209e6b569c7941264833a45802910fcf3646430f28e7dc35a30cc3e5341230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8c7683446aba40ee7489c5a09586533051692532a647710e821d2284fcb55176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7683446aba40ee7489c5a09586533051692532a647710e821d2284fcb55176->enter($__internal_8c7683446aba40ee7489c5a09586533051692532a647710e821d2284fcb55176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_43209e6b569c7941264833a45802910fcf3646430f28e7dc35a30cc3e5341230->leave($__internal_43209e6b569c7941264833a45802910fcf3646430f28e7dc35a30cc3e5341230_prof);

        
        $__internal_8c7683446aba40ee7489c5a09586533051692532a647710e821d2284fcb55176->leave($__internal_8c7683446aba40ee7489c5a09586533051692532a647710e821d2284fcb55176_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
