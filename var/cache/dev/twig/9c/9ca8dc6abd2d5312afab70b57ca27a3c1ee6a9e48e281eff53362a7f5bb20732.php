<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5b25290039b3ade322bf7b1b44a2aafd174a2e96bb7280a5d32b630f587ff39f extends Twig_Template
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
        $__internal_e988112d635b50fcf425549b5a69246642218587e8258d63a202015e3eef9828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e988112d635b50fcf425549b5a69246642218587e8258d63a202015e3eef9828->enter($__internal_e988112d635b50fcf425549b5a69246642218587e8258d63a202015e3eef9828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_bc35f90eb2fdbab63ea9a261691e9f5d396bb9b21245a362ae60491f5ecba139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc35f90eb2fdbab63ea9a261691e9f5d396bb9b21245a362ae60491f5ecba139->enter($__internal_bc35f90eb2fdbab63ea9a261691e9f5d396bb9b21245a362ae60491f5ecba139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e988112d635b50fcf425549b5a69246642218587e8258d63a202015e3eef9828->leave($__internal_e988112d635b50fcf425549b5a69246642218587e8258d63a202015e3eef9828_prof);

        
        $__internal_bc35f90eb2fdbab63ea9a261691e9f5d396bb9b21245a362ae60491f5ecba139->leave($__internal_bc35f90eb2fdbab63ea9a261691e9f5d396bb9b21245a362ae60491f5ecba139_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
