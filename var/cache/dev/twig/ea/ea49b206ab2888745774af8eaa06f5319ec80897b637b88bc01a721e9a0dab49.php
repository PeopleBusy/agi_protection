<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c803df0c2096583282ac113be53329dac58685973c98284e5eb6e4e80b49d76f extends Twig_Template
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
        $__internal_42c0e42e8d9d8e9ddf127849024b9111197f6a8da7f90410523b50d994537c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c0e42e8d9d8e9ddf127849024b9111197f6a8da7f90410523b50d994537c9a->enter($__internal_42c0e42e8d9d8e9ddf127849024b9111197f6a8da7f90410523b50d994537c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_a352af6153c264f6b329f6eb50fe9b3e25fcde7a39874acc0b846d7abf51319f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a352af6153c264f6b329f6eb50fe9b3e25fcde7a39874acc0b846d7abf51319f->enter($__internal_a352af6153c264f6b329f6eb50fe9b3e25fcde7a39874acc0b846d7abf51319f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_42c0e42e8d9d8e9ddf127849024b9111197f6a8da7f90410523b50d994537c9a->leave($__internal_42c0e42e8d9d8e9ddf127849024b9111197f6a8da7f90410523b50d994537c9a_prof);

        
        $__internal_a352af6153c264f6b329f6eb50fe9b3e25fcde7a39874acc0b846d7abf51319f->leave($__internal_a352af6153c264f6b329f6eb50fe9b3e25fcde7a39874acc0b846d7abf51319f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
