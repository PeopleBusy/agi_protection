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
        $__internal_88c454f0300b1e95b4bc93a5d601f7741f16d573173016db85ec2fc9babf920e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c454f0300b1e95b4bc93a5d601f7741f16d573173016db85ec2fc9babf920e->enter($__internal_88c454f0300b1e95b4bc93a5d601f7741f16d573173016db85ec2fc9babf920e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_25166ee6a41a69ebd71c7814015d3523dfc2e82786da5a93052c29ae5931960b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25166ee6a41a69ebd71c7814015d3523dfc2e82786da5a93052c29ae5931960b->enter($__internal_25166ee6a41a69ebd71c7814015d3523dfc2e82786da5a93052c29ae5931960b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_88c454f0300b1e95b4bc93a5d601f7741f16d573173016db85ec2fc9babf920e->leave($__internal_88c454f0300b1e95b4bc93a5d601f7741f16d573173016db85ec2fc9babf920e_prof);

        
        $__internal_25166ee6a41a69ebd71c7814015d3523dfc2e82786da5a93052c29ae5931960b->leave($__internal_25166ee6a41a69ebd71c7814015d3523dfc2e82786da5a93052c29ae5931960b_prof);

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
