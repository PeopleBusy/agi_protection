<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_6125ecc29a8a326891dc88df30116e76c9ab152383f5cd8e1a8ef046f8a27773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6125ecc29a8a326891dc88df30116e76c9ab152383f5cd8e1a8ef046f8a27773->enter($__internal_6125ecc29a8a326891dc88df30116e76c9ab152383f5cd8e1a8ef046f8a27773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_91c75b94064a929e52e2f8fe8ac5886ff67a8b273006068cfe5095b2800e028d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c75b94064a929e52e2f8fe8ac5886ff67a8b273006068cfe5095b2800e028d->enter($__internal_91c75b94064a929e52e2f8fe8ac5886ff67a8b273006068cfe5095b2800e028d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6125ecc29a8a326891dc88df30116e76c9ab152383f5cd8e1a8ef046f8a27773->leave($__internal_6125ecc29a8a326891dc88df30116e76c9ab152383f5cd8e1a8ef046f8a27773_prof);

        
        $__internal_91c75b94064a929e52e2f8fe8ac5886ff67a8b273006068cfe5095b2800e028d->leave($__internal_91c75b94064a929e52e2f8fe8ac5886ff67a8b273006068cfe5095b2800e028d_prof);

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
