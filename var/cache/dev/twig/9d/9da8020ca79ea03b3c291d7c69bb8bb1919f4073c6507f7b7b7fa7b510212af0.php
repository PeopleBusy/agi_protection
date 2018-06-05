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
        $__internal_a4963c674121dcdbb6adc718b71f62cc5bde88313c6fc5382c49a68702c2627b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4963c674121dcdbb6adc718b71f62cc5bde88313c6fc5382c49a68702c2627b->enter($__internal_a4963c674121dcdbb6adc718b71f62cc5bde88313c6fc5382c49a68702c2627b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_fb75413c2e9657897c432d32e3911ed86f63ed98d48cf72c47ccb0ba3d0447a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb75413c2e9657897c432d32e3911ed86f63ed98d48cf72c47ccb0ba3d0447a6->enter($__internal_fb75413c2e9657897c432d32e3911ed86f63ed98d48cf72c47ccb0ba3d0447a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a4963c674121dcdbb6adc718b71f62cc5bde88313c6fc5382c49a68702c2627b->leave($__internal_a4963c674121dcdbb6adc718b71f62cc5bde88313c6fc5382c49a68702c2627b_prof);

        
        $__internal_fb75413c2e9657897c432d32e3911ed86f63ed98d48cf72c47ccb0ba3d0447a6->leave($__internal_fb75413c2e9657897c432d32e3911ed86f63ed98d48cf72c47ccb0ba3d0447a6_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
