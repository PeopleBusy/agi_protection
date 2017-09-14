<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ca4df8018aacf37a7e183d5067a5899409b2e6f656590736d58af809b2b17b4a extends Twig_Template
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
        $__internal_085e1b341e66d291312c9b9d11535885654e773124d607884d1502c9dd290ca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085e1b341e66d291312c9b9d11535885654e773124d607884d1502c9dd290ca1->enter($__internal_085e1b341e66d291312c9b9d11535885654e773124d607884d1502c9dd290ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5046276256b43e8a8ac34cf56e5e41dbd498e590e7def271cc8b958661078139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5046276256b43e8a8ac34cf56e5e41dbd498e590e7def271cc8b958661078139->enter($__internal_5046276256b43e8a8ac34cf56e5e41dbd498e590e7def271cc8b958661078139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_085e1b341e66d291312c9b9d11535885654e773124d607884d1502c9dd290ca1->leave($__internal_085e1b341e66d291312c9b9d11535885654e773124d607884d1502c9dd290ca1_prof);

        
        $__internal_5046276256b43e8a8ac34cf56e5e41dbd498e590e7def271cc8b958661078139->leave($__internal_5046276256b43e8a8ac34cf56e5e41dbd498e590e7def271cc8b958661078139_prof);

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
", "@Framework/FormTable/form_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
