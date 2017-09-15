<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c34abccc6d04ae904545293664f04a0b5e26d672a56caf0982e6a683ec5ab81d extends Twig_Template
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
        $__internal_150bb4258ad11a0beb62c1b04c32e33f1a663c08f6a5b11d5335bd0f64604693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150bb4258ad11a0beb62c1b04c32e33f1a663c08f6a5b11d5335bd0f64604693->enter($__internal_150bb4258ad11a0beb62c1b04c32e33f1a663c08f6a5b11d5335bd0f64604693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a0e381d852773ddf559f53dc7635e1deb15e410a10b34f058adac3494d07356b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e381d852773ddf559f53dc7635e1deb15e410a10b34f058adac3494d07356b->enter($__internal_a0e381d852773ddf559f53dc7635e1deb15e410a10b34f058adac3494d07356b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_150bb4258ad11a0beb62c1b04c32e33f1a663c08f6a5b11d5335bd0f64604693->leave($__internal_150bb4258ad11a0beb62c1b04c32e33f1a663c08f6a5b11d5335bd0f64604693_prof);

        
        $__internal_a0e381d852773ddf559f53dc7635e1deb15e410a10b34f058adac3494d07356b->leave($__internal_a0e381d852773ddf559f53dc7635e1deb15e410a10b34f058adac3494d07356b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
