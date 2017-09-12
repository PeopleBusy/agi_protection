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
        $__internal_3e99dd80f212bcc204ad26d65b2c9598003a368c10632e803d6b135b65c21ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e99dd80f212bcc204ad26d65b2c9598003a368c10632e803d6b135b65c21ecf->enter($__internal_3e99dd80f212bcc204ad26d65b2c9598003a368c10632e803d6b135b65c21ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ad73561ac67349524e4e2ca27ebe9bb3a26a2ec82e8a7c1239fd1278fdf25361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad73561ac67349524e4e2ca27ebe9bb3a26a2ec82e8a7c1239fd1278fdf25361->enter($__internal_ad73561ac67349524e4e2ca27ebe9bb3a26a2ec82e8a7c1239fd1278fdf25361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3e99dd80f212bcc204ad26d65b2c9598003a368c10632e803d6b135b65c21ecf->leave($__internal_3e99dd80f212bcc204ad26d65b2c9598003a368c10632e803d6b135b65c21ecf_prof);

        
        $__internal_ad73561ac67349524e4e2ca27ebe9bb3a26a2ec82e8a7c1239fd1278fdf25361->leave($__internal_ad73561ac67349524e4e2ca27ebe9bb3a26a2ec82e8a7c1239fd1278fdf25361_prof);

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
