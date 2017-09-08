<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_a6195b99cc8dce1ca9e82f81f09ea84f113a3d0dd443ac5a96d3efaae2e46e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6195b99cc8dce1ca9e82f81f09ea84f113a3d0dd443ac5a96d3efaae2e46e2d->enter($__internal_a6195b99cc8dce1ca9e82f81f09ea84f113a3d0dd443ac5a96d3efaae2e46e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4703cb03085ba9fb642982705b795dfda14024e1c4c1d0e588ed25ac1691031c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4703cb03085ba9fb642982705b795dfda14024e1c4c1d0e588ed25ac1691031c->enter($__internal_4703cb03085ba9fb642982705b795dfda14024e1c4c1d0e588ed25ac1691031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a6195b99cc8dce1ca9e82f81f09ea84f113a3d0dd443ac5a96d3efaae2e46e2d->leave($__internal_a6195b99cc8dce1ca9e82f81f09ea84f113a3d0dd443ac5a96d3efaae2e46e2d_prof);

        
        $__internal_4703cb03085ba9fb642982705b795dfda14024e1c4c1d0e588ed25ac1691031c->leave($__internal_4703cb03085ba9fb642982705b795dfda14024e1c4c1d0e588ed25ac1691031c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
