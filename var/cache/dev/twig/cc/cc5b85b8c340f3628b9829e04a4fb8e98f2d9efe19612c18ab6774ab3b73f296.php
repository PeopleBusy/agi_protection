<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_caacf1d1c24031e576408bb0acbef4dc4e132863b8a696586ec994373e1e8bdd extends Twig_Template
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
        $__internal_9dcb6fb2c6499bcc3110fb1c6cb5553b304875394be62b53a9dde1f217c3c420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dcb6fb2c6499bcc3110fb1c6cb5553b304875394be62b53a9dde1f217c3c420->enter($__internal_9dcb6fb2c6499bcc3110fb1c6cb5553b304875394be62b53a9dde1f217c3c420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a0e4b1621c961fd30787853bd25eed10f3f60842e01dc6ab53d0e286bc974286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e4b1621c961fd30787853bd25eed10f3f60842e01dc6ab53d0e286bc974286->enter($__internal_a0e4b1621c961fd30787853bd25eed10f3f60842e01dc6ab53d0e286bc974286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9dcb6fb2c6499bcc3110fb1c6cb5553b304875394be62b53a9dde1f217c3c420->leave($__internal_9dcb6fb2c6499bcc3110fb1c6cb5553b304875394be62b53a9dde1f217c3c420_prof);

        
        $__internal_a0e4b1621c961fd30787853bd25eed10f3f60842e01dc6ab53d0e286bc974286->leave($__internal_a0e4b1621c961fd30787853bd25eed10f3f60842e01dc6ab53d0e286bc974286_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
