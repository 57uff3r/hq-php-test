<?php

/* /views/site/index.twig */
class __TwigTemplate_8cae0c4f4bcaab0ca987b33024bf007c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/basic.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/basic.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">

      <div class=\"jumbotron\">
        <form method=\"POST\" action=\"/\">

            <div class=\"form-horizontal\">

                <h3>Order</h3>

                <div class=\"form-group";
        // line 13
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "amount")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Amount</label>
                    <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"amount\" class=\"form-control\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "amount"), "html", null, true);
        echo "\">
                            <div class=\"input-group-addon\">.00</div>
                        </div>

                        ";
        // line 21
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "amount")) {
            // line 22
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "amount"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 23
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 25
            echo "                        ";
        }
        // line 26
        echo "                    </div>
                </div>

                <div class=\"form-group";
        // line 29
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "currency")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Currency</label>
                    <div class=\"col-sm-10\">
                        <select class=\"form-control\" name=\"currency\">
                            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 34
            echo "                                ";
            if (((isset($context["c"]) ? $context["c"] : null) == $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "currency"))) {
                // line 35
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : null), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : null), "html", null, true);
                echo "</option>
                                ";
            } else {
                // line 37
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : null), "html", null, true);
                echo "</option>
                                ";
            }
            // line 39
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "                        </select>

                        ";
        // line 42
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "currency")) {
            // line 43
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "currency"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 44
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 46
            echo "                        ";
        }
        // line 47
        echo "
                    </div>
                </div>


                <div class=\"form-group";
        // line 52
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "customer_name")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Your full name</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"customer_name\" class=\"form-control\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "customer_name"), "html", null, true);
        echo "\">

                        ";
        // line 57
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "customer_name")) {
            // line 58
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "customer_name"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 59
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 61
            echo "                        ";
        }
        // line 62
        echo "                    </div>
                </div>

            </div> <!-- /form-inline -->


            <div class=\"form-horizontal\">
                <h3>Payment</h3>

                <div class=\"form-group";
        // line 71
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "cardholder_name")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Cardholder name</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"cardholder_name\" class=\"form-control\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "cardholder_name"), "html", null, true);
        echo "\">

                        ";
        // line 76
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "cardholder_name")) {
            // line 77
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "cardholder_name"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 78
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 80
            echo "                        ";
        }
        // line 81
        echo "                    </div>
                </div>


                <div class=\"form-group";
        // line 85
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_number")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Card number</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\"  name=\"card_number\" class=\"form-control\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "card_number"), "html", null, true);
        echo "\">

                        ";
        // line 90
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_number")) {
            // line 91
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_number"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 92
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 94
            echo "                        ";
        }
        // line 95
        echo "
                    </div>
                </div>

                <div class=\"form-group";
        // line 99
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_ccv")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Card CCV</label>
                    <div class=\"col-sm-10\">
                        <input type=\"password\" name=\"card_ccv\" class=\"form-control\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "card_ccv"), "html", null, true);
        echo "\">

                        ";
        // line 104
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_ccv")) {
            // line 105
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_ccv"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 106
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 108
            echo "                        ";
        }
        // line 109
        echo "
                    </div>
                </div>


                <div class=\"form-group";
        // line 114
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_expiration")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Card expiration</label>
                    <div class=\"col-xs-5\">
                        <select class=\"form-control\" name=\"card_expiration_month\">
                            ";
        // line 118
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 119
            echo "                                ";
            if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "card_expiration_month"))) {
                // line 120
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                ";
            } else {
                // line 122
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                ";
            }
            // line 124
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 125
        echo "                        </select>
                    </div>

                    <div class=\"col-xs-5\">
                        <select class=\"form-control\" name=\"card_expiration_year\">
                            ";
        // line 130
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(2015, 2020));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 131
            echo "                                ";
            if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "card_expiration_year"))) {
                // line 132
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                ";
            } else {
                // line 134
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                ";
            }
            // line 136
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 137
        echo "                        </select>


                        ";
        // line 140
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_expiration")) {
            // line 141
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_expiration"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 142
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 144
            echo "                        ";
        }
        // line 145
        echo "                    </div>

                </div>

            </div> <!-- /form-inline -->

            <hr>

            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>

        </form>
      </div>

    </div> <!-- /container -->
";
    }

    public function getTemplateName()
    {
        return "/views/site/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 145,  403 => 144,  394 => 142,  389 => 141,  387 => 140,  382 => 137,  376 => 136,  368 => 134,  360 => 132,  357 => 131,  353 => 130,  346 => 125,  340 => 124,  332 => 122,  324 => 120,  321 => 119,  317 => 118,  308 => 114,  301 => 109,  298 => 108,  289 => 106,  284 => 105,  282 => 104,  277 => 102,  269 => 99,  263 => 95,  260 => 94,  251 => 92,  246 => 91,  244 => 90,  239 => 88,  231 => 85,  225 => 81,  222 => 80,  213 => 78,  208 => 77,  206 => 76,  201 => 74,  193 => 71,  182 => 62,  179 => 61,  170 => 59,  165 => 58,  163 => 57,  158 => 55,  150 => 52,  143 => 47,  140 => 46,  131 => 44,  126 => 43,  124 => 42,  120 => 40,  114 => 39,  106 => 37,  98 => 35,  95 => 34,  91 => 33,  82 => 29,  77 => 26,  74 => 25,  65 => 23,  60 => 22,  58 => 21,  51 => 17,  42 => 13,  31 => 4,  28 => 3,);
    }
}
