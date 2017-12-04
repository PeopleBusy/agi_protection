<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_49c475ad51259ccaa3fa14d61526ec577290fc69674783ca9621edc8ca60a020 extends Twig_Template
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
        $__internal_cb1c0b4ff1147c4a38e9590092ddf4bf72b175d4d6a6b5242db1ad8ca1d8f821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1c0b4ff1147c4a38e9590092ddf4bf72b175d4d6a6b5242db1ad8ca1d8f821->enter($__internal_cb1c0b4ff1147c4a38e9590092ddf4bf72b175d4d6a6b5242db1ad8ca1d8f821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_04035b0cbc214b2e56c9ca69258b486effd8cbdcaad81cca8e0deb465e6e511b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04035b0cbc214b2e56c9ca69258b486effd8cbdcaad81cca8e0deb465e6e511b->enter($__internal_04035b0cbc214b2e56c9ca69258b486effd8cbdcaad81cca8e0deb465e6e511b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_cb1c0b4ff1147c4a38e9590092ddf4bf72b175d4d6a6b5242db1ad8ca1d8f821->leave($__internal_cb1c0b4ff1147c4a38e9590092ddf4bf72b175d4d6a6b5242db1ad8ca1d8f821_prof);

        
        $__internal_04035b0cbc214b2e56c9ca69258b486effd8cbdcaad81cca8e0deb465e6e511b->leave($__internal_04035b0cbc214b2e56c9ca69258b486effd8cbdcaad81cca8e0deb465e6e511b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
