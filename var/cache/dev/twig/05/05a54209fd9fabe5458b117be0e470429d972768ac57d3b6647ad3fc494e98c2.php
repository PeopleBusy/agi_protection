<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2775229b586ebda0839bec66efc4dd58d7d7e558e29ff336b14f42c60439ea56 extends Twig_Template
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
        $__internal_77f16c6ce54a69fab2735438ae5c95b4107e9aba8074bc9d45cfe63fb34a438d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f16c6ce54a69fab2735438ae5c95b4107e9aba8074bc9d45cfe63fb34a438d->enter($__internal_77f16c6ce54a69fab2735438ae5c95b4107e9aba8074bc9d45cfe63fb34a438d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_23541d25a9519fbc1d9529858e1b2b4a814acab9fdaca026dca6f3c2461e1cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23541d25a9519fbc1d9529858e1b2b4a814acab9fdaca026dca6f3c2461e1cad->enter($__internal_23541d25a9519fbc1d9529858e1b2b4a814acab9fdaca026dca6f3c2461e1cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_77f16c6ce54a69fab2735438ae5c95b4107e9aba8074bc9d45cfe63fb34a438d->leave($__internal_77f16c6ce54a69fab2735438ae5c95b4107e9aba8074bc9d45cfe63fb34a438d_prof);

        
        $__internal_23541d25a9519fbc1d9529858e1b2b4a814acab9fdaca026dca6f3c2461e1cad->leave($__internal_23541d25a9519fbc1d9529858e1b2b4a814acab9fdaca026dca6f3c2461e1cad_prof);

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
", "@Framework/Form/number_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
