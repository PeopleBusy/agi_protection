<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1806dfd84ac942d1ef27c112360b6c9f5652bbf3555daa9fdd5e73e5742576e6 extends Twig_Template
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
        $__internal_ba4481c9de7d590571732bad4e6e5547784ccf7bb9ff4acf5495e4154c0dd132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4481c9de7d590571732bad4e6e5547784ccf7bb9ff4acf5495e4154c0dd132->enter($__internal_ba4481c9de7d590571732bad4e6e5547784ccf7bb9ff4acf5495e4154c0dd132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a1cd209451eaf8bd090a993b8c325b33451c8c67b7d994c8a68b5102e94436b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cd209451eaf8bd090a993b8c325b33451c8c67b7d994c8a68b5102e94436b8->enter($__internal_a1cd209451eaf8bd090a993b8c325b33451c8c67b7d994c8a68b5102e94436b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ba4481c9de7d590571732bad4e6e5547784ccf7bb9ff4acf5495e4154c0dd132->leave($__internal_ba4481c9de7d590571732bad4e6e5547784ccf7bb9ff4acf5495e4154c0dd132_prof);

        
        $__internal_a1cd209451eaf8bd090a993b8c325b33451c8c67b7d994c8a68b5102e94436b8->leave($__internal_a1cd209451eaf8bd090a993b8c325b33451c8c67b7d994c8a68b5102e94436b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
