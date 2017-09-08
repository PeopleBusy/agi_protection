<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_2e33216486aa172adf834f5b154c6183268fcb88f28fcc36e871e8a02de1aa66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e33216486aa172adf834f5b154c6183268fcb88f28fcc36e871e8a02de1aa66->enter($__internal_2e33216486aa172adf834f5b154c6183268fcb88f28fcc36e871e8a02de1aa66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_31584271fb5cd535cd4d950a9b4a12538c3f71cc495d084bf450c434c027442b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31584271fb5cd535cd4d950a9b4a12538c3f71cc495d084bf450c434c027442b->enter($__internal_31584271fb5cd535cd4d950a9b4a12538c3f71cc495d084bf450c434c027442b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2e33216486aa172adf834f5b154c6183268fcb88f28fcc36e871e8a02de1aa66->leave($__internal_2e33216486aa172adf834f5b154c6183268fcb88f28fcc36e871e8a02de1aa66_prof);

        
        $__internal_31584271fb5cd535cd4d950a9b4a12538c3f71cc495d084bf450c434c027442b->leave($__internal_31584271fb5cd535cd4d950a9b4a12538c3f71cc495d084bf450c434c027442b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
