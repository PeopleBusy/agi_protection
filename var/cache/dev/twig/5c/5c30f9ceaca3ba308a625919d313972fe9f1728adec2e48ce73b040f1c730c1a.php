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
        $__internal_bd78fe70a6a4803059fe1d9bac56abe9d8c2f609b61fdb2f4970a05b0bd5f272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd78fe70a6a4803059fe1d9bac56abe9d8c2f609b61fdb2f4970a05b0bd5f272->enter($__internal_bd78fe70a6a4803059fe1d9bac56abe9d8c2f609b61fdb2f4970a05b0bd5f272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_f2dae0912be6c508fe0700754038fb77ddc8915052bb31a9211537cebd2e2f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2dae0912be6c508fe0700754038fb77ddc8915052bb31a9211537cebd2e2f38->enter($__internal_f2dae0912be6c508fe0700754038fb77ddc8915052bb31a9211537cebd2e2f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bd78fe70a6a4803059fe1d9bac56abe9d8c2f609b61fdb2f4970a05b0bd5f272->leave($__internal_bd78fe70a6a4803059fe1d9bac56abe9d8c2f609b61fdb2f4970a05b0bd5f272_prof);

        
        $__internal_f2dae0912be6c508fe0700754038fb77ddc8915052bb31a9211537cebd2e2f38->leave($__internal_f2dae0912be6c508fe0700754038fb77ddc8915052bb31a9211537cebd2e2f38_prof);

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
