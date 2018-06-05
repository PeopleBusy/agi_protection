<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_274fddf7edde623788af8e77a6e37ed9dfb84b50a8f7ef6c92587327a9c69f7c extends Twig_Template
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
        $__internal_b285e199723e1f06cc447ee0a7326903837cc777b3925269d9b958d916affc6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b285e199723e1f06cc447ee0a7326903837cc777b3925269d9b958d916affc6b->enter($__internal_b285e199723e1f06cc447ee0a7326903837cc777b3925269d9b958d916affc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0950913ab61a9f03fa9b32cc7bb1da1c27a56b4af236a4eb4dd6ca88be0be1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0950913ab61a9f03fa9b32cc7bb1da1c27a56b4af236a4eb4dd6ca88be0be1f5->enter($__internal_0950913ab61a9f03fa9b32cc7bb1da1c27a56b4af236a4eb4dd6ca88be0be1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b285e199723e1f06cc447ee0a7326903837cc777b3925269d9b958d916affc6b->leave($__internal_b285e199723e1f06cc447ee0a7326903837cc777b3925269d9b958d916affc6b_prof);

        
        $__internal_0950913ab61a9f03fa9b32cc7bb1da1c27a56b4af236a4eb4dd6ca88be0be1f5->leave($__internal_0950913ab61a9f03fa9b32cc7bb1da1c27a56b4af236a4eb4dd6ca88be0be1f5_prof);

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
", "@Framework/Form/submit_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
