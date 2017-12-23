<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_e62c6595dd1db0e0873e22612dd81cb23b146bdd8019ff13b5c0cb83138041a1 extends Twig_Template
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
        $__internal_4b5bfb849f311de89fc5281332ef18381f6cc457ea09d5ca4f8e6b939e03a5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5bfb849f311de89fc5281332ef18381f6cc457ea09d5ca4f8e6b939e03a5ad->enter($__internal_4b5bfb849f311de89fc5281332ef18381f6cc457ea09d5ca4f8e6b939e03a5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_cb71b57d6cf1d968cdddd1785602a0c2ffd3488b5d8bfde9b494c720976c6f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb71b57d6cf1d968cdddd1785602a0c2ffd3488b5d8bfde9b494c720976c6f95->enter($__internal_cb71b57d6cf1d968cdddd1785602a0c2ffd3488b5d8bfde9b494c720976c6f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_4b5bfb849f311de89fc5281332ef18381f6cc457ea09d5ca4f8e6b939e03a5ad->leave($__internal_4b5bfb849f311de89fc5281332ef18381f6cc457ea09d5ca4f8e6b939e03a5ad_prof);

        
        $__internal_cb71b57d6cf1d968cdddd1785602a0c2ffd3488b5d8bfde9b494c720976c6f95->leave($__internal_cb71b57d6cf1d968cdddd1785602a0c2ffd3488b5d8bfde9b494c720976c6f95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
