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
        $__internal_fbc237edde96b66add64894c5ade13f3b3d0773e7983ca6dc4bde6be5b7ab429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc237edde96b66add64894c5ade13f3b3d0773e7983ca6dc4bde6be5b7ab429->enter($__internal_fbc237edde96b66add64894c5ade13f3b3d0773e7983ca6dc4bde6be5b7ab429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3f37b4c5261e2e421d1befeb1061b7cc44c187e705c8c30168f144bc0c2e566e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f37b4c5261e2e421d1befeb1061b7cc44c187e705c8c30168f144bc0c2e566e->enter($__internal_3f37b4c5261e2e421d1befeb1061b7cc44c187e705c8c30168f144bc0c2e566e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fbc237edde96b66add64894c5ade13f3b3d0773e7983ca6dc4bde6be5b7ab429->leave($__internal_fbc237edde96b66add64894c5ade13f3b3d0773e7983ca6dc4bde6be5b7ab429_prof);

        
        $__internal_3f37b4c5261e2e421d1befeb1061b7cc44c187e705c8c30168f144bc0c2e566e->leave($__internal_3f37b4c5261e2e421d1befeb1061b7cc44c187e705c8c30168f144bc0c2e566e_prof);

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
", "@Framework/Form/form_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
