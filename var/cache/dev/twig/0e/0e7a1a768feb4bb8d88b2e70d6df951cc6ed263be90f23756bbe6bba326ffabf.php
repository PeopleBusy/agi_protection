<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_23ae5c849f585028ba75f533fda51ff3136dcbb1917ccedc6eb29b67892d64ba extends Twig_Template
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
        $__internal_61a046819ee70311889c199c2df14e9c2ee420a321827c5bd8d6645e38f048a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a046819ee70311889c199c2df14e9c2ee420a321827c5bd8d6645e38f048a0->enter($__internal_61a046819ee70311889c199c2df14e9c2ee420a321827c5bd8d6645e38f048a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_0f943b4c7da4f1bd0742da6a0b2641f0d042dc2d36bfdbc8b8bae009e400ffb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f943b4c7da4f1bd0742da6a0b2641f0d042dc2d36bfdbc8b8bae009e400ffb9->enter($__internal_0f943b4c7da4f1bd0742da6a0b2641f0d042dc2d36bfdbc8b8bae009e400ffb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_61a046819ee70311889c199c2df14e9c2ee420a321827c5bd8d6645e38f048a0->leave($__internal_61a046819ee70311889c199c2df14e9c2ee420a321827c5bd8d6645e38f048a0_prof);

        
        $__internal_0f943b4c7da4f1bd0742da6a0b2641f0d042dc2d36bfdbc8b8bae009e400ffb9->leave($__internal_0f943b4c7da4f1bd0742da6a0b2641f0d042dc2d36bfdbc8b8bae009e400ffb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
