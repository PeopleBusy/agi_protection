<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ce2bf6b26baacc28cd40a621e4dd1a12ac0306ff9a3c8e253dc379e592380e2b extends Twig_Template
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
        $__internal_8e402fc333975185cf518620cf4ca5c94c9e5da8f15b96485afafd154a3af99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e402fc333975185cf518620cf4ca5c94c9e5da8f15b96485afafd154a3af99f->enter($__internal_8e402fc333975185cf518620cf4ca5c94c9e5da8f15b96485afafd154a3af99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f10272ba5c80be8866bfd44ec0e9b1a50861fae9b617a6416afa68c30542cafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10272ba5c80be8866bfd44ec0e9b1a50861fae9b617a6416afa68c30542cafa->enter($__internal_f10272ba5c80be8866bfd44ec0e9b1a50861fae9b617a6416afa68c30542cafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8e402fc333975185cf518620cf4ca5c94c9e5da8f15b96485afafd154a3af99f->leave($__internal_8e402fc333975185cf518620cf4ca5c94c9e5da8f15b96485afafd154a3af99f_prof);

        
        $__internal_f10272ba5c80be8866bfd44ec0e9b1a50861fae9b617a6416afa68c30542cafa->leave($__internal_f10272ba5c80be8866bfd44ec0e9b1a50861fae9b617a6416afa68c30542cafa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
