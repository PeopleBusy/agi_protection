<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4750f6d53c6d6d09bad25e001bcf6d01332c1a96c54d08f7d1a90cdc39964f42 extends Twig_Template
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
        $__internal_090f14dc4635ed508a8171bbbbaaf4f10845ae6cbf8504c3011340321a5983e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090f14dc4635ed508a8171bbbbaaf4f10845ae6cbf8504c3011340321a5983e1->enter($__internal_090f14dc4635ed508a8171bbbbaaf4f10845ae6cbf8504c3011340321a5983e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_01cd497ecfcf9d9dabde54c9d0fc93dfabc10f6ff19fa425e872769d6cdfe44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cd497ecfcf9d9dabde54c9d0fc93dfabc10f6ff19fa425e872769d6cdfe44e->enter($__internal_01cd497ecfcf9d9dabde54c9d0fc93dfabc10f6ff19fa425e872769d6cdfe44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_090f14dc4635ed508a8171bbbbaaf4f10845ae6cbf8504c3011340321a5983e1->leave($__internal_090f14dc4635ed508a8171bbbbaaf4f10845ae6cbf8504c3011340321a5983e1_prof);

        
        $__internal_01cd497ecfcf9d9dabde54c9d0fc93dfabc10f6ff19fa425e872769d6cdfe44e->leave($__internal_01cd497ecfcf9d9dabde54c9d0fc93dfabc10f6ff19fa425e872769d6cdfe44e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
