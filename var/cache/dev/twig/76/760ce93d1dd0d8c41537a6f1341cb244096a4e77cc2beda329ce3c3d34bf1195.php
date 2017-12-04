<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e62c6595dd1db0e0873e22612dd81cb23b146bdd8019ff13b5c0cb83138041a1 extends Twig_Template
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
        $__internal_eb7cdef968879314e72a449e5a938a2846981f312877030f568053247c24d9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7cdef968879314e72a449e5a938a2846981f312877030f568053247c24d9df->enter($__internal_eb7cdef968879314e72a449e5a938a2846981f312877030f568053247c24d9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6d4586c9f56a5f5592b8ed1ff5ab295502ab61ba7a53915ec47c7575ab406a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4586c9f56a5f5592b8ed1ff5ab295502ab61ba7a53915ec47c7575ab406a75->enter($__internal_6d4586c9f56a5f5592b8ed1ff5ab295502ab61ba7a53915ec47c7575ab406a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_eb7cdef968879314e72a449e5a938a2846981f312877030f568053247c24d9df->leave($__internal_eb7cdef968879314e72a449e5a938a2846981f312877030f568053247c24d9df_prof);

        
        $__internal_6d4586c9f56a5f5592b8ed1ff5ab295502ab61ba7a53915ec47c7575ab406a75->leave($__internal_6d4586c9f56a5f5592b8ed1ff5ab295502ab61ba7a53915ec47c7575ab406a75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
