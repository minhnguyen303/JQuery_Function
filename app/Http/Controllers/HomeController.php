<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show($name)
    {
        $data = [
            'name'=>$name."()",
            'desc'=>'',
            'syntax'=>'',
            'demo'=>''
        ];
        switch ($name){
            case 'find':
                $data['desc'] = "Get the descendants of each element in the current set of matched elements, filtered by a selector, jQuery object, or element.";
                $data['syntax'] = [
                    ".find( selector )",
                    ".find( element )"
                ];
                $data['demo'] = [
                    "<!doctype html>",
                    "<html lang=\"en\">",
                    "<head>",
                    "<meta charset=\"utf-8\">",
                    "<title>find demo</title>",
                    "<script src=\"https://code.jquery.com/jquery-3.5.0.js\"></script>",
                    "</head>",
                    "<body>",
                    "<p><span>Hello</span>, how are you?</p>",
                    "<p>Me? I'm <span>good</span>.</p>",
                    "<script>",
                    "$( \"p\" ).find( \"span\" ).css( \"color\", \"red\" );",
                    "</script>",
                    "</body>",
                    "</html>"
                ];
                break;
            case 'hide':
                $data['desc'] = "Hide the matched elements.";
                $data['syntax'] = [
                    ".hide()",
                    ".hide( [duration ] [, complete ] )",
                    ".hide( options )",
                    ".hide( duration [, easing ] [, complete ] )"
                ];
                $data['demo'] = [
                    "<!doctype html>",
                    "<html lang=\"en\">",
                    "<head>",
                    "<meta charset=\"utf-8\">",
                    "<title>hide demo</title>",
                    "<script src=\"https://code.jquery.com/jquery-3.5.0.js\"></script>",
                    "</head>",
                    "<body>",
                    "<p>Hello</p>",
                    "<a href=\"#\">Click to hide me too</a>",
                    "<p>Here is another paragraph</p>",
                    "<script>",
                    "$( \"p\" ).hide();",
                    "$( \"a\" ).click(function( event ) {",
                    "event.preventDefault();",
                    "$( this ).hide();",
                    "});",
                    "</script>",
                    "</body>",
                    "</html>",
                ];
                break;
            case 'toggle':
                $data['desc'] = "Display or hide the matched elements.";
                $data['syntax'] = [
                    ".toggle( [duration ] [, complete ] )",
                    ".toggle( options )",
                    ".toggle( duration [, easing ] [, complete ] )",
                    ".toggle( display )"
                ];
                $data['demo'] = [
                    "<!doctype html>",
                    "<html lang=\"en\">",
                    "<head>",
                    "<meta charset=\"utf-8\">",
                    "<title>toggle demo</title>",
                    "<script src=\"https://code.jquery.com/jquery-3.5.0.js\"></script>",
                    "</head>",
                    "<body>",
                    "<button>Toggle</button>",
                    "<p>Hello</p>",
                    "<p style=\"display: none\">Good Bye</p>",
                    "<script>",
                    "$( \"button\" ).click(function() {",
                    "$( \"p\" ).toggle();",
                    "});",
                    "</script>",
                    "</body>",
                    "</html>"
                ];
                break;
        }
        return response()->json($data);
    }
}
