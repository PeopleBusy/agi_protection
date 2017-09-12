<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_391b3d6db23a4c4ef15b2cca7927f46d7041bba62d7dcd704d308537523bec60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391b3d6db23a4c4ef15b2cca7927f46d7041bba62d7dcd704d308537523bec60->enter($__internal_391b3d6db23a4c4ef15b2cca7927f46d7041bba62d7dcd704d308537523bec60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_fc1733d034bce7f4f851af164e9115ab060f24321c5714ca13c0a89e5c7a71ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1733d034bce7f4f851af164e9115ab060f24321c5714ca13c0a89e5c7a71ba->enter($__internal_fc1733d034bce7f4f851af164e9115ab060f24321c5714ca13c0a89e5c7a71ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_391b3d6db23a4c4ef15b2cca7927f46d7041bba62d7dcd704d308537523bec60->leave($__internal_391b3d6db23a4c4ef15b2cca7927f46d7041bba62d7dcd704d308537523bec60_prof);

        
        $__internal_fc1733d034bce7f4f851af164e9115ab060f24321c5714ca13c0a89e5c7a71ba->leave($__internal_fc1733d034bce7f4f851af164e9115ab060f24321c5714ca13c0a89e5c7a71ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
