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
        $__internal_60497829acf0765dbe18ebb1e7f4a09c7e3d4a9b2cc421f70c2230b8517260e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60497829acf0765dbe18ebb1e7f4a09c7e3d4a9b2cc421f70c2230b8517260e0->enter($__internal_60497829acf0765dbe18ebb1e7f4a09c7e3d4a9b2cc421f70c2230b8517260e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e5fa90cb275cd6d795ba9f9296e919cea60f77ec1d771970cd3abf22f5db9767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fa90cb275cd6d795ba9f9296e919cea60f77ec1d771970cd3abf22f5db9767->enter($__internal_e5fa90cb275cd6d795ba9f9296e919cea60f77ec1d771970cd3abf22f5db9767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_60497829acf0765dbe18ebb1e7f4a09c7e3d4a9b2cc421f70c2230b8517260e0->leave($__internal_60497829acf0765dbe18ebb1e7f4a09c7e3d4a9b2cc421f70c2230b8517260e0_prof);

        
        $__internal_e5fa90cb275cd6d795ba9f9296e919cea60f77ec1d771970cd3abf22f5db9767->leave($__internal_e5fa90cb275cd6d795ba9f9296e919cea60f77ec1d771970cd3abf22f5db9767_prof);

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
