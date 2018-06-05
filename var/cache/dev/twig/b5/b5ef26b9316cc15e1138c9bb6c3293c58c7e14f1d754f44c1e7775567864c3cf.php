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
        $__internal_40c0398584d07df8ad737dffdec0b01970e580f97db2d0ecc85729f61359a02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c0398584d07df8ad737dffdec0b01970e580f97db2d0ecc85729f61359a02f->enter($__internal_40c0398584d07df8ad737dffdec0b01970e580f97db2d0ecc85729f61359a02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_c46247822bbf422d8a9270e39a28374ce0cef0df00216bf388ecaf984603f780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46247822bbf422d8a9270e39a28374ce0cef0df00216bf388ecaf984603f780->enter($__internal_c46247822bbf422d8a9270e39a28374ce0cef0df00216bf388ecaf984603f780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_40c0398584d07df8ad737dffdec0b01970e580f97db2d0ecc85729f61359a02f->leave($__internal_40c0398584d07df8ad737dffdec0b01970e580f97db2d0ecc85729f61359a02f_prof);

        
        $__internal_c46247822bbf422d8a9270e39a28374ce0cef0df00216bf388ecaf984603f780->leave($__internal_c46247822bbf422d8a9270e39a28374ce0cef0df00216bf388ecaf984603f780_prof);

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
", "@Framework/Form/button_row.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
