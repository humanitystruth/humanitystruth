<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/data/imgs/icons/humanitystruth-favicon.png">
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"/>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/0.11.1/trix.css">
    <link type="text/css" rel="stylesheet" href="/css/morris.css">
    <link type="text/css" rel="stylesheet" href="/css/w3.css">
    <link type="text/css" rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/jquery.atwho.css">
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="/js/raphael.min.js" type="text/javascript"></script>
    <script src="/js/morris.min.js" type="text/javascript"></script>
    <script src="/js/jquery.atwho.js" type="text/javascript"></script>
    <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "https://humanitystruth.com",
        "email": "admin@humanitystruth.com",
        "name": "Humanitys Truth",
        "description": "{{$vision}}"
        }
    </script>
    <script>
        window.App={!!json_encode(['csrfToken'=>csrf_token(),
            'user'=>Auth::user(),
            'signedIn'=>Auth::check()
        ])!!};
    </script>
    <script src="/js/authorizations.js" type="text/javascript"></script>
    <script src="/js/bootstrap.js" type="text/javascript"></script>
    <script src="/js/functions.js" type="text/javascript"></script>
    
</head>