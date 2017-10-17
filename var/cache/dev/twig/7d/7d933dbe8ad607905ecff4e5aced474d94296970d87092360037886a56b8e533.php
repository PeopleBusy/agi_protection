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
        $__internal_36ea7ec41db539a633f15f28996effcce800d6d0399f4e57624322f21feb83c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ea7ec41db539a633f15f28996effcce800d6d0399f4e57624322f21feb83c0->enter($__internal_36ea7ec41db539a633f15f28996effcce800d6d0399f4e57624322f21feb83c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a1b4d9e3e75e89fb78ce8c2332599c1cfbfb55dd7894af1144d294520571082d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b4d9e3e75e89fb78ce8c2332599c1cfbfb55dd7894af1144d294520571082d->enter($__internal_a1b4d9e3e75e89fb78ce8c2332599c1cfbfb55dd7894af1144d294520571082d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_36ea7ec41db539a633f15f28996effcce800d6d0399f4e57624322f21feb83c0->leave($__internal_36ea7ec41db539a633f15f28996effcce800d6d0399f4e57624322f21feb83c0_prof);

        
        $__internal_a1b4d9e3e75e89fb78ce8c2332599c1cfbfb55dd7894af1144d294520571082d->leave($__internal_a1b4d9e3e75e89fb78ce8c2332599c1cfbfb55dd7894af1144d294520571082d_prof);

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
