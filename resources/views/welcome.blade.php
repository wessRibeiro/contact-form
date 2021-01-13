<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base target="_parent">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap">
    <link rel="stylesheet"
          href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.2/css/mdb.min.css">
    <link rel="stylesheet"
          href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-addons-4.19.2.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb-plugins-gathered.min.css">
    <style type="text/css">
        .btn .fas, .btn .fab, .btn .far {
            margin-left: 3px;
        }
        input{
            color: #ffffff !important;
        }
        h2 {
            color: #1f4280;
        }

        h6 {
            line-height: 1.7;
        }

        footer.page-footer {
            margin-top: 0px;
            padding-top: 1em;
        }

        footer {
            background-color: #EE3965 !important;
        }

        .pink-text {
            color: #EE3965 !important;
        }

        body {
            background-color: #eee;
        }

        .btn.pink-gradient {
            color: #fff !important;
        }

        .map-container-section {
            overflow: hidden;
            /* padding-bottom:56.25%; */
            position: relative;
            height: 0;
        }

        .map-container-section iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
        .md-form label{
            color: #ffffff !important;
        }
        .pink-gradient {
            background: linear-gradient(278deg, #1f4280, #ee3965) !important;
        }
        .message-form-blue{
            border: 1px solid #1f4280;
            background-color: #1f4280;
            border-radius: 10px;
            padding: 1em;
        }
        .message-form-blue::after {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-top: 25px solid #1f4280;
            border-left: 20px solid transparent;
            border-right: 11px solid transparent;
            top: 0px;
            left: -5px;
        }
        .message-blue {
            position: relative;
            margin-left: 20px;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #A8DDFD;
            width: 200px;
            height: 50px;
            text-align: left;
            font: 400 .9em 'Open Sans', sans-serif;
            border: 1px solid #97C6E3;
            border-radius: 10px;
        }

        .message-pink {
            color: #FFFFFF;
            position: relative;
            margin-bottom: 1em;
            padding: 10px;
            background-color: #EE3965;
            width: max-content;
            height: max-content;
            text-align: left;
            font: 500 1rem 'Open Sans', sans-serif;
            border: 1px solid #EE3965;
            border-radius: 10px;
            float: right;
        }

        .message-content {
            padding: 5px;
            margin: 0;
        }

        .message-timestamp-right {
            position: relative;
            font-size: .65em;
            font-weight: 200;
            padding: .5em;
        }

        .message-timestamp-left {
            position: absolute;
            font-size: .85em;
            font-weight: 300;
            bottom: 5px;
            left: 5px;
        }

        .message-blue:after {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-top: 15px solid #A8DDFD;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            top: 0;
            left: -15px;
        }

        .message-blue:before {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-top: 17px solid #97C6E3;
            border-left: 16px solid transparent;
            border-right: 16px solid transparent;
            top: -1px;
            left: -17px;
        }

        .message-pink:after {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-bottom: 15px solid transparent;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            top: 0;
            right: -15px;
        }

        .message-pink:before {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-top: 20px solid #EE3965;
            border-left: 16px solid transparent;
            border-right: 24px solid transparent;
            top: -1px;
            right: -25px;
        }

    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar pink-gradient">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img width="46px" src="images/logo-small-white.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                    aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Contato
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div id="map-container-demo-section" class="z-depth-1-half map-container-section mb-4" style="height: 500px">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.027661773113!2d-46.6867650495951!3d-23.567449984604618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57767baaad8f%3A0x75e6fbbf92938efd!2sR.%20Cap.%20Ant%C3%B4nio%20Rosa%2C%20376%20-%20Cj.%20101%20-%20Pinheiros%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001443-900!5e0!3m2!1spt-PT!2sbr!4v1610230983876!5m2!1spt-PT!2sbr"
                frameborder="0" style="border:0"></iframe>
        </div>
    </section>
</header>
<main>
    <div class="container-fluid mb-5">
        <div class="row" style="margin-top: -100px;">
            <div class="col-md-12">
                <div class="card pb-5">
                    <div class="card-body">
                        <div class="container">
                            <!--Section: Contact-->
                            <section class="section">
                                <!--Section heading-->
                                <h2 class="font-weight-bold text-center h1 my-5">
                                    fale com um especialista Netshow.me
                                </h2>
                                <!--Section description-->
                                <p class="text-center grey-text mb-5 mx-auto w-responsive">
                                    Agora o seu conhecimento pode
                                    virar conteúdo, engajar o seu público de maneira
                                    inovadora e ainda ser uma fonte de
                                    receita escalável. Fale com um dos nossos especialistas
                                    para conhecer cases de
                                    sucesso e entender como impusionar seu negócio.</p>
                                <div class="row pt-5">
                                    <div class="col-md-8 col-xl-9">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="message-pink">
                                                        <div class="message-content">Como podemos te ajudar?</div>
                                                        <div class="message-timestamp-right">13:37</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                <img width="46px" src="images/logo-small.png" alt="">
                                                </div>
                                            </div>
                                            {{--<div class="message-blue">
                                                <div class="message-content">Thanks!</div>
                                                <div class="message-timestamp-left">13:37</div>
                                            </div>--}}
                                        </div>


                                        <form>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="container message-form-blue">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="md-form">
                                                                <input type="text"
                                                                       name="contact-name"
                                                                       id="contact-name"
                                                                       maxlength="100"
                                                                       class="form-control"
                                                                       required>
                                                                <label for="contact-name">
                                                                    seu nome aqui *
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="md-form">
                                                                <input type="email"
                                                                       maxlength="100"
                                                                       name="contact-email"
                                                                       id="contact-email"
                                                                       class="form-control"
                                                                       required>
                                                                <label for="contact-email">
                                                                    seu email aqui *
                                                                </label>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="md-form">
                                                                    <label for="contact-Subject" class="form-label">Assunto
                                                                        *</label>
                                                                    <input type="text"
                                                                           maxlength="100"
                                                                           name="contact-Subject"
                                                                           id="contact-Subject"
                                                                           class="form-control"
                                                                           required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="md-form">
                                                                    <label
                                                                        for="contact-telephone" class="form-label">
                                                                        Telefone *
                                                                    </label>
                                                                    <input type="tel"
                                                                           maxlength="20"
                                                                           name="contact-telephone"
                                                                           id="contact-telephone"
                                                                           class="form-control"
                                                                           required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="md-form">
                                                                <textarea type="text"
                                                                          maxlength="800"
                                                                          id="contact-message"
                                                                          class="md-textarea form-control"
                                                                          rows="3"
                                                                          required
                                                                ></textarea>
                                                                    <label for="contact-message">Escreva sua mensagem aqui *</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="md-form text-center">
                                                                    <input type="file"
                                                                           name="contact-attachment" id="contact-attachment"
                                                                           class="form-control-file"
                                                                           accept=".pdf,.doc,.docx,.odt, .txt" required></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="text-center text-md-left">
                                                                <input type="submit"
                                                                       value="Enviar"
                                                                       class="btn pink-gradient">
                                                                    {{--<i class="far fa-paper-plane fa-2x"></i>--}}
                                                                </input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>


                                    </div>
                                    <div class="col-md-4 col-xl-3">
                                        <ul class="contact-icons text-center list-unstyled">
                                            <li>
                                                <i class="fas fa-map-marker-alt fa-2x pink-text"></i>
                                                <p>
                                                    Rua Capitão Antônio Rosa, 376, cj. 101, Pinheiros, São Paulo–SP, CEP 01443-010
                                                </p>
                                            </li>
                                            <li>
                                                <i class="fas fa-phone fa-2x pink-text"></i>
                                                <p>(11) 93751-7265</p>
                                                <p>De segunda a sexta das 9h às 19h.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="page-footer lighten-3 text-center text-md-left">
    <div class="text-center py-3 wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
                    <span>
                        Rua Capitão Antônio Rosa, 376 — Copyright © 2021
                    </span>
            <a href="https://netshow.me">Netshow.me</a>
        </div>
    </div>
</footer>
</body>
</html>

