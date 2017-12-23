<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7f3a7e6d5def90a844c0e81a7b916886786f85c0657e9615c9510d79ca81dcd5 extends Twig_Template
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
        $__internal_c9c613c8fe61839c6c22cc69d0334bedc6bf36dcf15865a7ae9a5d4579f655f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c613c8fe61839c6c22cc69d0334bedc6bf36dcf15865a7ae9a5d4579f655f1->enter($__internal_c9c613c8fe61839c6c22cc69d0334bedc6bf36dcf15865a7ae9a5d4579f655f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9694292e863defbf0d867992fc84050348b98bda4a33419adcf9b3293a9db8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9694292e863defbf0d867992fc84050348b98bda4a33419adcf9b3293a9db8ba->enter($__internal_9694292e863defbf0d867992fc84050348b98bda4a33419adcf9b3293a9db8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c9c613c8fe61839c6c22cc69d0334bedc6bf36dcf15865a7ae9a5d4579f655f1->leave($__internal_c9c613c8fe61839c6c22cc69d0334bedc6bf36dcf15865a7ae9a5d4579f655f1_prof);

        
        $__internal_9694292e863defbf0d867992fc84050348b98bda4a33419adcf9b3293a9db8ba->leave($__internal_9694292e863defbf0d867992fc84050348b98bda4a33419adcf9b3293a9db8ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
