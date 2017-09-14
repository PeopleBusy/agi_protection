<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_504a739d7442a7342c31d4232523936acaa1f129a1343adc998142342193c8a6 extends Twig_Template
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
        $__internal_88745b6205c2cf9a0275548f4d9bd17fba04347360f512d3a3488f29bbac994f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88745b6205c2cf9a0275548f4d9bd17fba04347360f512d3a3488f29bbac994f->enter($__internal_88745b6205c2cf9a0275548f4d9bd17fba04347360f512d3a3488f29bbac994f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_676d5f34e872d1fc9f06594c47a3ebd8e4a82e81ab1584ddc04e81b7bbf9f04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676d5f34e872d1fc9f06594c47a3ebd8e4a82e81ab1584ddc04e81b7bbf9f04b->enter($__internal_676d5f34e872d1fc9f06594c47a3ebd8e4a82e81ab1584ddc04e81b7bbf9f04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_88745b6205c2cf9a0275548f4d9bd17fba04347360f512d3a3488f29bbac994f->leave($__internal_88745b6205c2cf9a0275548f4d9bd17fba04347360f512d3a3488f29bbac994f_prof);

        
        $__internal_676d5f34e872d1fc9f06594c47a3ebd8e4a82e81ab1584ddc04e81b7bbf9f04b->leave($__internal_676d5f34e872d1fc9f06594c47a3ebd8e4a82e81ab1584ddc04e81b7bbf9f04b_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
