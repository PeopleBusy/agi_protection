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
        $__internal_d20381a62c41c84e31cdd2bfbe6097299741df8a8f069f2470c56585dced127d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20381a62c41c84e31cdd2bfbe6097299741df8a8f069f2470c56585dced127d->enter($__internal_d20381a62c41c84e31cdd2bfbe6097299741df8a8f069f2470c56585dced127d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b83cdeb1e08d97758390b19d48df0c121a11d7f0a9ac1d4db41c23767ae10a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83cdeb1e08d97758390b19d48df0c121a11d7f0a9ac1d4db41c23767ae10a4b->enter($__internal_b83cdeb1e08d97758390b19d48df0c121a11d7f0a9ac1d4db41c23767ae10a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d20381a62c41c84e31cdd2bfbe6097299741df8a8f069f2470c56585dced127d->leave($__internal_d20381a62c41c84e31cdd2bfbe6097299741df8a8f069f2470c56585dced127d_prof);

        
        $__internal_b83cdeb1e08d97758390b19d48df0c121a11d7f0a9ac1d4db41c23767ae10a4b->leave($__internal_b83cdeb1e08d97758390b19d48df0c121a11d7f0a9ac1d4db41c23767ae10a4b_prof);

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
