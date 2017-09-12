<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27855908a8d2aa753782c8c6fae419a152fb85ec52e589db0780b5dc6a41addb extends Twig_Template
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
        $__internal_643c158bf7909467253273e4c0b3460ca0a7dafc4604f4da149aae151040791b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643c158bf7909467253273e4c0b3460ca0a7dafc4604f4da149aae151040791b->enter($__internal_643c158bf7909467253273e4c0b3460ca0a7dafc4604f4da149aae151040791b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_cad7e5b7090ae6e6a58fe6728de4783ee393881aa1f69625b7d2fb04383e2e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad7e5b7090ae6e6a58fe6728de4783ee393881aa1f69625b7d2fb04383e2e82->enter($__internal_cad7e5b7090ae6e6a58fe6728de4783ee393881aa1f69625b7d2fb04383e2e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_643c158bf7909467253273e4c0b3460ca0a7dafc4604f4da149aae151040791b->leave($__internal_643c158bf7909467253273e4c0b3460ca0a7dafc4604f4da149aae151040791b_prof);

        
        $__internal_cad7e5b7090ae6e6a58fe6728de4783ee393881aa1f69625b7d2fb04383e2e82->leave($__internal_cad7e5b7090ae6e6a58fe6728de4783ee393881aa1f69625b7d2fb04383e2e82_prof);

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
", "@Framework/Form/choice_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
