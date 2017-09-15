<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_34e71cdf51621f4b5c62aa45f6f64972e332b58df314b03de590b6390035d91b extends Twig_Template
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
        $__internal_ee47252ac3b0816a400d82b73453c09e7ceb71d234a0cfd333dd6189958b3922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee47252ac3b0816a400d82b73453c09e7ceb71d234a0cfd333dd6189958b3922->enter($__internal_ee47252ac3b0816a400d82b73453c09e7ceb71d234a0cfd333dd6189958b3922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c21a1d6444fdbbd5e90e8432f0abc00f490959668b24286b658fe94aa5939ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21a1d6444fdbbd5e90e8432f0abc00f490959668b24286b658fe94aa5939ad6->enter($__internal_c21a1d6444fdbbd5e90e8432f0abc00f490959668b24286b658fe94aa5939ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ee47252ac3b0816a400d82b73453c09e7ceb71d234a0cfd333dd6189958b3922->leave($__internal_ee47252ac3b0816a400d82b73453c09e7ceb71d234a0cfd333dd6189958b3922_prof);

        
        $__internal_c21a1d6444fdbbd5e90e8432f0abc00f490959668b24286b658fe94aa5939ad6->leave($__internal_c21a1d6444fdbbd5e90e8432f0abc00f490959668b24286b658fe94aa5939ad6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
