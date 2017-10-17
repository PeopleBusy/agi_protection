<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8501f740bf0dae934537e6dfe8affa2ff31d3e8d158d85d6d6155977da976c97 extends Twig_Template
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
        $__internal_800545f3002365039f1c22a11a64780fcf587b47bfbe3c6d31456894e6e0892f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800545f3002365039f1c22a11a64780fcf587b47bfbe3c6d31456894e6e0892f->enter($__internal_800545f3002365039f1c22a11a64780fcf587b47bfbe3c6d31456894e6e0892f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_8ad7ceff433a965e4b41dfb2f3f35660395003a7e54b02458bb3fb0c6c78cf53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad7ceff433a965e4b41dfb2f3f35660395003a7e54b02458bb3fb0c6c78cf53->enter($__internal_8ad7ceff433a965e4b41dfb2f3f35660395003a7e54b02458bb3fb0c6c78cf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_800545f3002365039f1c22a11a64780fcf587b47bfbe3c6d31456894e6e0892f->leave($__internal_800545f3002365039f1c22a11a64780fcf587b47bfbe3c6d31456894e6e0892f_prof);

        
        $__internal_8ad7ceff433a965e4b41dfb2f3f35660395003a7e54b02458bb3fb0c6c78cf53->leave($__internal_8ad7ceff433a965e4b41dfb2f3f35660395003a7e54b02458bb3fb0c6c78cf53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
