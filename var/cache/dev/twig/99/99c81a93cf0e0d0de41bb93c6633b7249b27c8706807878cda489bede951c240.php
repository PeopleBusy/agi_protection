<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4750f6d53c6d6d09bad25e001bcf6d01332c1a96c54d08f7d1a90cdc39964f42 extends Twig_Template
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
        $__internal_992ffe92a78ce4e39ba35404f3e9522156decaaa3eb9d3b52dcfae6380fb9646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992ffe92a78ce4e39ba35404f3e9522156decaaa3eb9d3b52dcfae6380fb9646->enter($__internal_992ffe92a78ce4e39ba35404f3e9522156decaaa3eb9d3b52dcfae6380fb9646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_39f0d9e703ceb36bafe90ebe5f8c553c67c7946ab3aa062397d1312f43fce042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f0d9e703ceb36bafe90ebe5f8c553c67c7946ab3aa062397d1312f43fce042->enter($__internal_39f0d9e703ceb36bafe90ebe5f8c553c67c7946ab3aa062397d1312f43fce042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_992ffe92a78ce4e39ba35404f3e9522156decaaa3eb9d3b52dcfae6380fb9646->leave($__internal_992ffe92a78ce4e39ba35404f3e9522156decaaa3eb9d3b52dcfae6380fb9646_prof);

        
        $__internal_39f0d9e703ceb36bafe90ebe5f8c553c67c7946ab3aa062397d1312f43fce042->leave($__internal_39f0d9e703ceb36bafe90ebe5f8c553c67c7946ab3aa062397d1312f43fce042_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
