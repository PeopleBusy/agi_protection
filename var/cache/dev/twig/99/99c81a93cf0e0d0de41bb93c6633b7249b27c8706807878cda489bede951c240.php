<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4750f6d53c6d6d09bad25e001bcf6d01332c1a96c54d08f7d1a90cdc39964f42 extends Twig_Template
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
        $__internal_93744e7d65a22997d9b6aca87dd37914bf606256ec34d5d5144e988451bae3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93744e7d65a22997d9b6aca87dd37914bf606256ec34d5d5144e988451bae3c0->enter($__internal_93744e7d65a22997d9b6aca87dd37914bf606256ec34d5d5144e988451bae3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8d15c311a627b5dc20af7b118b395968e918fc7916850cdef2b72becb7e42c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d15c311a627b5dc20af7b118b395968e918fc7916850cdef2b72becb7e42c31->enter($__internal_8d15c311a627b5dc20af7b118b395968e918fc7916850cdef2b72becb7e42c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_93744e7d65a22997d9b6aca87dd37914bf606256ec34d5d5144e988451bae3c0->leave($__internal_93744e7d65a22997d9b6aca87dd37914bf606256ec34d5d5144e988451bae3c0_prof);

        
        $__internal_8d15c311a627b5dc20af7b118b395968e918fc7916850cdef2b72becb7e42c31->leave($__internal_8d15c311a627b5dc20af7b118b395968e918fc7916850cdef2b72becb7e42c31_prof);

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
", "@Framework/Form/url_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
