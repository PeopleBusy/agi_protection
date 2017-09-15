<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8dc409fdfb29443f914c1a0fc3e0c97a886f11be158919fd47a526cfdf480ae2 extends Twig_Template
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
        $__internal_a0231f6c4faff97cf4d4c21cc645d1f7af529321326a2558a4bbd160daf59133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0231f6c4faff97cf4d4c21cc645d1f7af529321326a2558a4bbd160daf59133->enter($__internal_a0231f6c4faff97cf4d4c21cc645d1f7af529321326a2558a4bbd160daf59133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8f680d4fbc5db56d0e0b48e0819695a92daa853ce616a442c802e4774aeb6e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f680d4fbc5db56d0e0b48e0819695a92daa853ce616a442c802e4774aeb6e44->enter($__internal_8f680d4fbc5db56d0e0b48e0819695a92daa853ce616a442c802e4774aeb6e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a0231f6c4faff97cf4d4c21cc645d1f7af529321326a2558a4bbd160daf59133->leave($__internal_a0231f6c4faff97cf4d4c21cc645d1f7af529321326a2558a4bbd160daf59133_prof);

        
        $__internal_8f680d4fbc5db56d0e0b48e0819695a92daa853ce616a442c802e4774aeb6e44->leave($__internal_8f680d4fbc5db56d0e0b48e0819695a92daa853ce616a442c802e4774aeb6e44_prof);

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
