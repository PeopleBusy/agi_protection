<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f59d8b04853c8272f7d88d942539d218cbe89974f8faab8c4aea6e0d38fb64a1 extends Twig_Template
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
        $__internal_fa9e7334288a6444cda4ced95ef7f05a8ebf562b0ee3dbb59ad83ff865630410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9e7334288a6444cda4ced95ef7f05a8ebf562b0ee3dbb59ad83ff865630410->enter($__internal_fa9e7334288a6444cda4ced95ef7f05a8ebf562b0ee3dbb59ad83ff865630410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b40cd19d1dbeef89189384f6cbfced580fd45b60494194a4421d1c9b1e281fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40cd19d1dbeef89189384f6cbfced580fd45b60494194a4421d1c9b1e281fc5->enter($__internal_b40cd19d1dbeef89189384f6cbfced580fd45b60494194a4421d1c9b1e281fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fa9e7334288a6444cda4ced95ef7f05a8ebf562b0ee3dbb59ad83ff865630410->leave($__internal_fa9e7334288a6444cda4ced95ef7f05a8ebf562b0ee3dbb59ad83ff865630410_prof);

        
        $__internal_b40cd19d1dbeef89189384f6cbfced580fd45b60494194a4421d1c9b1e281fc5->leave($__internal_b40cd19d1dbeef89189384f6cbfced580fd45b60494194a4421d1c9b1e281fc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
