<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5a662e8eec515ce4837d24b725f3c9d672780393ed74b053347a015fe109fc8c extends Twig_Template
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
        $__internal_c2742d629338f89db5006ecb09895b0190f15a5c093bdec62260f28706273047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2742d629338f89db5006ecb09895b0190f15a5c093bdec62260f28706273047->enter($__internal_c2742d629338f89db5006ecb09895b0190f15a5c093bdec62260f28706273047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3fa87fd554928439607e2cc0f13d7786a6c61a22562f67abb71649f74db21a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa87fd554928439607e2cc0f13d7786a6c61a22562f67abb71649f74db21a3d->enter($__internal_3fa87fd554928439607e2cc0f13d7786a6c61a22562f67abb71649f74db21a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c2742d629338f89db5006ecb09895b0190f15a5c093bdec62260f28706273047->leave($__internal_c2742d629338f89db5006ecb09895b0190f15a5c093bdec62260f28706273047_prof);

        
        $__internal_3fa87fd554928439607e2cc0f13d7786a6c61a22562f67abb71649f74db21a3d->leave($__internal_3fa87fd554928439607e2cc0f13d7786a6c61a22562f67abb71649f74db21a3d_prof);

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
