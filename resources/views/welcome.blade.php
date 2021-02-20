<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{asset('bootstrap4/bootstrap_4.6.0.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-6 list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action function" id="find">
                <h5 class="mb-1">find()</h5>
                <p class="mb-1">Get the descendants of each element in the current set of matched elements, filtered by a selector, jQuery object, or element.</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action function" id="hide">
                <h5 class="mb-1">hide()</h5>
                <p class="mb-1">Hide the matched elements.</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action" id="toggle">
                <h5 class="mb-1">toggle()</h5>
                <p class="mb-1">Display or hide the matched elements.</p>
            </a>
        </div>
        <div class="col-8 list-group list-group-flush border rounded mt-3 p-4  bg-secondary" id="content">
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('a').click(function () {
            $('#content').text('');
            $.ajax({
                url: window.origin + "/show/" + $(this).attr('id'),
                method: 'GET',
                success: function (res) {
                    for (let i=0; i < res.demo.length; i++){
                        let str = res.demo[i].toString(); //&lt;
                        str = str.replace("<", "&lt;");
                        str = str.replace(">", "&gt;");
                        let content = $( "<p class=\"p-0 m-0\">" + str + "</p>" );
                        $('#content').append(content);
                    }
                },
                error: function (err) {
                }
            });
        });
    });
</script>
</body>
</html>
