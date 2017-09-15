<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e0198eed04a4c6ce2a06aab373ddc20d9cd753652ff77b35a9658122836926f7 extends Twig_Template
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
        $__internal_82db2acdda7c010b0d51abb12de86de51f561677405c5d50a55748eeaa346b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82db2acdda7c010b0d51abb12de86de51f561677405c5d50a55748eeaa346b0a->enter($__internal_82db2acdda7c010b0d51abb12de86de51f561677405c5d50a55748eeaa346b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_20b894f4e5d9daa90834e0a0e19fe50c0e3c38d6f049c0f080004883627e9bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b894f4e5d9daa90834e0a0e19fe50c0e3c38d6f049c0f080004883627e9bb4->enter($__internal_20b894f4e5d9daa90834e0a0e19fe50c0e3c38d6f049c0f080004883627e9bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_82db2acdda7c010b0d51abb12de86de51f561677405c5d50a55748eeaa346b0a->leave($__internal_82db2acdda7c010b0d51abb12de86de51f561677405c5d50a55748eeaa346b0a_prof);

        
        $__internal_20b894f4e5d9daa90834e0a0e19fe50c0e3c38d6f049c0f080004883627e9bb4->leave($__internal_20b894f4e5d9daa90834e0a0e19fe50c0e3c38d6f049c0f080004883627e9bb4_prof);

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
