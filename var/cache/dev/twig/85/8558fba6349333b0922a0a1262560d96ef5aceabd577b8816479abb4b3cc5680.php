<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c90c8dd3700f5987348fad4c2c33b105435871ed68f1f64e799a6f3d779bb8eb extends Twig_Template
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
        $__internal_2ba3c1bd0e37c5ee59eabd048dd9ee5e53dd5549c345f3bc067c53a08ef38349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba3c1bd0e37c5ee59eabd048dd9ee5e53dd5549c345f3bc067c53a08ef38349->enter($__internal_2ba3c1bd0e37c5ee59eabd048dd9ee5e53dd5549c345f3bc067c53a08ef38349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b15f8a1accf02f907c66f6ec419a8641f8b9e402515368c97ae42faa4963a49b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15f8a1accf02f907c66f6ec419a8641f8b9e402515368c97ae42faa4963a49b->enter($__internal_b15f8a1accf02f907c66f6ec419a8641f8b9e402515368c97ae42faa4963a49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2ba3c1bd0e37c5ee59eabd048dd9ee5e53dd5549c345f3bc067c53a08ef38349->leave($__internal_2ba3c1bd0e37c5ee59eabd048dd9ee5e53dd5549c345f3bc067c53a08ef38349_prof);

        
        $__internal_b15f8a1accf02f907c66f6ec419a8641f8b9e402515368c97ae42faa4963a49b->leave($__internal_b15f8a1accf02f907c66f6ec419a8641f8b9e402515368c97ae42faa4963a49b_prof);

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
", "@Framework/Form/email_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
