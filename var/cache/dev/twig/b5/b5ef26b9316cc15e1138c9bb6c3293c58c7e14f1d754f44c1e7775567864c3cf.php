<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c230a4dc2e561a5f539ac1b538d80868b21a13844f3a3fcb1c3e9fa752c0b5ea extends Twig_Template
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
        $__internal_88af3df4b3b238a9f1263444c793165441cc40c9431398dee26cd99ff96dde25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88af3df4b3b238a9f1263444c793165441cc40c9431398dee26cd99ff96dde25->enter($__internal_88af3df4b3b238a9f1263444c793165441cc40c9431398dee26cd99ff96dde25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ff37f67d92b642b7a82ab7733138e72380fa097d7c03cd0907b3b784b700896b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff37f67d92b642b7a82ab7733138e72380fa097d7c03cd0907b3b784b700896b->enter($__internal_ff37f67d92b642b7a82ab7733138e72380fa097d7c03cd0907b3b784b700896b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_88af3df4b3b238a9f1263444c793165441cc40c9431398dee26cd99ff96dde25->leave($__internal_88af3df4b3b238a9f1263444c793165441cc40c9431398dee26cd99ff96dde25_prof);

        
        $__internal_ff37f67d92b642b7a82ab7733138e72380fa097d7c03cd0907b3b784b700896b->leave($__internal_ff37f67d92b642b7a82ab7733138e72380fa097d7c03cd0907b3b784b700896b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
