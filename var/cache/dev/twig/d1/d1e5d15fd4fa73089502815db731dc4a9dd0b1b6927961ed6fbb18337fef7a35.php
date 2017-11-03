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
        $__internal_ff783f7a3a893184caf1726122b5bc7f858637583537733a5dd2f3f91d5d229a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff783f7a3a893184caf1726122b5bc7f858637583537733a5dd2f3f91d5d229a->enter($__internal_ff783f7a3a893184caf1726122b5bc7f858637583537733a5dd2f3f91d5d229a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_57ea80ac504c32823b098695c6e12f1ad1a586ecc78cd914c135522259fd470e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ea80ac504c32823b098695c6e12f1ad1a586ecc78cd914c135522259fd470e->enter($__internal_57ea80ac504c32823b098695c6e12f1ad1a586ecc78cd914c135522259fd470e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ff783f7a3a893184caf1726122b5bc7f858637583537733a5dd2f3f91d5d229a->leave($__internal_ff783f7a3a893184caf1726122b5bc7f858637583537733a5dd2f3f91d5d229a_prof);

        
        $__internal_57ea80ac504c32823b098695c6e12f1ad1a586ecc78cd914c135522259fd470e->leave($__internal_57ea80ac504c32823b098695c6e12f1ad1a586ecc78cd914c135522259fd470e_prof);

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
