<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_efc50dbcb39cde3da0075686b9a08803aa74b42b48e24f1c52a8db87bb00ceec extends Twig_Template
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
        $__internal_f4e3000dbc795e0bd80bf8bfd52b72d705ffea8c18e9a35087d0cc0c0d1b4f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e3000dbc795e0bd80bf8bfd52b72d705ffea8c18e9a35087d0cc0c0d1b4f93->enter($__internal_f4e3000dbc795e0bd80bf8bfd52b72d705ffea8c18e9a35087d0cc0c0d1b4f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_48b41eebbde86e1dee14c5cd4e368b5d0ace915e6f5554848cc169a0ff85984d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b41eebbde86e1dee14c5cd4e368b5d0ace915e6f5554848cc169a0ff85984d->enter($__internal_48b41eebbde86e1dee14c5cd4e368b5d0ace915e6f5554848cc169a0ff85984d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f4e3000dbc795e0bd80bf8bfd52b72d705ffea8c18e9a35087d0cc0c0d1b4f93->leave($__internal_f4e3000dbc795e0bd80bf8bfd52b72d705ffea8c18e9a35087d0cc0c0d1b4f93_prof);

        
        $__internal_48b41eebbde86e1dee14c5cd4e368b5d0ace915e6f5554848cc169a0ff85984d->leave($__internal_48b41eebbde86e1dee14c5cd4e368b5d0ace915e6f5554848cc169a0ff85984d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
