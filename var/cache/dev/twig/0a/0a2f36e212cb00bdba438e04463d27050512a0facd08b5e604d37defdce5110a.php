<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e4c16c19f8f2434e75928f1a7ab60aa30c50591555f8553767133b1a1101f476 extends Twig_Template
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
        $__internal_7b449b4917c3498c3401a3fb57307c343ab6fc561c2988d60c7d094ae08117d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b449b4917c3498c3401a3fb57307c343ab6fc561c2988d60c7d094ae08117d6->enter($__internal_7b449b4917c3498c3401a3fb57307c343ab6fc561c2988d60c7d094ae08117d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5213ab5e279f5a160c39cc12f4a50881c0c571717c2ade580478a6a66889cf07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5213ab5e279f5a160c39cc12f4a50881c0c571717c2ade580478a6a66889cf07->enter($__internal_5213ab5e279f5a160c39cc12f4a50881c0c571717c2ade580478a6a66889cf07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7b449b4917c3498c3401a3fb57307c343ab6fc561c2988d60c7d094ae08117d6->leave($__internal_7b449b4917c3498c3401a3fb57307c343ab6fc561c2988d60c7d094ae08117d6_prof);

        
        $__internal_5213ab5e279f5a160c39cc12f4a50881c0c571717c2ade580478a6a66889cf07->leave($__internal_5213ab5e279f5a160c39cc12f4a50881c0c571717c2ade580478a6a66889cf07_prof);

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
", "@Framework/Form/email_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
