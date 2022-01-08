<!Doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Style css -->

    <style>
        /* #region Root */
        :root {
            --primary-font: 'Jost', sans-serif;
            --secondary-font: 'Poppins', sans-serif;
            --h1-size: 4rem;
            --h1-weight: 900;
            --h2-size: 3rem;
            --h2-weight: 700;
            --h3-size: 2rem;
            --h3-weight: 600;
            --h4-size: 1.5rem;
            --h4-weight: 600;
            --h5-size: 1.2rem;
            --h5-weight: 600;
            --h6-size: 1rem;
            --h6-weight: 600;
            --p-size: 1rem;
            --p-weight: 400;
            --header-bg-color: #121117;
            --nav-brand-height: 55px;
            --top-nav-item-color: #f5f5f5;
            --nav-item-color: #121117;
            --primary-color: #4528DC;
            --secondary-color: #AC87FC;
            --white-color: #f9f9f9;
            --black-color: #040402;
            --grey-color: #f3f5f7;
            --dark-grey-color: #191919;
            --primary-t-color: #2f323a;
            --secondary-t-color: #f5f5f5;
            --primary-p-color: #6f6f6f;
            --secondary-p-color: #8E8E8E;
            --primary-b-color: #f5f5f5;
            --primary-l-color: rgba(0, 0, 0, .12);
            --secondary-l-color: rgba(255, 255, 255, 0.12);
            --valid-color: #007a4d;
            --invalid-color: #e34f4f;
            --primary-bg-color: #ffffff;
            --primary-bg-color-2: #eeeeee;
            --primary-bg-color-3: #e5e5e5;
            --secondary-bg-color: #09080D;
            --secondary-bg-color-2: #111111;
            --secondary-bg-color-3: #191919;
            --card-bg-color: #f5f5f5;
            --card-bg-color-2: #16151A;
            --footer-bg-color: #121117;
        }

        a,
        abbr,
        acronym,
        address,
        applet,
        article,
        aside,
        audio,
        b,
        big,
        blockquote,
        body,
        canvas,
        caption,
        center,
        cite,
        code,
        dd,
        del,
        details,
        dfn,
        div,
        dl,
        dt,
        em,
        embed,
        fieldset,
        figcaption,
        figure,
        footer,
        form,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        header,
        hgroup,
        html,
        i,
        iframe,
        img,
        ins,
        kbd,
        label,
        legend,
        li,
        mark,
        menu,
        nav,
        object,
        ol,
        output,
        p,
        pre,
        q,
        ruby,
        s,
        samp,
        section,
        small,
        span,
        strike,
        strong,
        sub,
        summary,
        sup,
        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        time,
        tr,
        tt,
        u,
        ul,
        var,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            vertical-align: baseline;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        html {
            overflow-x: hidden;
        }

        body {
            font-family: var(--secondary-font);
            color: var(--primary-p-color);
            background-color: var(--primary-bg-color);
        }

        body.odd {
            color: var(--secondary-p-color);
            background-color: var(--secondary-bg-color);
        }

        body:not(.page-template) .odd:not(.comment) {
            color: #8E8E8E;
        }

        body.page-template .odd {
            color: var(--white-color);
        }

        ol,
        ul {
            padding-left: 20px;
        }

        ol {
            list-style: decimal;
        }

        ul {
            list-style: disc;
        }

        ul ul {
            list-style: circle;
        }

        pre,
        code {
            display: block;
            margin: 1rem 0;
            color: var(--primary-color);
        }

        blockquote,
        q {
            display: block;
            margin: 1rem 0;
            quotes: none;
            quotes: none;
            font-style: italic;
            padding: 1rem 1.5rem;
            border-left: 5px solid var(--primary-bg-color-3);
        }

        .odd blockquote,
        q {
            border-left: 5px solid var(--secondary-bg-color-3);
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        blockquote p,
        q p {
            margin: 0;
        }

        figure {
            margin-bottom: 1.5rem;
        }

        figcaption {
            margin-bottom: 1.5rem;
            font-style: italic;
            padding: 1rem 1.5rem;
            border-left: 5px solid var(--primary-bg-color-3);
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /* #endregion Reset */
        /*----------------------------------------------
4. General
----------------------------------------------*/
        /* #region General */
        ::-moz-selection {
            background: rgba(166, 175, 189, 0.3);
        }

        ::selection {
            background: rgba(166, 175, 189, 0.3);
        }

        ::-moz-selection {
            background: rgba(166, 175, 189, 0.3);
        }

        *,
        *:after,
        *:before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        a:not(.btn),
        a:link:not(.btn),
        a:visited:not(.btn),
        a:hover:not(.btn),
        a:active:not(.btn) {
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: var(--primary-color);
            text-decoration: none;
        }

        a:not([href]),
        a:not([href]):hover,
        a:not([href]) i,
        a:not([href]) i:hover {
            color: var(--primary-b-color);
        }

        p {
            margin: 1.5rem 0;
            font-size: var(--p-size);
            font-weight: var(--p-weight);
            line-height: 1.5;
            -ms-word-wrap: break-word;
            word-wrap: break-word;
        }

        p:first-child {
            margin-top: 0;
        }

        p:last-child {
            margin-bottom: 0;
        }

        .page-template .odd p {
            opacity: 0.7;
        }

        .swiper-wrapper.odd p {
            opacity: 0.8;
        }

        h1 {
            margin-bottom: 1.5rem;
            font-size: var(--h1-size);
            font-weight: var(--h1-weight);
            line-height: 1.2;
            font-family: var(--primary-font);
            color: var(--primary-t-color);
            -ms-word-wrap: break-word;
            word-wrap: break-word;
        }

        h1 em {
            display: block;
            font-size: var(--h2-size);
            font-weight: 300;
        }

        h2 {
            margin: 1.5rem 0;
            font-size: var(--h2-size);
            font-weight: var(--h2-weight);
            line-height: 1.2;
            font-family: var(--primary-font);
            color: var(--primary-t-color);
            -ms-word-wrap: break-word;
            word-wrap: break-word;
        }

        h3 {
            margin: 1.5rem 0;
            font-size: 2rem;
            font-weight: 600;
            line-height: 1.2;
            font-family: var(--primary-font);
            color: var(--primary-t-color);
            -ms-word-wrap: break-word;
            word-wrap: break-word;
        }

        h4 {
            margin: 1.5rem 0;
            font-size: 1.5rem;
            font-weight: 600;
            line-height: 1.2;
            font-family: var(--primary-font);
            color: var(--primary-t-color);
            -ms-word-wrap: break-word;
            word-wrap: break-word;
        }

        h5 {
            margin: 1.5rem 0;
            font-size: 1.2rem;
            font-weight: 600;
            line-height: 1.2;
            font-family: var(--primary-font);
            color: var(--primary-t-color);
            -ms-word-wrap: break-word;
            word-wrap: break-word;
        }

        h6 {
            margin: 1.5rem 0;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.2;
            font-family: var(--primary-font);
            color: var(--primary-t-color);
            -ms-word-wrap: break-word;
            word-wrap: break-word;
        }

        b,
        strong {
            font-weight: 700;
        }

        li {
            margin: 0.5rem 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
        }

        img {
            max-width: 100%;
            height: auto;
            vertical-align: middle;
        }

        ::-webkit-input-placeholder {
            color: var(--primary-p-color) !important;
        }

        :-ms-input-placeholder {
            color: var(--primary-p-color) !important;
        }

        ::-ms-input-placeholder {
            color: var(--primary-p-color) !important;
        }

        ::placeholder {
            color: var(--primary-p-color) !important;
        }

        table {
            border-collapse: separate;
            border-spacing: 10px;
        }

        table td {
            padding: 10px 0;
        }

        table th {
            padding: 10px 0;
        }

        dt {
            margin: 15px 0;
        }

        address {
            margin-bottom: 1rem;
        }

        form {
            width: 100%;
        }

        form label {
            width: 100%;
        }

        input,
        textarea,
        select {
            width: 100%;
            height: 50px;
            background: no-repeat;
            -webkit-box-shadow: none;
            box-shadow: none;
            padding: 0.7rem 1rem;
            border-color: var(--primary-l-color);
            border-width: 2px;
            border-radius: 2px;
        }

        input:focus,
        textarea:focus,
        select:focus {
            background: no-repeat;
            color: inherit;
            outline: none;
            border-color: inherit;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        input {
            border-color: var(--primary-p-color);
            color: var(--primary-p-color);
        }

        input:focus {
            border-color: var(--primary-t-color);
            color: var(--primary-t-color);
        }

        input[type="radio"] {
            height: initial;
        }

        input[type="submit"] {
            border: 1px solid;
            padding: 2.5px 10px;
            display: block;
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            max-width: 200px;
            text-align: center;
            color: var(--primary-color);
        }

        input[type="submit"]:hover {
            background-color: var(--primary-color);
            color: var(--primary-b-color);
            border-color: var(--primary-color);
        }

        input[type=checkbox] {
            width: 20px;
            height: 20px;
        }

        textarea {
            height: 100px;
            resize: none;
            border-color: var(--primary-p-color);
            color: var(--primary-t-color);
        }

        textarea:focus {
            border-color: var(--primary-t-color);
            color: var(--primary-t-color);
        }

        .btn {
            position: relative;
            font-size: 1rem;
            font-weight: 700;
            color: var(--white-color);
            line-height: 1;
            text-align: center;
            padding: 16px 34px;
            border: 0 none;
            border-radius: 100px;
            outline: 0 none;
            cursor: pointer;
            z-index: 1;
        }

        .btn:hover,
        .btn:focus,
        .btn:active {
            color: var(--white-color);
            -webkit-box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .btn.btn-bordered {
            background: transparent none repeat scroll 0 0;
            color: #444;
        }

        .btn.btn-bordered::before {
            position: absolute;
            content: "";
            height: calc(100% + 4px);
            width: calc(100% + 4px);
            background-image: linear-gradient(135deg, var(--primary-color) 10%, var(--secondary-color));
            top: -2px;
            left: -2px;
            border-radius: 100px;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            z-index: -2;
        }

        .btn.btn-bordered:after {
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            border-radius: 100px;
            background: #fff none repeat scroll 0 0;
            -webkit-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            z-index: -1;
        }

        body {
            font-family: 'Roboto', sans-serif;

        }


        .card {
            padding: 1.5rem;
            border: 1px solid #dddddd;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.25);
            -webkit-transition-timing-function: cubic-bezier(0.25, 0.25, 0.75, 0.75);
            transition-timing-function: cubic-bezier(0.25, 0.25, 0.75, 0.75);
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: opacity, -webkit-transform;
            transition-property: opacity, -webkit-transform;
            transition-property: opacity, transform;
            transition-property: opacity, transform, -webkit-transform;
        }

        .card .card-img-top {
            border-radius: 6px;
        }

        .card .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 35px 0 0;
        }



        .card .card-body h3,
        .card .card-body h4,
        .card .card-body h5,
        .card .card-body h6 {
            margin-top: 0;
        }

        .card .card-footer {
            border-radius: 0;
            background: none;
            padding: 30px 0;
            margin: 0 30px;
            border-top: 1px solid var(--primary-l-color);
        }

        .card .card-footer a {
            margin: 0 10px;
        }

        .card .card-footer a:not(.btn) {
            color: var(--primary-p-color);
        }

        .card .card-footer .card-footer i {
            margin: 0 5px 2.5px;
        }

        .card:hover .card-footer {
            color: #f5f5f5;
            border-color: rgba(255, 255, 255, 0.25);
        }

        .card.no-hover {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .card.no-hover:hover {
            -webkit-transform: inherit;
            transform: inherit;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        .card:not(.no-hover):hover {
            -webkit-transform: translateY(-5px);
            transform: translateY(-5px);
        }

        .card.blog-card .blog-thumb img {
            border-radius: 6px;
        }

        .card.blog-card .blog-content a {
            color: var(--primary-t-color);
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .card.blog-card .blog-content a h4 {
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .card.blog-card .blog-content a:hover {
            color: var(--primary-color);
        }

        .card.blog-card .blog-content a:hover h4 {
            color: var(--primary-color);
        }

    </style>


    <title>My Pet</title>
</head>

<body>



    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="{{ route('home') }}"> <img src="{{ asset('assets/img/logo.png') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('create') }}">Create</a>
                    </li>

                </ul>

            </div>
        </nav>
    </header>



    @yield('content')




    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
