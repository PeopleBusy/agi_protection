<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_f4ed159fd3d91ee8af4a0a8d15804ee5f00f8f542f8b845a6a7b842e3dfcbac6 extends Twig_Template
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
        $__internal_3b92ebc497037c19bd1048bb41dbf48307b33eda8f7766f38de92f95a8dafb48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b92ebc497037c19bd1048bb41dbf48307b33eda8f7766f38de92f95a8dafb48->enter($__internal_3b92ebc497037c19bd1048bb41dbf48307b33eda8f7766f38de92f95a8dafb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_96a512d5b2527d29f942a363ab269682ac09e23bfab1ae6cc470118b853ec8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a512d5b2527d29f942a363ab269682ac09e23bfab1ae6cc470118b853ec8a7->enter($__internal_96a512d5b2527d29f942a363ab269682ac09e23bfab1ae6cc470118b853ec8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3b92ebc497037c19bd1048bb41dbf48307b33eda8f7766f38de92f95a8dafb48->leave($__internal_3b92ebc497037c19bd1048bb41dbf48307b33eda8f7766f38de92f95a8dafb48_prof);

        
        $__internal_96a512d5b2527d29f942a363ab269682ac09e23bfab1ae6cc470118b853ec8a7->leave($__internal_96a512d5b2527d29f942a363ab269682ac09e23bfab1ae6cc470118b853ec8a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
