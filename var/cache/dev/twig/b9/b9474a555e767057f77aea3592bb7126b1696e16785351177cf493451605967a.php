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
        $__internal_83dd38930db2e05c23a098c30f6439598cd16df16bce37f0f9829d0d73e5fbfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83dd38930db2e05c23a098c30f6439598cd16df16bce37f0f9829d0d73e5fbfc->enter($__internal_83dd38930db2e05c23a098c30f6439598cd16df16bce37f0f9829d0d73e5fbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_641ebc7b7903315b0a14b15a918e1738ee2c85213dc5ed13e7468a0359eb444b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641ebc7b7903315b0a14b15a918e1738ee2c85213dc5ed13e7468a0359eb444b->enter($__internal_641ebc7b7903315b0a14b15a918e1738ee2c85213dc5ed13e7468a0359eb444b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_83dd38930db2e05c23a098c30f6439598cd16df16bce37f0f9829d0d73e5fbfc->leave($__internal_83dd38930db2e05c23a098c30f6439598cd16df16bce37f0f9829d0d73e5fbfc_prof);

        
        $__internal_641ebc7b7903315b0a14b15a918e1738ee2c85213dc5ed13e7468a0359eb444b->leave($__internal_641ebc7b7903315b0a14b15a918e1738ee2c85213dc5ed13e7468a0359eb444b_prof);

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
