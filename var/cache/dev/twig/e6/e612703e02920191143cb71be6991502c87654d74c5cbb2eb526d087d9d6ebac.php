<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_5f9e8f46b4a0620fa862692e8238bbd359b0036f1fa5f70fe09cd1bf4ddcb37f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9e8f46b4a0620fa862692e8238bbd359b0036f1fa5f70fe09cd1bf4ddcb37f->enter($__internal_5f9e8f46b4a0620fa862692e8238bbd359b0036f1fa5f70fe09cd1bf4ddcb37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e562e8f973e369a4c0790c3ca2303a2c605598078f854f48d638ab878b243b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e562e8f973e369a4c0790c3ca2303a2c605598078f854f48d638ab878b243b78->enter($__internal_e562e8f973e369a4c0790c3ca2303a2c605598078f854f48d638ab878b243b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5f9e8f46b4a0620fa862692e8238bbd359b0036f1fa5f70fe09cd1bf4ddcb37f->leave($__internal_5f9e8f46b4a0620fa862692e8238bbd359b0036f1fa5f70fe09cd1bf4ddcb37f_prof);

        
        $__internal_e562e8f973e369a4c0790c3ca2303a2c605598078f854f48d638ab878b243b78->leave($__internal_e562e8f973e369a4c0790c3ca2303a2c605598078f854f48d638ab878b243b78_prof);

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
", "@Framework/Form/form_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
