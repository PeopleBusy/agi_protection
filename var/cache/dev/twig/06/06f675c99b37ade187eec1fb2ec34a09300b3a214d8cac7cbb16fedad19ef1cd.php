<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_2da4b39a3419aca3256496959004662c5b2f1602ff5e9492de2f40ae55ed57be extends Twig_Template
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
        $__internal_8f512d1ed7f6c5ac85cb32d5ca72712cc68f11a6ce3ce4da2cf87cedca1f06ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f512d1ed7f6c5ac85cb32d5ca72712cc68f11a6ce3ce4da2cf87cedca1f06ff->enter($__internal_8f512d1ed7f6c5ac85cb32d5ca72712cc68f11a6ce3ce4da2cf87cedca1f06ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_f0b01bb20b0cfaa73d3a5c3bd43c6be015a8d5362ffdb9c167334ad4d4a113eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b01bb20b0cfaa73d3a5c3bd43c6be015a8d5362ffdb9c167334ad4d4a113eb->enter($__internal_f0b01bb20b0cfaa73d3a5c3bd43c6be015a8d5362ffdb9c167334ad4d4a113eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8f512d1ed7f6c5ac85cb32d5ca72712cc68f11a6ce3ce4da2cf87cedca1f06ff->leave($__internal_8f512d1ed7f6c5ac85cb32d5ca72712cc68f11a6ce3ce4da2cf87cedca1f06ff_prof);

        
        $__internal_f0b01bb20b0cfaa73d3a5c3bd43c6be015a8d5362ffdb9c167334ad4d4a113eb->leave($__internal_f0b01bb20b0cfaa73d3a5c3bd43c6be015a8d5362ffdb9c167334ad4d4a113eb_prof);

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
", "@Framework/Form/url_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
