<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3b56e6709e96a9f701054ac7df3259ffd7aca4d92264f95ea060512c724c1ecc extends Twig_Template
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
        $__internal_c24d3b3b945259f2b1fa4c78104ecefa5d6f5b5a86e908ed34e682b18f1163fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24d3b3b945259f2b1fa4c78104ecefa5d6f5b5a86e908ed34e682b18f1163fd->enter($__internal_c24d3b3b945259f2b1fa4c78104ecefa5d6f5b5a86e908ed34e682b18f1163fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5a5d49bcf93d8201bb9755d4b36de0ed0f8051237d916b8ee23d76d6f2ba83ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5d49bcf93d8201bb9755d4b36de0ed0f8051237d916b8ee23d76d6f2ba83ee->enter($__internal_5a5d49bcf93d8201bb9755d4b36de0ed0f8051237d916b8ee23d76d6f2ba83ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c24d3b3b945259f2b1fa4c78104ecefa5d6f5b5a86e908ed34e682b18f1163fd->leave($__internal_c24d3b3b945259f2b1fa4c78104ecefa5d6f5b5a86e908ed34e682b18f1163fd_prof);

        
        $__internal_5a5d49bcf93d8201bb9755d4b36de0ed0f8051237d916b8ee23d76d6f2ba83ee->leave($__internal_5a5d49bcf93d8201bb9755d4b36de0ed0f8051237d916b8ee23d76d6f2ba83ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
