<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e62c6595dd1db0e0873e22612dd81cb23b146bdd8019ff13b5c0cb83138041a1 extends Twig_Template
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
        $__internal_a89d501d79de431ef1967819826d952b1c7cbd1ade2e5660ed9a9d1aebd880d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89d501d79de431ef1967819826d952b1c7cbd1ade2e5660ed9a9d1aebd880d9->enter($__internal_a89d501d79de431ef1967819826d952b1c7cbd1ade2e5660ed9a9d1aebd880d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b9bb13d54904670888eff77713b1cded82a9385d18c0e23283f9f66f796eb4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bb13d54904670888eff77713b1cded82a9385d18c0e23283f9f66f796eb4dd->enter($__internal_b9bb13d54904670888eff77713b1cded82a9385d18c0e23283f9f66f796eb4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a89d501d79de431ef1967819826d952b1c7cbd1ade2e5660ed9a9d1aebd880d9->leave($__internal_a89d501d79de431ef1967819826d952b1c7cbd1ade2e5660ed9a9d1aebd880d9_prof);

        
        $__internal_b9bb13d54904670888eff77713b1cded82a9385d18c0e23283f9f66f796eb4dd->leave($__internal_b9bb13d54904670888eff77713b1cded82a9385d18c0e23283f9f66f796eb4dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
