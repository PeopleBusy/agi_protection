<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8c1b7229f37d58e1983aba035fb09422e2028941705f2b5c0631ef2ce67dc990 extends Twig_Template
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
        $__internal_edde6d8d90eac21917a5d2516bda1c90dfa103bb70e13234215f9d93b927a027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edde6d8d90eac21917a5d2516bda1c90dfa103bb70e13234215f9d93b927a027->enter($__internal_edde6d8d90eac21917a5d2516bda1c90dfa103bb70e13234215f9d93b927a027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_24d05b946a2750da2f8e3b76bc84c7ac1e621910a1b51bdab1e8ce5e2b51a3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d05b946a2750da2f8e3b76bc84c7ac1e621910a1b51bdab1e8ce5e2b51a3db->enter($__internal_24d05b946a2750da2f8e3b76bc84c7ac1e621910a1b51bdab1e8ce5e2b51a3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_edde6d8d90eac21917a5d2516bda1c90dfa103bb70e13234215f9d93b927a027->leave($__internal_edde6d8d90eac21917a5d2516bda1c90dfa103bb70e13234215f9d93b927a027_prof);

        
        $__internal_24d05b946a2750da2f8e3b76bc84c7ac1e621910a1b51bdab1e8ce5e2b51a3db->leave($__internal_24d05b946a2750da2f8e3b76bc84c7ac1e621910a1b51bdab1e8ce5e2b51a3db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
