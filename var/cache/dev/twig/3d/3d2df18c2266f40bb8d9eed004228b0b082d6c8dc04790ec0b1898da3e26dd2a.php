<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5afa3a868db4ef890fbb493aedecb8fb26651b49b857693f931ef61d4ef5fb3e extends Twig_Template
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
        $__internal_4d543720afdd36b59345b42f825ddde3ef2a5f88646f8cab872d1a5c6bc33709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d543720afdd36b59345b42f825ddde3ef2a5f88646f8cab872d1a5c6bc33709->enter($__internal_4d543720afdd36b59345b42f825ddde3ef2a5f88646f8cab872d1a5c6bc33709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9df8ad92baaf6dc721472901cdb275365c3409b59e694a111ed80dc1eae83345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df8ad92baaf6dc721472901cdb275365c3409b59e694a111ed80dc1eae83345->enter($__internal_9df8ad92baaf6dc721472901cdb275365c3409b59e694a111ed80dc1eae83345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4d543720afdd36b59345b42f825ddde3ef2a5f88646f8cab872d1a5c6bc33709->leave($__internal_4d543720afdd36b59345b42f825ddde3ef2a5f88646f8cab872d1a5c6bc33709_prof);

        
        $__internal_9df8ad92baaf6dc721472901cdb275365c3409b59e694a111ed80dc1eae83345->leave($__internal_9df8ad92baaf6dc721472901cdb275365c3409b59e694a111ed80dc1eae83345_prof);

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
