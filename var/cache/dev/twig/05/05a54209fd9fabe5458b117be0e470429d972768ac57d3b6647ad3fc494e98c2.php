<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2775229b586ebda0839bec66efc4dd58d7d7e558e29ff336b14f42c60439ea56 extends Twig_Template
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
        $__internal_309b0580d7630a4570fcd2cbcfe99ced9b8e97acbb96d0245766a66a8f866175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309b0580d7630a4570fcd2cbcfe99ced9b8e97acbb96d0245766a66a8f866175->enter($__internal_309b0580d7630a4570fcd2cbcfe99ced9b8e97acbb96d0245766a66a8f866175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_7e7ba42f3d56fc63e8e950828fe548b47249d10493d7386df782e24dd88e9611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7ba42f3d56fc63e8e950828fe548b47249d10493d7386df782e24dd88e9611->enter($__internal_7e7ba42f3d56fc63e8e950828fe548b47249d10493d7386df782e24dd88e9611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_309b0580d7630a4570fcd2cbcfe99ced9b8e97acbb96d0245766a66a8f866175->leave($__internal_309b0580d7630a4570fcd2cbcfe99ced9b8e97acbb96d0245766a66a8f866175_prof);

        
        $__internal_7e7ba42f3d56fc63e8e950828fe548b47249d10493d7386df782e24dd88e9611->leave($__internal_7e7ba42f3d56fc63e8e950828fe548b47249d10493d7386df782e24dd88e9611_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
