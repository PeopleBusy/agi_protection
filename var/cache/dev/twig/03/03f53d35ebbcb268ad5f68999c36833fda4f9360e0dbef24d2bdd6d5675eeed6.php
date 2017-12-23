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
        $__internal_96ac51f45707de4b5eef1a031b89f4f7d71b4beadc0a2b1cd3c7ea7508c6ffd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ac51f45707de4b5eef1a031b89f4f7d71b4beadc0a2b1cd3c7ea7508c6ffd6->enter($__internal_96ac51f45707de4b5eef1a031b89f4f7d71b4beadc0a2b1cd3c7ea7508c6ffd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9899e46b3a4beb33414b7cfee0ac960915aff94f337e3e7a2814a92177f3946b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9899e46b3a4beb33414b7cfee0ac960915aff94f337e3e7a2814a92177f3946b->enter($__internal_9899e46b3a4beb33414b7cfee0ac960915aff94f337e3e7a2814a92177f3946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_96ac51f45707de4b5eef1a031b89f4f7d71b4beadc0a2b1cd3c7ea7508c6ffd6->leave($__internal_96ac51f45707de4b5eef1a031b89f4f7d71b4beadc0a2b1cd3c7ea7508c6ffd6_prof);

        
        $__internal_9899e46b3a4beb33414b7cfee0ac960915aff94f337e3e7a2814a92177f3946b->leave($__internal_9899e46b3a4beb33414b7cfee0ac960915aff94f337e3e7a2814a92177f3946b_prof);

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
", "@Framework/Form/submit_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
