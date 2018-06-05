<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_02b2a7a5ebe223aab47c6cc59124a29554db8ff828b862d31e763ef5c9e45f61 extends Twig_Template
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
        $__internal_7438b533af39d95515217639aaf79b264a06d186ce3f115cafb28b1e0ef3a40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7438b533af39d95515217639aaf79b264a06d186ce3f115cafb28b1e0ef3a40e->enter($__internal_7438b533af39d95515217639aaf79b264a06d186ce3f115cafb28b1e0ef3a40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_4a07d7bdd3c5cd53d56fbfeeecb8f3b9aedb385698a8528bac341eaea5071931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a07d7bdd3c5cd53d56fbfeeecb8f3b9aedb385698a8528bac341eaea5071931->enter($__internal_4a07d7bdd3c5cd53d56fbfeeecb8f3b9aedb385698a8528bac341eaea5071931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7438b533af39d95515217639aaf79b264a06d186ce3f115cafb28b1e0ef3a40e->leave($__internal_7438b533af39d95515217639aaf79b264a06d186ce3f115cafb28b1e0ef3a40e_prof);

        
        $__internal_4a07d7bdd3c5cd53d56fbfeeecb8f3b9aedb385698a8528bac341eaea5071931->leave($__internal_4a07d7bdd3c5cd53d56fbfeeecb8f3b9aedb385698a8528bac341eaea5071931_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
