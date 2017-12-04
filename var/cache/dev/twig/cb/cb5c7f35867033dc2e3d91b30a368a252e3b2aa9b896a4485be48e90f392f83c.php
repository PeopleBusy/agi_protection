<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_388b271783502254e0c38814af730c1c752f7b97527fa283749e2f09f03ad05f extends Twig_Template
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
        $__internal_09e0e17b0dda85c8e091bd941a02db14fc87612be37d17b2fe5c174b2505fb9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e0e17b0dda85c8e091bd941a02db14fc87612be37d17b2fe5c174b2505fb9a->enter($__internal_09e0e17b0dda85c8e091bd941a02db14fc87612be37d17b2fe5c174b2505fb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_7892b349c7aca6888c6b00d6bb9e03324450e42154938e1c050433d6341e13b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7892b349c7aca6888c6b00d6bb9e03324450e42154938e1c050433d6341e13b8->enter($__internal_7892b349c7aca6888c6b00d6bb9e03324450e42154938e1c050433d6341e13b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_09e0e17b0dda85c8e091bd941a02db14fc87612be37d17b2fe5c174b2505fb9a->leave($__internal_09e0e17b0dda85c8e091bd941a02db14fc87612be37d17b2fe5c174b2505fb9a_prof);

        
        $__internal_7892b349c7aca6888c6b00d6bb9e03324450e42154938e1c050433d6341e13b8->leave($__internal_7892b349c7aca6888c6b00d6bb9e03324450e42154938e1c050433d6341e13b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
