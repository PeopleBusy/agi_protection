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
        $__internal_3084a0f2aa2a4454c0d7591cdd34b3260d9f01dac6290a74db92efa09a4b90d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3084a0f2aa2a4454c0d7591cdd34b3260d9f01dac6290a74db92efa09a4b90d1->enter($__internal_3084a0f2aa2a4454c0d7591cdd34b3260d9f01dac6290a74db92efa09a4b90d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c5a9f4b26952a2db2b35cc5255e2e053efac3dfa87a7473aa12859f5a0ba34d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a9f4b26952a2db2b35cc5255e2e053efac3dfa87a7473aa12859f5a0ba34d4->enter($__internal_c5a9f4b26952a2db2b35cc5255e2e053efac3dfa87a7473aa12859f5a0ba34d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3084a0f2aa2a4454c0d7591cdd34b3260d9f01dac6290a74db92efa09a4b90d1->leave($__internal_3084a0f2aa2a4454c0d7591cdd34b3260d9f01dac6290a74db92efa09a4b90d1_prof);

        
        $__internal_c5a9f4b26952a2db2b35cc5255e2e053efac3dfa87a7473aa12859f5a0ba34d4->leave($__internal_c5a9f4b26952a2db2b35cc5255e2e053efac3dfa87a7473aa12859f5a0ba34d4_prof);

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
