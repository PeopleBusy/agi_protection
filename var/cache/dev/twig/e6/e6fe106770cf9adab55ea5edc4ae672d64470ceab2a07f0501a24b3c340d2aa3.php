<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e1a259d2b34b4dc219b5286919ad94a4b7dce810deaffe4a77e3566902b156f9 extends Twig_Template
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
        $__internal_1e4ffc56fe6117ec01a1ceeb3bf30d508a5270aae07aff7a9894883613b60d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4ffc56fe6117ec01a1ceeb3bf30d508a5270aae07aff7a9894883613b60d93->enter($__internal_1e4ffc56fe6117ec01a1ceeb3bf30d508a5270aae07aff7a9894883613b60d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_063b2aba1dbb9607bffaf49028bcdfe74d928bd0e9d441e2edd4c39f7f253559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063b2aba1dbb9607bffaf49028bcdfe74d928bd0e9d441e2edd4c39f7f253559->enter($__internal_063b2aba1dbb9607bffaf49028bcdfe74d928bd0e9d441e2edd4c39f7f253559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1e4ffc56fe6117ec01a1ceeb3bf30d508a5270aae07aff7a9894883613b60d93->leave($__internal_1e4ffc56fe6117ec01a1ceeb3bf30d508a5270aae07aff7a9894883613b60d93_prof);

        
        $__internal_063b2aba1dbb9607bffaf49028bcdfe74d928bd0e9d441e2edd4c39f7f253559->leave($__internal_063b2aba1dbb9607bffaf49028bcdfe74d928bd0e9d441e2edd4c39f7f253559_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
