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
        $__internal_cdb469e7607728919345c8d9c49e557f674d57bff038bef355cae15fe9a4d0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb469e7607728919345c8d9c49e557f674d57bff038bef355cae15fe9a4d0fe->enter($__internal_cdb469e7607728919345c8d9c49e557f674d57bff038bef355cae15fe9a4d0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e03dddf1c4e9c374fdc865a9411a1c6e0a04b7a257201f0d1087eb95e55b0c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03dddf1c4e9c374fdc865a9411a1c6e0a04b7a257201f0d1087eb95e55b0c35->enter($__internal_e03dddf1c4e9c374fdc865a9411a1c6e0a04b7a257201f0d1087eb95e55b0c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_cdb469e7607728919345c8d9c49e557f674d57bff038bef355cae15fe9a4d0fe->leave($__internal_cdb469e7607728919345c8d9c49e557f674d57bff038bef355cae15fe9a4d0fe_prof);

        
        $__internal_e03dddf1c4e9c374fdc865a9411a1c6e0a04b7a257201f0d1087eb95e55b0c35->leave($__internal_e03dddf1c4e9c374fdc865a9411a1c6e0a04b7a257201f0d1087eb95e55b0c35_prof);

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
", "@Framework/Form/url_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
