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
        $__internal_e73f72828600ca48f3452de4143a33cbaed1c149735ebd61bbc1b369c8a4eece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73f72828600ca48f3452de4143a33cbaed1c149735ebd61bbc1b369c8a4eece->enter($__internal_e73f72828600ca48f3452de4143a33cbaed1c149735ebd61bbc1b369c8a4eece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7ee86eed93b53bed07fc921be1675fa6fb0d1f88335eee75abe58f99ee80866c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee86eed93b53bed07fc921be1675fa6fb0d1f88335eee75abe58f99ee80866c->enter($__internal_7ee86eed93b53bed07fc921be1675fa6fb0d1f88335eee75abe58f99ee80866c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e73f72828600ca48f3452de4143a33cbaed1c149735ebd61bbc1b369c8a4eece->leave($__internal_e73f72828600ca48f3452de4143a33cbaed1c149735ebd61bbc1b369c8a4eece_prof);

        
        $__internal_7ee86eed93b53bed07fc921be1675fa6fb0d1f88335eee75abe58f99ee80866c->leave($__internal_7ee86eed93b53bed07fc921be1675fa6fb0d1f88335eee75abe58f99ee80866c_prof);

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
