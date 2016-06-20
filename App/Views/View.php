<?php

namespace App\Views;

class View {

    public static function show($view, $args = null, $location = 'App/Views/') {

        $page = $location . $view . 'View.php';
        $template = self::getTemplate($page);
        if ($args !== null) {
            $templateFinal = self::parseTemplate($template, $args);
        } else {
            $templateFinal = $template;
        }

        echo $templateFinal;

        return __CLASS__;
    }

    public static function obGetFile($file) {
        ob_start();
        include $file;
        $return = ob_get_contents();
        ob_clean();
        return $return;
    }

    private static function getTemplate($template) {
        $arqTemp = $template; // criando var com caminho do arquivo
        if (is_file($arqTemp)) { // verificando se o arq existe
            return self::obGetFile($arqTemp);
        } else
            return false;
    }

    private static function parseTemplate($template, $array) {
        /* Substitui tags */
        $template = self::replaceTags($template, $array);

        /* Inclui no layout */
        $template = self::includeInLayout($template);

        return $template;
    }

    private static function includeInLayout($template) {
        $namelayout = substr(substr($template, strpos($template, "@layout('") + 9), 0, strpos($template, "')") - 9); //ok
        $layout = null;
        if ($namelayout != null) {
            $layout = self::obGetFile(__DIR__ . "/" . $namelayout . ".php");
        }

        $section = substr($template, strpos($template, "@section('") + 10);
        $section = substr($section, 0, strpos($section, "')"));

        $template = substr_replace($template, "", strpos($template, "@section('$section')"), strlen("@section('$section')"));
        $template = substr_replace($template, "", strpos($template, "@layout('$namelayout')"), strlen("@layout('$namelayout')"));


        $layout = substr_replace($layout, $template, strpos($layout, "@include('$section')"), strlen($section) + 12);
        $layout = substr($layout, 0, strpos($layout, "@endsection") - 1);
        //var_dump($layout);
        return $layout;
    }

    private static function replaceTags($template, $array) {
        foreach ($array as $a => $b) { // recebemos um array com as tags
            if (is_string($b) || is_int($b) || is_bool($b)) {
                $template = str_replace("{{" . $a . "}}", $b, $template);
            } else {
                $foreach = substr($template, strpos($template, "@foreach($a)") + strlen("@foreach($a)"), strpos($template, "@endforeach") - strpos($template, "@foreach($a)") - 13);
                $novoforeach = $foreach;
                $concatforeach = "";

                foreach ($b as $data) {
                    $novoforeach = $foreach;
                    foreach ($data as $k => $v) {
                        //var_dump($data);
                        $novoforeach = str_replace("{{" . $a . "=>" . $k . "}}", $v, $novoforeach);
                    }
                    $concatforeach .= $novoforeach;
                }

                $template = substr_replace($template, $concatforeach, strpos($template, "@foreach($a)"), strpos($template, "@endforeach"));
            }
        }
        return $template;
        //TODO s� est� resolvendo para um Foreach por p�gina!
    }

}
