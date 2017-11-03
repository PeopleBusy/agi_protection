<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3b56e6709e96a9f701054ac7df3259ffd7aca4d92264f95ea060512c724c1ecc extends Twig_Template
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
        $__internal_6517288f1e2c0a365bd1210f8b8a22bdb022f5bb6058fba073ed9645cb4cd4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6517288f1e2c0a365bd1210f8b8a22bdb022f5bb6058fba073ed9645cb4cd4f2->enter($__internal_6517288f1e2c0a365bd1210f8b8a22bdb022f5bb6058fba073ed9645cb4cd4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6bda4e9fb14a17d9bc948067fa65fc8aa97122e000697ff5340337a3c6f3acfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bda4e9fb14a17d9bc948067fa65fc8aa97122e000697ff5340337a3c6f3acfa->enter($__internal_6bda4e9fb14a17d9bc948067fa65fc8aa97122e000697ff5340337a3c6f3acfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6517288f1e2c0a365bd1210f8b8a22bdb022f5bb6058fba073ed9645cb4cd4f2->leave($__internal_6517288f1e2c0a365bd1210f8b8a22bdb022f5bb6058fba073ed9645cb4cd4f2_prof);

        
        $__internal_6bda4e9fb14a17d9bc948067fa65fc8aa97122e000697ff5340337a3c6f3acfa->leave($__internal_6bda4e9fb14a17d9bc948067fa65fc8aa97122e000697ff5340337a3c6f3acfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
