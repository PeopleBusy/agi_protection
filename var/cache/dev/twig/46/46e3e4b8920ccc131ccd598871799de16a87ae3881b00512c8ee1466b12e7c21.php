<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_15ae758182a2ce503e295613aab4677bb85fed7dabdff6220be2ceaab2afd357 extends Twig_Template
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
        $__internal_31ad4f45d129bcaae2cd66dfc16eed2dc3531af5b3484d05c56c42f9480d751a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ad4f45d129bcaae2cd66dfc16eed2dc3531af5b3484d05c56c42f9480d751a->enter($__internal_31ad4f45d129bcaae2cd66dfc16eed2dc3531af5b3484d05c56c42f9480d751a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_87088cc8bfe68e9a8b95ce15be4da769cc71f752ac7e8a42db17398ac08f3634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87088cc8bfe68e9a8b95ce15be4da769cc71f752ac7e8a42db17398ac08f3634->enter($__internal_87088cc8bfe68e9a8b95ce15be4da769cc71f752ac7e8a42db17398ac08f3634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_31ad4f45d129bcaae2cd66dfc16eed2dc3531af5b3484d05c56c42f9480d751a->leave($__internal_31ad4f45d129bcaae2cd66dfc16eed2dc3531af5b3484d05c56c42f9480d751a_prof);

        
        $__internal_87088cc8bfe68e9a8b95ce15be4da769cc71f752ac7e8a42db17398ac08f3634->leave($__internal_87088cc8bfe68e9a8b95ce15be4da769cc71f752ac7e8a42db17398ac08f3634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
