<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5f71fbe2d726e68242f800f2ae5e74588088209bfec1b291150379ef48d15d81 extends Twig_Template
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
        $__internal_6ecf6e253f9107e0b99ae3de2718353b1f9bf745275d13f2a942f95d4b49b73c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecf6e253f9107e0b99ae3de2718353b1f9bf745275d13f2a942f95d4b49b73c->enter($__internal_6ecf6e253f9107e0b99ae3de2718353b1f9bf745275d13f2a942f95d4b49b73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_83c75b66e4a0248367566ec2f0011caee4c7b01e9a3a4c3894c08d1b4321ba44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c75b66e4a0248367566ec2f0011caee4c7b01e9a3a4c3894c08d1b4321ba44->enter($__internal_83c75b66e4a0248367566ec2f0011caee4c7b01e9a3a4c3894c08d1b4321ba44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6ecf6e253f9107e0b99ae3de2718353b1f9bf745275d13f2a942f95d4b49b73c->leave($__internal_6ecf6e253f9107e0b99ae3de2718353b1f9bf745275d13f2a942f95d4b49b73c_prof);

        
        $__internal_83c75b66e4a0248367566ec2f0011caee4c7b01e9a3a4c3894c08d1b4321ba44->leave($__internal_83c75b66e4a0248367566ec2f0011caee4c7b01e9a3a4c3894c08d1b4321ba44_prof);

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
