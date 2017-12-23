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
        $__internal_0fb48730f1fcb86d33d0ef9c3e3423ea6dc1f666227553ceb3f1b547fef5accb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb48730f1fcb86d33d0ef9c3e3423ea6dc1f666227553ceb3f1b547fef5accb->enter($__internal_0fb48730f1fcb86d33d0ef9c3e3423ea6dc1f666227553ceb3f1b547fef5accb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_bc384dccd6719c6b8119ba6790b6b9572605ceb2f5ea061921c5fd84c98d5fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc384dccd6719c6b8119ba6790b6b9572605ceb2f5ea061921c5fd84c98d5fa3->enter($__internal_bc384dccd6719c6b8119ba6790b6b9572605ceb2f5ea061921c5fd84c98d5fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0fb48730f1fcb86d33d0ef9c3e3423ea6dc1f666227553ceb3f1b547fef5accb->leave($__internal_0fb48730f1fcb86d33d0ef9c3e3423ea6dc1f666227553ceb3f1b547fef5accb_prof);

        
        $__internal_bc384dccd6719c6b8119ba6790b6b9572605ceb2f5ea061921c5fd84c98d5fa3->leave($__internal_bc384dccd6719c6b8119ba6790b6b9572605ceb2f5ea061921c5fd84c98d5fa3_prof);

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
", "@Framework/Form/reset_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
