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
        $__internal_c1e1f78a01ff503c1bf05513d870e3750f9082ef6404dd45a7fb750d0bc5130d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e1f78a01ff503c1bf05513d870e3750f9082ef6404dd45a7fb750d0bc5130d->enter($__internal_c1e1f78a01ff503c1bf05513d870e3750f9082ef6404dd45a7fb750d0bc5130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_b9b618b131b7a56e621a323a3d72bba3dd6164f68edf4b7ce804bce8b2585231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b618b131b7a56e621a323a3d72bba3dd6164f68edf4b7ce804bce8b2585231->enter($__internal_b9b618b131b7a56e621a323a3d72bba3dd6164f68edf4b7ce804bce8b2585231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c1e1f78a01ff503c1bf05513d870e3750f9082ef6404dd45a7fb750d0bc5130d->leave($__internal_c1e1f78a01ff503c1bf05513d870e3750f9082ef6404dd45a7fb750d0bc5130d_prof);

        
        $__internal_b9b618b131b7a56e621a323a3d72bba3dd6164f68edf4b7ce804bce8b2585231->leave($__internal_b9b618b131b7a56e621a323a3d72bba3dd6164f68edf4b7ce804bce8b2585231_prof);

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
", "@Framework/FormTable/form_row.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
