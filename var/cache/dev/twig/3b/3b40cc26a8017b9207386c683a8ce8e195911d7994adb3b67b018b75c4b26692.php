<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_4c4e942d7333f59f2c18e3d1707c9da5619650e6ab9b852e8e69c9706e16d730 extends Twig_Template
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
        $__internal_9d29dbb37a7c80af59905c19ac633eff66e44bc7aa66489a2a71f952dc82da3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d29dbb37a7c80af59905c19ac633eff66e44bc7aa66489a2a71f952dc82da3f->enter($__internal_9d29dbb37a7c80af59905c19ac633eff66e44bc7aa66489a2a71f952dc82da3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_92da27e1b727aec7af24470edfa7395b5a7f74c94107204f7e4c207bf7f3fc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92da27e1b727aec7af24470edfa7395b5a7f74c94107204f7e4c207bf7f3fc58->enter($__internal_92da27e1b727aec7af24470edfa7395b5a7f74c94107204f7e4c207bf7f3fc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9d29dbb37a7c80af59905c19ac633eff66e44bc7aa66489a2a71f952dc82da3f->leave($__internal_9d29dbb37a7c80af59905c19ac633eff66e44bc7aa66489a2a71f952dc82da3f_prof);

        
        $__internal_92da27e1b727aec7af24470edfa7395b5a7f74c94107204f7e4c207bf7f3fc58->leave($__internal_92da27e1b727aec7af24470edfa7395b5a7f74c94107204f7e4c207bf7f3fc58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
