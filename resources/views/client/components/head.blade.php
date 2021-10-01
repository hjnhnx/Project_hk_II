<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <link rel="icon" href="/images/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Sun Mobile | @yield('title')</title>
    <meta name="author" content="Công ty TNHH Thương mại Dịch vụ Di Động Sao Việt"/>
    <meta name="resource-type" content="Document"/>
    <meta name="distribution" content="Global"/>
    <meta name="revisit-after" content="1 days"/>
    <meta name="generator" content="Công ty TNHH Thương mại Dịch vụ Di Động Sao Việt"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/libs/client/styles/index.css">
    <link rel="stylesheet" href="/libs/client/styles/respon_sive.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    @yield('contactus-css')
    @yield('custom_style')
    <style>
        .header_item{
            color: #F15A25;
        }
        #cat-nav  i {
            margin-right: 5px;
            color:#0056b3 ;
        }
        #cat-nav  a {
            text-decoration: none!important;
        }

        .call_now > i{
            color: white;
        }

        .call_now {
            height: 55px;
            width: 55px;
            position: fixed;
            bottom: 10px;
            left: 10px;
            background: #f15a25;
            display: flex;
            border-radius: 50%;
            justify-content: center;
            align-items: center;
        }

        #toast-container > div{
            opacity: 1!important;
        }

        .list_images_product::-webkit-scrollbar {
            width: 0px;
        }

    </style>
</head>
