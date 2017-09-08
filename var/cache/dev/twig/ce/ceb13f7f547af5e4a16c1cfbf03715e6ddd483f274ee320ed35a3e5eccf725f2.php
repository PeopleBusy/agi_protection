<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_614f37629c995e2546feafefef15a8e42a2fb948936da67c101af4a913c63389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614f37629c995e2546feafefef15a8e42a2fb948936da67c101af4a913c63389->enter($__internal_614f37629c995e2546feafefef15a8e42a2fb948936da67c101af4a913c63389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_07f81f867a4e3b375b9a72e816ab1dcf3bde470b3c6a3588e0e6a6ac95ac55fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f81f867a4e3b375b9a72e816ab1dcf3bde470b3c6a3588e0e6a6ac95ac55fe->enter($__internal_07f81f867a4e3b375b9a72e816ab1dcf3bde470b3c6a3588e0e6a6ac95ac55fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_614f37629c995e2546feafefef15a8e42a2fb948936da67c101af4a913c63389->leave($__internal_614f37629c995e2546feafefef15a8e42a2fb948936da67c101af4a913c63389_prof);

        
        $__internal_07f81f867a4e3b375b9a72e816ab1dcf3bde470b3c6a3588e0e6a6ac95ac55fe->leave($__internal_07f81f867a4e3b375b9a72e816ab1dcf3bde470b3c6a3588e0e6a6ac95ac55fe_prof);

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
