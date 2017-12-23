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
        $__internal_a2a2b6ef26dd4301960466b1d4b2e23fe70ad37837f228532116fadc52d8dda1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2a2b6ef26dd4301960466b1d4b2e23fe70ad37837f228532116fadc52d8dda1->enter($__internal_a2a2b6ef26dd4301960466b1d4b2e23fe70ad37837f228532116fadc52d8dda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_5149406b0de037798ecea9607b28310c9d2ec518c075f649eb22a2d3cb3caa50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5149406b0de037798ecea9607b28310c9d2ec518c075f649eb22a2d3cb3caa50->enter($__internal_5149406b0de037798ecea9607b28310c9d2ec518c075f649eb22a2d3cb3caa50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a2a2b6ef26dd4301960466b1d4b2e23fe70ad37837f228532116fadc52d8dda1->leave($__internal_a2a2b6ef26dd4301960466b1d4b2e23fe70ad37837f228532116fadc52d8dda1_prof);

        
        $__internal_5149406b0de037798ecea9607b28310c9d2ec518c075f649eb22a2d3cb3caa50->leave($__internal_5149406b0de037798ecea9607b28310c9d2ec518c075f649eb22a2d3cb3caa50_prof);

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
