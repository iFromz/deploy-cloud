<!DOCTYPE html>
<html>
    <head>
        <title>iinbrand</title>

        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="/fonts/thaisanslite.min.css" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                background-color: #2d3451;
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'ThaiSansLite';
                color: #f8f8f8;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 50px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title"><span class="typed">The iinbrand on Heroku</span></div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
            $(function(){
                $(".typed").typed({
                    strings: [
                        "The iinbrand",
                        "Protect you Brand",
                        "Happy Client &amp; Brand owner.",
                    ],
                    // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
                    stringsElement: null,
                    // typing speed
                    typeSpeed: 20,
                    // time before typing starts
                    startDelay: 200,
                    deleteDelay: 5000,
                    // backspacing speed
                    backSpeed: 0,
                    // time before backspacing
                    backDelay: 200,//500,
                    // loop
                    loop: true,
                    // false = infinite
                    loopCount: false,
                    // show cursor
                    showCursor: true,
                    // character for cursor
                    cursorChar: "|",
                    // attribute to type (null == text)
                    attr: null,
                    // either html or text
                    contentType: 'html',
                    // call when done callback function
                    callback: function() {},
                    // starting callback function before each string
                    preStringTyped: function() {},
                    //callback for every typed string
                    onStringTyped: function() {},
                    // callback for reset
                    resetCallback: function() {}
                });

            });
        </script>
        <script src="/js/typed.min.js"></script>
    </body>
</html>
