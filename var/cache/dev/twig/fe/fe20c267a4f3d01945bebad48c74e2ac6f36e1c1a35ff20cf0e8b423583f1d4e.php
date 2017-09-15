<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8c2bcc2a62d97cefd898e5d32375c0a8780239295ea2a33f37c5446a5a02a4a7 extends Twig_Template
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
        $__internal_542754000ff9f0c999f1a024a9e20021ad16000f63cf62ac7cd416a613ebd461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542754000ff9f0c999f1a024a9e20021ad16000f63cf62ac7cd416a613ebd461->enter($__internal_542754000ff9f0c999f1a024a9e20021ad16000f63cf62ac7cd416a613ebd461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_26f347393d88d5a04cd0dc6cff75045e2c35954e1bf1169c4022a0b21800fe85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f347393d88d5a04cd0dc6cff75045e2c35954e1bf1169c4022a0b21800fe85->enter($__internal_26f347393d88d5a04cd0dc6cff75045e2c35954e1bf1169c4022a0b21800fe85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_542754000ff9f0c999f1a024a9e20021ad16000f63cf62ac7cd416a613ebd461->leave($__internal_542754000ff9f0c999f1a024a9e20021ad16000f63cf62ac7cd416a613ebd461_prof);

        
        $__internal_26f347393d88d5a04cd0dc6cff75045e2c35954e1bf1169c4022a0b21800fe85->leave($__internal_26f347393d88d5a04cd0dc6cff75045e2c35954e1bf1169c4022a0b21800fe85_prof);

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
