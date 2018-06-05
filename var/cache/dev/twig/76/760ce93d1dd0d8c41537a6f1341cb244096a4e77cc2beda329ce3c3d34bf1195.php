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
        $__internal_2086a0c4cb5c5e5e65b9de68068052440773f1efd5b5658ee3bbcbaa049b18eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2086a0c4cb5c5e5e65b9de68068052440773f1efd5b5658ee3bbcbaa049b18eb->enter($__internal_2086a0c4cb5c5e5e65b9de68068052440773f1efd5b5658ee3bbcbaa049b18eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_87848f25bf6958be5aa29e20e57d091343c6585bb59b5541b42a9335504b0c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87848f25bf6958be5aa29e20e57d091343c6585bb59b5541b42a9335504b0c15->enter($__internal_87848f25bf6958be5aa29e20e57d091343c6585bb59b5541b42a9335504b0c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2086a0c4cb5c5e5e65b9de68068052440773f1efd5b5658ee3bbcbaa049b18eb->leave($__internal_2086a0c4cb5c5e5e65b9de68068052440773f1efd5b5658ee3bbcbaa049b18eb_prof);

        
        $__internal_87848f25bf6958be5aa29e20e57d091343c6585bb59b5541b42a9335504b0c15->leave($__internal_87848f25bf6958be5aa29e20e57d091343c6585bb59b5541b42a9335504b0c15_prof);

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
