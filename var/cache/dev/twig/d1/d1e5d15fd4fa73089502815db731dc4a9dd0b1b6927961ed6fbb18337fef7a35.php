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
        $__internal_0bf6e4ac30572d2d1993e6e6e13f53ee9ae2c71e25a8ae38395b5fc5302fddf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf6e4ac30572d2d1993e6e6e13f53ee9ae2c71e25a8ae38395b5fc5302fddf9->enter($__internal_0bf6e4ac30572d2d1993e6e6e13f53ee9ae2c71e25a8ae38395b5fc5302fddf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_eead08f2024c1d209e2298838cd5a348cf9f5be4dc907642a5ed5067afb58daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eead08f2024c1d209e2298838cd5a348cf9f5be4dc907642a5ed5067afb58daa->enter($__internal_eead08f2024c1d209e2298838cd5a348cf9f5be4dc907642a5ed5067afb58daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0bf6e4ac30572d2d1993e6e6e13f53ee9ae2c71e25a8ae38395b5fc5302fddf9->leave($__internal_0bf6e4ac30572d2d1993e6e6e13f53ee9ae2c71e25a8ae38395b5fc5302fddf9_prof);

        
        $__internal_eead08f2024c1d209e2298838cd5a348cf9f5be4dc907642a5ed5067afb58daa->leave($__internal_eead08f2024c1d209e2298838cd5a348cf9f5be4dc907642a5ed5067afb58daa_prof);

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
", "@Framework/Form/form_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
