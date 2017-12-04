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
        $__internal_7e2a43db99b214b1ed35093622fcb11adf7105736aad4e6640435e2f98b5c367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2a43db99b214b1ed35093622fcb11adf7105736aad4e6640435e2f98b5c367->enter($__internal_7e2a43db99b214b1ed35093622fcb11adf7105736aad4e6640435e2f98b5c367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_76959366a4a4c03571ca06823fda8c0eb3f3194496e9dafc13e43f530cfe9151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76959366a4a4c03571ca06823fda8c0eb3f3194496e9dafc13e43f530cfe9151->enter($__internal_76959366a4a4c03571ca06823fda8c0eb3f3194496e9dafc13e43f530cfe9151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7e2a43db99b214b1ed35093622fcb11adf7105736aad4e6640435e2f98b5c367->leave($__internal_7e2a43db99b214b1ed35093622fcb11adf7105736aad4e6640435e2f98b5c367_prof);

        
        $__internal_76959366a4a4c03571ca06823fda8c0eb3f3194496e9dafc13e43f530cfe9151->leave($__internal_76959366a4a4c03571ca06823fda8c0eb3f3194496e9dafc13e43f530cfe9151_prof);

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
