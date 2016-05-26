<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_df79adb0514be24a84fc137bc0ea6d9666689019605fe4cc62e33cfcadd1608e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3edafdcdbb62260b2406ee65a163c8f4884d4d2bc2eb3e48f1730a8aaeb52d7e = $this->env->getExtension("native_profiler");
        $__internal_3edafdcdbb62260b2406ee65a163c8f4884d4d2bc2eb3e48f1730a8aaeb52d7e->enter($__internal_3edafdcdbb62260b2406ee65a163c8f4884d4d2bc2eb3e48f1730a8aaeb52d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3edafdcdbb62260b2406ee65a163c8f4884d4d2bc2eb3e48f1730a8aaeb52d7e->leave($__internal_3edafdcdbb62260b2406ee65a163c8f4884d4d2bc2eb3e48f1730a8aaeb52d7e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e01984543096ec5399736ec2642ccd6209c04d20aa3bc90df6749b26588c12d = $this->env->getExtension("native_profiler");
        $__internal_0e01984543096ec5399736ec2642ccd6209c04d20aa3bc90df6749b26588c12d->enter($__internal_0e01984543096ec5399736ec2642ccd6209c04d20aa3bc90df6749b26588c12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div>
            ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 13
        echo "        </div>

        ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        <div>
            ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "        </div>
    ";
        
        $__internal_0e01984543096ec5399736ec2642ccd6209c04d20aa3bc90df6749b26588c12d->leave($__internal_0e01984543096ec5399736ec2642ccd6209c04d20aa3bc90df6749b26588c12d_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0de99327d831e7d05aa037c08d081f5439145a50ab10429fdddf30484c944770 = $this->env->getExtension("native_profiler");
        $__internal_0de99327d831e7d05aa037c08d081f5439145a50ab10429fdddf30484c944770->enter($__internal_0de99327d831e7d05aa037c08d081f5439145a50ab10429fdddf30484c944770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_0de99327d831e7d05aa037c08d081f5439145a50ab10429fdddf30484c944770->leave($__internal_0de99327d831e7d05aa037c08d081f5439145a50ab10429fdddf30484c944770_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 27,  122 => 26,  114 => 28,  112 => 26,  108 => 24,  105 => 23,  99 => 22,  90 => 19,  85 => 18,  80 => 17,  75 => 16,  73 => 15,  69 => 13,  61 => 11,  55 => 8,  51 => 7,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::/base.html.twig" %}*/
/* */
/*     {% block body %}*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     {% endblock body %}*/
/* */
