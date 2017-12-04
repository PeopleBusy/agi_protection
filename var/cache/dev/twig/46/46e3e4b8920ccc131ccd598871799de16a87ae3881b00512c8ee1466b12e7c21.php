<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_15ae758182a2ce503e295613aab4677bb85fed7dabdff6220be2ceaab2afd357 extends Twig_Template
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
        $__internal_f72ee4e265e347796a22aa79a314ebfc7e4fe7834090eb7f80ff502f349b319c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72ee4e265e347796a22aa79a314ebfc7e4fe7834090eb7f80ff502f349b319c->enter($__internal_f72ee4e265e347796a22aa79a314ebfc7e4fe7834090eb7f80ff502f349b319c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_cf41771abf1e2b08cdb1b7e898d66a8489c9592c15b99c77ec08389c71dfdbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf41771abf1e2b08cdb1b7e898d66a8489c9592c15b99c77ec08389c71dfdbc0->enter($__internal_cf41771abf1e2b08cdb1b7e898d66a8489c9592c15b99c77ec08389c71dfdbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f72ee4e265e347796a22aa79a314ebfc7e4fe7834090eb7f80ff502f349b319c->leave($__internal_f72ee4e265e347796a22aa79a314ebfc7e4fe7834090eb7f80ff502f349b319c_prof);

        
        $__internal_cf41771abf1e2b08cdb1b7e898d66a8489c9592c15b99c77ec08389c71dfdbc0->leave($__internal_cf41771abf1e2b08cdb1b7e898d66a8489c9592c15b99c77ec08389c71dfdbc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
