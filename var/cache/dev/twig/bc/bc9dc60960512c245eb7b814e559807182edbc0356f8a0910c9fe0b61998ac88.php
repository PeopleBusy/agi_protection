<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_15729c1076be9c06af3914626f4090b95089afb2d49a332931dfc545ec4d7e6d extends Twig_Template
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
        $__internal_ca3b85817e1d9a46bd0b3e9a911a72f3979011c13310fffcf782530ab3fc7eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3b85817e1d9a46bd0b3e9a911a72f3979011c13310fffcf782530ab3fc7eca->enter($__internal_ca3b85817e1d9a46bd0b3e9a911a72f3979011c13310fffcf782530ab3fc7eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0b052c8f1cd7df0e2cdd1d96ff3f7ae75d85eafd97e5b8115b4bbe8990fe31e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b052c8f1cd7df0e2cdd1d96ff3f7ae75d85eafd97e5b8115b4bbe8990fe31e8->enter($__internal_0b052c8f1cd7df0e2cdd1d96ff3f7ae75d85eafd97e5b8115b4bbe8990fe31e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ca3b85817e1d9a46bd0b3e9a911a72f3979011c13310fffcf782530ab3fc7eca->leave($__internal_ca3b85817e1d9a46bd0b3e9a911a72f3979011c13310fffcf782530ab3fc7eca_prof);

        
        $__internal_0b052c8f1cd7df0e2cdd1d96ff3f7ae75d85eafd97e5b8115b4bbe8990fe31e8->leave($__internal_0b052c8f1cd7df0e2cdd1d96ff3f7ae75d85eafd97e5b8115b4bbe8990fe31e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
