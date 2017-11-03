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
        $__internal_db1d5e2137b930634e23c3ded6a8b489f2a9bfe6061348628e89ff92116959bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1d5e2137b930634e23c3ded6a8b489f2a9bfe6061348628e89ff92116959bf->enter($__internal_db1d5e2137b930634e23c3ded6a8b489f2a9bfe6061348628e89ff92116959bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_213e32f1adb4a679d2eff099ef70751473d6871617665aaf3e0be05c4f1179e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213e32f1adb4a679d2eff099ef70751473d6871617665aaf3e0be05c4f1179e8->enter($__internal_213e32f1adb4a679d2eff099ef70751473d6871617665aaf3e0be05c4f1179e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_db1d5e2137b930634e23c3ded6a8b489f2a9bfe6061348628e89ff92116959bf->leave($__internal_db1d5e2137b930634e23c3ded6a8b489f2a9bfe6061348628e89ff92116959bf_prof);

        
        $__internal_213e32f1adb4a679d2eff099ef70751473d6871617665aaf3e0be05c4f1179e8->leave($__internal_213e32f1adb4a679d2eff099ef70751473d6871617665aaf3e0be05c4f1179e8_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
