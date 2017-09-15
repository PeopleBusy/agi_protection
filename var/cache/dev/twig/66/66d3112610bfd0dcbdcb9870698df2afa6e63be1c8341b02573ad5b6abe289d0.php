<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_81f881900f46c06d4160d37af03ef08f158596bd44f4a22861b25804ba4908d7 extends Twig_Template
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
        $__internal_1dbda6cf9f25ebe529b972a53ccdcde4b959147f601c63db96b177d0a67f6cb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dbda6cf9f25ebe529b972a53ccdcde4b959147f601c63db96b177d0a67f6cb9->enter($__internal_1dbda6cf9f25ebe529b972a53ccdcde4b959147f601c63db96b177d0a67f6cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ed9d65d2b5508af4ce5fb0383976797253523fac6d31ef8c1d15621cbe9ffcea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9d65d2b5508af4ce5fb0383976797253523fac6d31ef8c1d15621cbe9ffcea->enter($__internal_ed9d65d2b5508af4ce5fb0383976797253523fac6d31ef8c1d15621cbe9ffcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1dbda6cf9f25ebe529b972a53ccdcde4b959147f601c63db96b177d0a67f6cb9->leave($__internal_1dbda6cf9f25ebe529b972a53ccdcde4b959147f601c63db96b177d0a67f6cb9_prof);

        
        $__internal_ed9d65d2b5508af4ce5fb0383976797253523fac6d31ef8c1d15621cbe9ffcea->leave($__internal_ed9d65d2b5508af4ce5fb0383976797253523fac6d31ef8c1d15621cbe9ffcea_prof);

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
