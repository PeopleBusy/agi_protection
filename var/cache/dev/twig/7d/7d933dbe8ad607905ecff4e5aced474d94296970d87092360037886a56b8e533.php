<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2841a9545972d57844bf202778529ad23c85d7d5416888efed75b9baab47a3ad extends Twig_Template
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
        $__internal_978a68855569c248720f2dc22e1936069488fdbc0886dbb55a11e54970d3f8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978a68855569c248720f2dc22e1936069488fdbc0886dbb55a11e54970d3f8c0->enter($__internal_978a68855569c248720f2dc22e1936069488fdbc0886dbb55a11e54970d3f8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_669d36067cdacf95add13c49f65aee164c8a5d07849ef9e5717b86ebe7059bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669d36067cdacf95add13c49f65aee164c8a5d07849ef9e5717b86ebe7059bc9->enter($__internal_669d36067cdacf95add13c49f65aee164c8a5d07849ef9e5717b86ebe7059bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_978a68855569c248720f2dc22e1936069488fdbc0886dbb55a11e54970d3f8c0->leave($__internal_978a68855569c248720f2dc22e1936069488fdbc0886dbb55a11e54970d3f8c0_prof);

        
        $__internal_669d36067cdacf95add13c49f65aee164c8a5d07849ef9e5717b86ebe7059bc9->leave($__internal_669d36067cdacf95add13c49f65aee164c8a5d07849ef9e5717b86ebe7059bc9_prof);

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
", "@Framework/Form/collection_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
