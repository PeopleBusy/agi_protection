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
        $__internal_4795ffef1a56f593e0704b0b95db5437627091565ec69cd750ec1ac8174db7dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4795ffef1a56f593e0704b0b95db5437627091565ec69cd750ec1ac8174db7dd->enter($__internal_4795ffef1a56f593e0704b0b95db5437627091565ec69cd750ec1ac8174db7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1f231b37afd53683a1bd166f8be25ad40a15cbd45ca15378930cda03069daaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f231b37afd53683a1bd166f8be25ad40a15cbd45ca15378930cda03069daaa9->enter($__internal_1f231b37afd53683a1bd166f8be25ad40a15cbd45ca15378930cda03069daaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4795ffef1a56f593e0704b0b95db5437627091565ec69cd750ec1ac8174db7dd->leave($__internal_4795ffef1a56f593e0704b0b95db5437627091565ec69cd750ec1ac8174db7dd_prof);

        
        $__internal_1f231b37afd53683a1bd166f8be25ad40a15cbd45ca15378930cda03069daaa9->leave($__internal_1f231b37afd53683a1bd166f8be25ad40a15cbd45ca15378930cda03069daaa9_prof);

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
