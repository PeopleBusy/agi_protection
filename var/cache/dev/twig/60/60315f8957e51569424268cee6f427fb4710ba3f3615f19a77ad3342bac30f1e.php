<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_81ee7ab76eb61545685aa6a44a7e5e7b98755a9452837a7ed0d6aac3d6dc7268 extends Twig_Template
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
        $__internal_fbb84c0e981b44ef4335498d3d427a1afe7b0cedd338d7461bbcd1c60005bfad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb84c0e981b44ef4335498d3d427a1afe7b0cedd338d7461bbcd1c60005bfad->enter($__internal_fbb84c0e981b44ef4335498d3d427a1afe7b0cedd338d7461bbcd1c60005bfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7c7e7b91808578b05f888d3cd0b0820b69b6607d5c755474ca63bfc2ca0d8e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7e7b91808578b05f888d3cd0b0820b69b6607d5c755474ca63bfc2ca0d8e03->enter($__internal_7c7e7b91808578b05f888d3cd0b0820b69b6607d5c755474ca63bfc2ca0d8e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_fbb84c0e981b44ef4335498d3d427a1afe7b0cedd338d7461bbcd1c60005bfad->leave($__internal_fbb84c0e981b44ef4335498d3d427a1afe7b0cedd338d7461bbcd1c60005bfad_prof);

        
        $__internal_7c7e7b91808578b05f888d3cd0b0820b69b6607d5c755474ca63bfc2ca0d8e03->leave($__internal_7c7e7b91808578b05f888d3cd0b0820b69b6607d5c755474ca63bfc2ca0d8e03_prof);

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
