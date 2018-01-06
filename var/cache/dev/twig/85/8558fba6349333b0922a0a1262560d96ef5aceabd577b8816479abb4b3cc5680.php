<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c90c8dd3700f5987348fad4c2c33b105435871ed68f1f64e799a6f3d779bb8eb extends Twig_Template
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
        $__internal_f75ee098a9235989ba70311e92d995074eaa6b3e383c4d4b94bc0f791b2c25a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75ee098a9235989ba70311e92d995074eaa6b3e383c4d4b94bc0f791b2c25a1->enter($__internal_f75ee098a9235989ba70311e92d995074eaa6b3e383c4d4b94bc0f791b2c25a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2f469e2b68d46e5e52ba4137ec4960ee1fa7aa9af5f300b09c41665bc96157f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f469e2b68d46e5e52ba4137ec4960ee1fa7aa9af5f300b09c41665bc96157f6->enter($__internal_2f469e2b68d46e5e52ba4137ec4960ee1fa7aa9af5f300b09c41665bc96157f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f75ee098a9235989ba70311e92d995074eaa6b3e383c4d4b94bc0f791b2c25a1->leave($__internal_f75ee098a9235989ba70311e92d995074eaa6b3e383c4d4b94bc0f791b2c25a1_prof);

        
        $__internal_2f469e2b68d46e5e52ba4137ec4960ee1fa7aa9af5f300b09c41665bc96157f6->leave($__internal_2f469e2b68d46e5e52ba4137ec4960ee1fa7aa9af5f300b09c41665bc96157f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
