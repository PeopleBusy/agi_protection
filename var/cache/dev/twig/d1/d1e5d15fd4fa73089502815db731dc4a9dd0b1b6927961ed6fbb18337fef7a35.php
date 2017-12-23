<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cc453bc84f302ab3300c6f131d205a4ad577a5435f6467c480e03167ddf0919d extends Twig_Template
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
        $__internal_9d2242b8dcc637a71b8e7b58929b0ff3ddc2b6a0235c576786a2e7c6862ac315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2242b8dcc637a71b8e7b58929b0ff3ddc2b6a0235c576786a2e7c6862ac315->enter($__internal_9d2242b8dcc637a71b8e7b58929b0ff3ddc2b6a0235c576786a2e7c6862ac315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1b2d80e1870a3cde70ce312c7c4626fdbf0be18e578dc784bbfa6464c853e013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2d80e1870a3cde70ce312c7c4626fdbf0be18e578dc784bbfa6464c853e013->enter($__internal_1b2d80e1870a3cde70ce312c7c4626fdbf0be18e578dc784bbfa6464c853e013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9d2242b8dcc637a71b8e7b58929b0ff3ddc2b6a0235c576786a2e7c6862ac315->leave($__internal_9d2242b8dcc637a71b8e7b58929b0ff3ddc2b6a0235c576786a2e7c6862ac315_prof);

        
        $__internal_1b2d80e1870a3cde70ce312c7c4626fdbf0be18e578dc784bbfa6464c853e013->leave($__internal_1b2d80e1870a3cde70ce312c7c4626fdbf0be18e578dc784bbfa6464c853e013_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
