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
        $__internal_67d4889ac3b64b97397b9ab6cf4e8d96e6d0dd5772488e7ef1f13ecb4245bfea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d4889ac3b64b97397b9ab6cf4e8d96e6d0dd5772488e7ef1f13ecb4245bfea->enter($__internal_67d4889ac3b64b97397b9ab6cf4e8d96e6d0dd5772488e7ef1f13ecb4245bfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_af7f72d01b1b6f600f7979f4ea90a85ea97680f651152c997d9912ae37a1cc2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7f72d01b1b6f600f7979f4ea90a85ea97680f651152c997d9912ae37a1cc2a->enter($__internal_af7f72d01b1b6f600f7979f4ea90a85ea97680f651152c997d9912ae37a1cc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_67d4889ac3b64b97397b9ab6cf4e8d96e6d0dd5772488e7ef1f13ecb4245bfea->leave($__internal_67d4889ac3b64b97397b9ab6cf4e8d96e6d0dd5772488e7ef1f13ecb4245bfea_prof);

        
        $__internal_af7f72d01b1b6f600f7979f4ea90a85ea97680f651152c997d9912ae37a1cc2a->leave($__internal_af7f72d01b1b6f600f7979f4ea90a85ea97680f651152c997d9912ae37a1cc2a_prof);

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
