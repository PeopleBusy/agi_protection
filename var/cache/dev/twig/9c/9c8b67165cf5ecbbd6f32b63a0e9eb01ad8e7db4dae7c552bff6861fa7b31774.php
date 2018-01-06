<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_7151bdc1f420ec5b8c87dd6d486c0fdf4739f5767b451e78b9f6b3e55b45fafe extends Twig_Template
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
        $__internal_d037775c5d469d8897ed2d4c1842a652964934fd0d9c447ecc0ae4a0f4e7c708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d037775c5d469d8897ed2d4c1842a652964934fd0d9c447ecc0ae4a0f4e7c708->enter($__internal_d037775c5d469d8897ed2d4c1842a652964934fd0d9c447ecc0ae4a0f4e7c708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_220de121f3ab2e85cbcb98485ce0b8981cd6422b14fdf3210cebb8b51baf91c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220de121f3ab2e85cbcb98485ce0b8981cd6422b14fdf3210cebb8b51baf91c7->enter($__internal_220de121f3ab2e85cbcb98485ce0b8981cd6422b14fdf3210cebb8b51baf91c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d037775c5d469d8897ed2d4c1842a652964934fd0d9c447ecc0ae4a0f4e7c708->leave($__internal_d037775c5d469d8897ed2d4c1842a652964934fd0d9c447ecc0ae4a0f4e7c708_prof);

        
        $__internal_220de121f3ab2e85cbcb98485ce0b8981cd6422b14fdf3210cebb8b51baf91c7->leave($__internal_220de121f3ab2e85cbcb98485ce0b8981cd6422b14fdf3210cebb8b51baf91c7_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
