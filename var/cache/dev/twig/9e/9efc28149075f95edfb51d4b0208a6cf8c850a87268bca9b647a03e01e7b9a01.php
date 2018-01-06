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
        $__internal_431bb5621875994d44136962de423c3fd3c12ccc350954a2708f3dddeba871a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431bb5621875994d44136962de423c3fd3c12ccc350954a2708f3dddeba871a2->enter($__internal_431bb5621875994d44136962de423c3fd3c12ccc350954a2708f3dddeba871a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_883f984ea60ec8d353fe857dc5788d826ab627004dfbf0c59639aad907505043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883f984ea60ec8d353fe857dc5788d826ab627004dfbf0c59639aad907505043->enter($__internal_883f984ea60ec8d353fe857dc5788d826ab627004dfbf0c59639aad907505043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_431bb5621875994d44136962de423c3fd3c12ccc350954a2708f3dddeba871a2->leave($__internal_431bb5621875994d44136962de423c3fd3c12ccc350954a2708f3dddeba871a2_prof);

        
        $__internal_883f984ea60ec8d353fe857dc5788d826ab627004dfbf0c59639aad907505043->leave($__internal_883f984ea60ec8d353fe857dc5788d826ab627004dfbf0c59639aad907505043_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
