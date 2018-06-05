<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_461fed3294067ab5e7373a8b92cedc12b6e83b899d945e51b07a6e0df96844d6 extends Twig_Template
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
        $__internal_562bd1b47d92d87a570e4a6c6b24676a5d676e43e658f1ca59a24e984c7ca595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562bd1b47d92d87a570e4a6c6b24676a5d676e43e658f1ca59a24e984c7ca595->enter($__internal_562bd1b47d92d87a570e4a6c6b24676a5d676e43e658f1ca59a24e984c7ca595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c0601e54935d6f48771beba41f05e1aa087caf69b0fc320dd4a72d08d6959b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0601e54935d6f48771beba41f05e1aa087caf69b0fc320dd4a72d08d6959b78->enter($__internal_c0601e54935d6f48771beba41f05e1aa087caf69b0fc320dd4a72d08d6959b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_562bd1b47d92d87a570e4a6c6b24676a5d676e43e658f1ca59a24e984c7ca595->leave($__internal_562bd1b47d92d87a570e4a6c6b24676a5d676e43e658f1ca59a24e984c7ca595_prof);

        
        $__internal_c0601e54935d6f48771beba41f05e1aa087caf69b0fc320dd4a72d08d6959b78->leave($__internal_c0601e54935d6f48771beba41f05e1aa087caf69b0fc320dd4a72d08d6959b78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
