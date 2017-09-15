<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_54d2ac16dadacbe2a1af9958d418f12c5e7e91db968979c25e507fe4612f7666 extends Twig_Template
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
        $__internal_7ba5fc345e86f368652f8c982564da937e1ebc823b2b251e659208db88ba110d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba5fc345e86f368652f8c982564da937e1ebc823b2b251e659208db88ba110d->enter($__internal_7ba5fc345e86f368652f8c982564da937e1ebc823b2b251e659208db88ba110d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a291ce59fa9e4f643ed11e7131d9faff3c1071349db8ec15783004812e939599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a291ce59fa9e4f643ed11e7131d9faff3c1071349db8ec15783004812e939599->enter($__internal_a291ce59fa9e4f643ed11e7131d9faff3c1071349db8ec15783004812e939599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7ba5fc345e86f368652f8c982564da937e1ebc823b2b251e659208db88ba110d->leave($__internal_7ba5fc345e86f368652f8c982564da937e1ebc823b2b251e659208db88ba110d_prof);

        
        $__internal_a291ce59fa9e4f643ed11e7131d9faff3c1071349db8ec15783004812e939599->leave($__internal_a291ce59fa9e4f643ed11e7131d9faff3c1071349db8ec15783004812e939599_prof);

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
", "@Framework/Form/reset_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
