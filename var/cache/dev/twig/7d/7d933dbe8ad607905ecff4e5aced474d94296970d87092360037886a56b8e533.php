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
        $__internal_6d2ea83ec0ee30f728f981d2b67422c7f838cad8d3ee0795371640f7a2b34195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2ea83ec0ee30f728f981d2b67422c7f838cad8d3ee0795371640f7a2b34195->enter($__internal_6d2ea83ec0ee30f728f981d2b67422c7f838cad8d3ee0795371640f7a2b34195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f84507e5d74138412db47111666159687b17b5903e5239195535c9c398e00d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84507e5d74138412db47111666159687b17b5903e5239195535c9c398e00d68->enter($__internal_f84507e5d74138412db47111666159687b17b5903e5239195535c9c398e00d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6d2ea83ec0ee30f728f981d2b67422c7f838cad8d3ee0795371640f7a2b34195->leave($__internal_6d2ea83ec0ee30f728f981d2b67422c7f838cad8d3ee0795371640f7a2b34195_prof);

        
        $__internal_f84507e5d74138412db47111666159687b17b5903e5239195535c9c398e00d68->leave($__internal_f84507e5d74138412db47111666159687b17b5903e5239195535c9c398e00d68_prof);

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
", "@Framework/Form/collection_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
