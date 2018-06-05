<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_235a1da8d367eb2343146ee1efe177c589e50ed249bcd9584677b6f5e9a48da9 extends Twig_Template
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
        $__internal_e3cc0e424f3a597e638cc437cc90b718f0ace3f40638e6735bd9989772252f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3cc0e424f3a597e638cc437cc90b718f0ace3f40638e6735bd9989772252f9a->enter($__internal_e3cc0e424f3a597e638cc437cc90b718f0ace3f40638e6735bd9989772252f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b961588f960f4fb02d7b273fce3fe07af0be732194064bf8811f068f1f1e2110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b961588f960f4fb02d7b273fce3fe07af0be732194064bf8811f068f1f1e2110->enter($__internal_b961588f960f4fb02d7b273fce3fe07af0be732194064bf8811f068f1f1e2110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e3cc0e424f3a597e638cc437cc90b718f0ace3f40638e6735bd9989772252f9a->leave($__internal_e3cc0e424f3a597e638cc437cc90b718f0ace3f40638e6735bd9989772252f9a_prof);

        
        $__internal_b961588f960f4fb02d7b273fce3fe07af0be732194064bf8811f068f1f1e2110->leave($__internal_b961588f960f4fb02d7b273fce3fe07af0be732194064bf8811f068f1f1e2110_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
