<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9bf17283dcc975e50a0ca0d294580320f9c84d57645504741a97333e4b91f77a extends Twig_Template
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
        $__internal_6bc9527bc1ba502be19aef0d3b7e90b92e945cb46d07536870d82bd1f167643c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc9527bc1ba502be19aef0d3b7e90b92e945cb46d07536870d82bd1f167643c->enter($__internal_6bc9527bc1ba502be19aef0d3b7e90b92e945cb46d07536870d82bd1f167643c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_cfbbb34a817e6d10a6cc1606e6340f3ef7fd1a37af410d008383a7100117c23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbbb34a817e6d10a6cc1606e6340f3ef7fd1a37af410d008383a7100117c23b->enter($__internal_cfbbb34a817e6d10a6cc1606e6340f3ef7fd1a37af410d008383a7100117c23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6bc9527bc1ba502be19aef0d3b7e90b92e945cb46d07536870d82bd1f167643c->leave($__internal_6bc9527bc1ba502be19aef0d3b7e90b92e945cb46d07536870d82bd1f167643c_prof);

        
        $__internal_cfbbb34a817e6d10a6cc1606e6340f3ef7fd1a37af410d008383a7100117c23b->leave($__internal_cfbbb34a817e6d10a6cc1606e6340f3ef7fd1a37af410d008383a7100117c23b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
