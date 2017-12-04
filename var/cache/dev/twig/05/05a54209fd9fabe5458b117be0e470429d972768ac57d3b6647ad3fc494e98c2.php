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
        $__internal_f5d74585db57b56fc81d58325bb609bb6c7d67494934337fd1e3ec52978bfb61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d74585db57b56fc81d58325bb609bb6c7d67494934337fd1e3ec52978bfb61->enter($__internal_f5d74585db57b56fc81d58325bb609bb6c7d67494934337fd1e3ec52978bfb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c4fc00d3f816ec6896ce611492a84689748fd646dce4fc7dc90097af7e15ed97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4fc00d3f816ec6896ce611492a84689748fd646dce4fc7dc90097af7e15ed97->enter($__internal_c4fc00d3f816ec6896ce611492a84689748fd646dce4fc7dc90097af7e15ed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f5d74585db57b56fc81d58325bb609bb6c7d67494934337fd1e3ec52978bfb61->leave($__internal_f5d74585db57b56fc81d58325bb609bb6c7d67494934337fd1e3ec52978bfb61_prof);

        
        $__internal_c4fc00d3f816ec6896ce611492a84689748fd646dce4fc7dc90097af7e15ed97->leave($__internal_c4fc00d3f816ec6896ce611492a84689748fd646dce4fc7dc90097af7e15ed97_prof);

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
", "@Framework/Form/number_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
