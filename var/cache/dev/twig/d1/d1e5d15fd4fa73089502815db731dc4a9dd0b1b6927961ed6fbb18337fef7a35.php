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
        $__internal_1e1aab5afd535272f23c50f59c7675a1860d3c3f2444a19fb48cb890ad966c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e1aab5afd535272f23c50f59c7675a1860d3c3f2444a19fb48cb890ad966c5f->enter($__internal_1e1aab5afd535272f23c50f59c7675a1860d3c3f2444a19fb48cb890ad966c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_7e9deca0ba69df43e49e5bf0d3220833fd77d68a1805985eb0fe869e9ccb26fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9deca0ba69df43e49e5bf0d3220833fd77d68a1805985eb0fe869e9ccb26fd->enter($__internal_7e9deca0ba69df43e49e5bf0d3220833fd77d68a1805985eb0fe869e9ccb26fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1e1aab5afd535272f23c50f59c7675a1860d3c3f2444a19fb48cb890ad966c5f->leave($__internal_1e1aab5afd535272f23c50f59c7675a1860d3c3f2444a19fb48cb890ad966c5f_prof);

        
        $__internal_7e9deca0ba69df43e49e5bf0d3220833fd77d68a1805985eb0fe869e9ccb26fd->leave($__internal_7e9deca0ba69df43e49e5bf0d3220833fd77d68a1805985eb0fe869e9ccb26fd_prof);

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
