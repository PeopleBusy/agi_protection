<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b0ad4263d379055fb73f54e032e575e75e67954236cd3422b3514e51cd7388c extends Twig_Template
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
        $__internal_351741061ec6680b79d1d4cf062075e6abb647044f3b9dbd0e8960b62ed31c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351741061ec6680b79d1d4cf062075e6abb647044f3b9dbd0e8960b62ed31c2b->enter($__internal_351741061ec6680b79d1d4cf062075e6abb647044f3b9dbd0e8960b62ed31c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_445aa390d2bb65ee8703a01c79ba043a0d6871129dedcbfdd3c16b7132832255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445aa390d2bb65ee8703a01c79ba043a0d6871129dedcbfdd3c16b7132832255->enter($__internal_445aa390d2bb65ee8703a01c79ba043a0d6871129dedcbfdd3c16b7132832255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_351741061ec6680b79d1d4cf062075e6abb647044f3b9dbd0e8960b62ed31c2b->leave($__internal_351741061ec6680b79d1d4cf062075e6abb647044f3b9dbd0e8960b62ed31c2b_prof);

        
        $__internal_445aa390d2bb65ee8703a01c79ba043a0d6871129dedcbfdd3c16b7132832255->leave($__internal_445aa390d2bb65ee8703a01c79ba043a0d6871129dedcbfdd3c16b7132832255_prof);

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
