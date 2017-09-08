<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_a82c4a9942d87633dc786a497e67924557e3fe8f90c313e4ce6709a6a60fe647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82c4a9942d87633dc786a497e67924557e3fe8f90c313e4ce6709a6a60fe647->enter($__internal_a82c4a9942d87633dc786a497e67924557e3fe8f90c313e4ce6709a6a60fe647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7b08ffb19cb3431d5ae512a387b4f000f0aec234743c94af6445025ebc841f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b08ffb19cb3431d5ae512a387b4f000f0aec234743c94af6445025ebc841f65->enter($__internal_7b08ffb19cb3431d5ae512a387b4f000f0aec234743c94af6445025ebc841f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a82c4a9942d87633dc786a497e67924557e3fe8f90c313e4ce6709a6a60fe647->leave($__internal_a82c4a9942d87633dc786a497e67924557e3fe8f90c313e4ce6709a6a60fe647_prof);

        
        $__internal_7b08ffb19cb3431d5ae512a387b4f000f0aec234743c94af6445025ebc841f65->leave($__internal_7b08ffb19cb3431d5ae512a387b4f000f0aec234743c94af6445025ebc841f65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
