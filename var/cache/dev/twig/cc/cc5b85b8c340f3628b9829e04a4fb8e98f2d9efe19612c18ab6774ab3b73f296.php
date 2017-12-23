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
        $__internal_6baf35a597bcdad085392bc71bc2e2022df444aaf0654b850d994971d6da4dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6baf35a597bcdad085392bc71bc2e2022df444aaf0654b850d994971d6da4dbd->enter($__internal_6baf35a597bcdad085392bc71bc2e2022df444aaf0654b850d994971d6da4dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_dedf3efce694092871f7ee3b869cebd5006cfc8cb85105812c329e2230b031ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedf3efce694092871f7ee3b869cebd5006cfc8cb85105812c329e2230b031ee->enter($__internal_dedf3efce694092871f7ee3b869cebd5006cfc8cb85105812c329e2230b031ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6baf35a597bcdad085392bc71bc2e2022df444aaf0654b850d994971d6da4dbd->leave($__internal_6baf35a597bcdad085392bc71bc2e2022df444aaf0654b850d994971d6da4dbd_prof);

        
        $__internal_dedf3efce694092871f7ee3b869cebd5006cfc8cb85105812c329e2230b031ee->leave($__internal_dedf3efce694092871f7ee3b869cebd5006cfc8cb85105812c329e2230b031ee_prof);

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
