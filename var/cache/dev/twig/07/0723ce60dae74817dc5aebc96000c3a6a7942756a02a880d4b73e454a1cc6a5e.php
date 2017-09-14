<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ba759b987afc69c54aef26fed1433839db41d2b4fe3eeaca31d4305854f868e1 extends Twig_Template
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
        $__internal_b46f8bc2f44b09ac047fddd810d0df2dcb172a2fc18f227c99e86712d6566b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46f8bc2f44b09ac047fddd810d0df2dcb172a2fc18f227c99e86712d6566b8c->enter($__internal_b46f8bc2f44b09ac047fddd810d0df2dcb172a2fc18f227c99e86712d6566b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_eb3cea2f0eda8caa6ca7040ed37275934a97fb5d77eb59b216bc1179a04d0ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3cea2f0eda8caa6ca7040ed37275934a97fb5d77eb59b216bc1179a04d0ae7->enter($__internal_eb3cea2f0eda8caa6ca7040ed37275934a97fb5d77eb59b216bc1179a04d0ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b46f8bc2f44b09ac047fddd810d0df2dcb172a2fc18f227c99e86712d6566b8c->leave($__internal_b46f8bc2f44b09ac047fddd810d0df2dcb172a2fc18f227c99e86712d6566b8c_prof);

        
        $__internal_eb3cea2f0eda8caa6ca7040ed37275934a97fb5d77eb59b216bc1179a04d0ae7->leave($__internal_eb3cea2f0eda8caa6ca7040ed37275934a97fb5d77eb59b216bc1179a04d0ae7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
