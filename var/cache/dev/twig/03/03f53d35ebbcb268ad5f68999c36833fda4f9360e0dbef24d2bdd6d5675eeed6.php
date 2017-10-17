<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_274fddf7edde623788af8e77a6e37ed9dfb84b50a8f7ef6c92587327a9c69f7c extends Twig_Template
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
        $__internal_39be6b4a96892d19cbee0b6f1ef04e98f2cc71d8d1612b6d7346b748ba79bdd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39be6b4a96892d19cbee0b6f1ef04e98f2cc71d8d1612b6d7346b748ba79bdd4->enter($__internal_39be6b4a96892d19cbee0b6f1ef04e98f2cc71d8d1612b6d7346b748ba79bdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_433074ef670ee5abcdb1f55968a75ff5f5f953a493f50a48092b94de8527cfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433074ef670ee5abcdb1f55968a75ff5f5f953a493f50a48092b94de8527cfdc->enter($__internal_433074ef670ee5abcdb1f55968a75ff5f5f953a493f50a48092b94de8527cfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_39be6b4a96892d19cbee0b6f1ef04e98f2cc71d8d1612b6d7346b748ba79bdd4->leave($__internal_39be6b4a96892d19cbee0b6f1ef04e98f2cc71d8d1612b6d7346b748ba79bdd4_prof);

        
        $__internal_433074ef670ee5abcdb1f55968a75ff5f5f953a493f50a48092b94de8527cfdc->leave($__internal_433074ef670ee5abcdb1f55968a75ff5f5f953a493f50a48092b94de8527cfdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
