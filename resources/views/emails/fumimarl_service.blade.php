<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting"> <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <meta name="format-detection" content="telephone=no,address=no,email=no,date=no,url=no">
    <!-- Tell iOS not to automatically link certain text strings. -->
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <title>Fumimark</title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 23 - 41 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    <style>
        /* What it does: Tells the email client that only light styles are provided but the client can transform them to dark. A duplicate of meta color-scheme meta tag above. */
        :root {
            color-scheme: light;
            supported-color-schemes: light;
        }

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: forces Samsung Android mail clients to use the entire viewport */
        #MessageViewBody,
        #MessageWebViewDiv {
            width: 100% !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        a[x-apple-data-detectors],
        /* iOS */
        .unstyle-auto-detected-links a,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img+div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u~div .email-container {
                min-width: 320px !important;
            }
        }

        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u~div .email-container {
                min-width: 375px !important;
            }
        }

        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u~div .email-container {
                min-width: 414px !important;
            }
        }
    </style>
    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }

        .button-td-primary:hover,
        .button-a-primary:hover {
            background: #ff6969 !important;
            border-color: #ff6969 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 480px) {

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }

            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }

            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }

            table.center-on-narrow {
                display: inline-block !important;
            }

            /* What it does: Adjust typography on small screens to improve readability */
            .email-container p {
                font-size: 17px !important;
            }
        }
    </style>
    <!-- Progressive Enhancements : END -->

</head>
<!--
 The email background color (#f9423e) is defined in three places:
 1. body tag: for most email clients
 2. center tag: for Gmail and Inbox mobile apps and web versions of Gmail, GSuite, Inbox, Yahoo, AOL, Libero, Comcast, freenet, Mail.ru, Orange.fr
 3. mso conditional: For Windows 10 Mail
-->

<body width="100%"
    style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #fff4ec;">
    <center role="article" aria-roledescription="email" lang="en" style="width: 100%; background-color: #fff4ec;">
        <!--[if mso | IE]>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f9423e;">
    <tr>
    <td>
    <![endif]-->

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <!-- <div style="max-height:0; overflow:hidden; mso-hide:all;" aria-hidden="true">
            (Optional) This text will appear in the inbox preview, but not the email body. It can be used to supplement
            the email subject line or even summarize the email's contents. Extended text preheaders (~490 characters)
            seems like a better UX for anyone using a screenreader or voice-command apps like Siri to dictate the
            contents of an email. If this text is not included, email clients will automatically populate it using the
            text (including image alt text) at the start of the email's body.
        </div> -->
        <!-- Visually Hidden Preheader Text : END -->

        <!-- Create white space after the desired preview text so email clients don’t pull other distracting text into the inbox preview. Extend as necessary. -->
        <!-- Preview Text Spacing Hack : BEGIN -->
        <div
            style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <!-- Preview Text Spacing Hack : END -->

        <!--
            Set the email width. Defined in two places:
            1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 680px.
            2. MSO tags for Desktop Windows Outlook enforce a 680px width.
            Note: The Fluid and Responsive templates have a different width (600px). The hybrid grid is more "fragile", and I've found that 680px is a good width. Change with caution.
        -->
        <div style="max-width: 680px; margin: 0 auto;" class="email-container">
            <!--[if mso]>
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="680">
            <tr>
            <td>
            <![endif]-->

            <!-- Email Body : BEGIN -->
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin: auto;">
                <!-- Email Header : BEGIN -->
                <!-- <tr>
                    <td style="padding: 20px 0; text-align: center">
                        <img src="./img/fumimark_logo.png" width="200" height="50" alt="alt_text" border="0"
                            style="height: auto; background: #f0dcc4; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;">
                    </td>
                </tr> -->
                <!-- Email Header : END -->

                <!-- Hero Image, Flush : BEGIN -->
                <tr>
                    <td style="background-color: #ffffff;">
                        <a href="{{ route('home') }}">
                            <img src="https://www.negociaecuador.com/brandon-prueba/head-mail.png" width="680"
                                height="" alt="Fumimark_header" border="0"
                                style="width: 100%; max-width: 680px; height: auto; background: #fff4ec; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555; margin: auto; display: block;"
                                class="g-img">
                        </a>
                    </td>
                </tr>
                <!-- Hero Image, Flush : END -->

                <!-- 1 Column Text + Button : BEGIN -->
                <tr>
                    <td style="background-color: #ffffff;">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td
                                    style="padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                                    <h1
                                        style="margin: 0 0 10px; font-size: 25px; line-height: 30px; color: #333333; font-weight: normal;">
                                        Control de plagas</h1>
                                    <p style="margin: 0 0 10px;">Tras años de experiencia, y después de abarcar
                                        diferentes ámbitos del sector de las plagas, tales como empresas, hostelería,
                                        comunidad de propietarios, alcantarillados de municipios, colegios, residencias
                                        de ancianos, clínicas, hospitales, entre otros, Fumimark se dedica en dar
                                        soluciones a:</p>
                                    <ul style="padding: 0; margin: 0; list-style-type: disc;">
                                        <li style="margin:0 0 10px 30px;" class="list-item-first">Control de cucarrachas
                                        </li>
                                        <li style="margin:0 0 10px 30px;">Control de moscas.</li>
                                        <li style="margin:0 0 10px 30px;">Control de roedores.</li>
                                        <li style="margin:0 0 10px 30px;">Control de termintas.</li>
                                        <li style="margin:0 0 10px 30px;">Desinfección contra el COVID.</li>

                                        <li style="margin: 0 0 0 30px;" class="list-item-last">Y asi como otros tipos de
                                            plagas.</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 0 20px 20px;">
                                    <!-- Button : BEGIN -->
                                    <table align="center" role="presentation" cellspacing="0" cellpadding="0"
                                        border="0" style="margin: auto;">
                                        <tr>
                                            <td class="button-td button-td-primary"
                                                style="border-radius: 4px; background: #f9423e;">
                                                <a class="button-a button-a-primary" href="{{ route('home') }}"
                                                    style="background: #f9423e; border: 1px solid #f9423e; font-family: sans-serif; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff; display: block; border-radius: 4px;">Contactanos
                                                    ya! </a>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- Button : END -->
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text + Button : END -->

                <!-- Background Image with Text : BEGIN -->
                <tr>
                    <!-- Bulletproof Background Images c/o https://backgrounds.cm -->
                    <td
                        style="text-align: center; background-image: url('https://www.negociaecuador.com/brandon-prueba/fumigador.jpg'); background-position: center center !important; background-size: cover !important;">
                        <!--[if gte mso 9]>
                        <v:image xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="border: 0; display: inline-block; width: 680px; height: 180px;" src="https://via.placeholder.com/680x180/222222/666666" />
                        <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="border: 0; display: inline-block; position: absolute; width: 680px; height: 180px;">
                        <v:fill opacity="0%" color="#f9423e" />
                        <![endif]-->
                        <div style="background-color: rgb(51, 51, 51,0.7)">
                            <!--[if mso]>
                            <table align="center" role="presentation" border="0" cellspacing="0" cellpadding="0" width="500">
                            <tr>
                            <td width="500">
                            <![endif]-->
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                width="100%" style="max-width:500px; margin: auto;">
                                <tr style="">
                                    <td
                                        style="text-align: center; padding: 40px 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #ffffff;  ;">
                                        <p style="margin: 0;"> <br> Sea cual sea el servicio que contrate, en Fumimark
                                            estamos
                                            comprometidos con nuestros clientes tanto en
                                            Seguridad, Profesionalidad y Calidad/Precio en todos los tratamientos y
                                            servicios efectuados por nuestros técnicos. <br>

                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <!--[if mso]>
                            </td>
                            </tr>
                            </table>
                            <![endif]-->
                        </div>
                        <!--[if gte mso 9]>
                        </v:fill>
                        </v:rect>
                        </v:image>
                        <![endif]-->
                    </td>
                </tr>
                <!-- Background Image with Text : END -->

                <!-- 3 Even Columns : BEGIN -->
                <tr>
                    <!-- Bulletproof Background Images c/o https://backgrounds.cm -->
                    <td style="background-color: #ffffff;">
                        <!--[if gte mso 9]>
                        <v:image xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="border: 0; display: inline-block; width: 680px; height: 180px;" src="https://via.placeholder.com/680x180/222222/666666" />
                        <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="border: 0; display: inline-block; position: absolute; width: 680px; height: 180px;">
                        <v:fill opacity="0%" color="#f9423e" />
                        <![endif]-->
                        <div style="">
                            <!--[if mso]>
                            <table align="center" role="presentation" border="0" cellspacing="0" cellpadding="0" width="500">
                            <tr>
                            <td width="500">
                            <![endif]-->
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                                width="100%"
                                style="max-width:500px; margin: auto; text-align: center; font-family: sans-serif;">
                                <tr>
                                    <td>
                                        <h4>SERVICIOS DE CONTROL DE PLAGAS</h4>
                                    </td>
                                </tr>
                            </table>
                            <!--[if mso]>
                            </td>
                            </tr>
                            </table>
                            <![endif]-->
                        </div>
                        <!--[if gte mso 9]>
                        </v:fill>
                        </v:rect>
                        </v:image>
                        <![endif]-->
                    </td>
                </tr>
                <tr>

                    <td align="center" valign="top" style="font-size:0; padding: 10px; background-color: #ffffff;">
                        <!--[if mso]>
                        <table role="presentation" border="0" cellspacing="0" cellpadding="0" width="660">
                        <tr>
                        <td valign="top" width="220">
                        <![endif]-->
                        <div style="display:inline-block; margin: 0 -1px; max-width: 220px; min-width:160px; vertical-align:top; width:100%;"
                            class="stack-column">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0"
                                width="100%">
                                <tr>
                                    <td style="padding: 10px;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0"
                                            width="100%" style="font-size: 14px;text-align: left;">
                                            <tr>
                                                <td>
                                                    <img src="https://www.negociaecuador.com/brandon-prueba/urban.jpg "
                                                        width="200" height="" border="0"
                                                        alt="ciudad urbana"
                                                        style="width: 100%; max-width: 200px; height: auto; background: #f0dcc4; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;"
                                                        class="center-on-narrow">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;"
                                                    class="stack-column-center">
                                                    <h5>Residencias urbanas </h5>
                                                    <p style="margin: 0;">¿Busca una empresa de Control de Plagas para
                                                        su Comunidad?</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!--[if mso]>
                        </td>
                        <td valign="top" width="220">
                        <![endif]-->
                        <div style="display:inline-block; margin: 0 -1px; max-width: 220px; min-width:160px; vertical-align:top; width:100%;"
                            class="stack-column">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0"
                                width="100%">
                                <tr>
                                    <td style="padding: 10px;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0"
                                            width="100%" style="font-size: 14px;text-align: left;">
                                            <tr>
                                                <td>
                                                    <img src="https://www.negociaecuador.com/brandon-prueba/oficina.jpg"
                                                        width="200" height="" border="0" alt="oficina"
                                                        style="width: 100%; max-width: 200px; height: auto; background: #f0dcc4; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;"
                                                        class="center-on-narrow">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;"
                                                    class="stack-column-center">
                                                    <h5>Oficinas y Empresas</h5>
                                                    <p style="margin: 0;">Servicios especiales de Sanidad, Higiene y
                                                        Calidad Ambiental para Oficinas y Empresas.</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!--[if mso]>
                        </td>
                        <td valign="top" width="220">
                        <![endif]-->
                        <div style="display:inline-block; margin: 0 -1px; max-width: 220px; min-width:160px; vertical-align:top; width:100%;"
                            class="stack-column">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0"
                                width="100%">
                                <tr>
                                    <td style="padding: 10px;">
                                        <table role="presentation" cellspacing="0" cellpadding="0" border="0"
                                            width="100%" style="font-size: 14px;text-align: left;">
                                            <tr>
                                                <td>
                                                    <img src="https://www.negociaecuador.com/brandon-prueba/kitchen.jpg"
                                                        width="200" height="" border="0" alt="cocina"
                                                        style="width: 100%; max-width: 200px; height: auto; background: #f0dcc4; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;"
                                                        class="center-on-narrow">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;"
                                                    class="stack-column-center">
                                                    <h5>Industria Alimentaria</h5>
                                                    <p style="margin: 0;">¿Tiene problemas con las plagas en su empresa
                                                        alimentaria? Su solución está aquí. No permita que la Plaga
                                                        cause más daño.</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </td>
                </tr>
                <!-- 3 Even Columns : END -->



                <!-- Clear Spacer : BEGIN -->
                <tr>
                    <td aria-hidden="true" height="40" style="font-size: 0px; line-height: 0px;">
                        &nbsp;
                    </td>
                </tr>
                <!-- Clear Spacer : END -->

                <!-- 1 Column Text : BEGIN -->
                <tr>
                    <td style="background-color: #ffffff;">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td
                                    style="padding: 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
                                    <p style="margin: 0 0 10px 0;  text-align: center;">Somos una compañía
                                        especializada
                                        en hacer
                                        funcionamiento incluido de plagas a grado industrial, comercial y residencial
                                        con elevados estándares de calidad.


                                        Ofrecemos el mejor servicio de fumigación a un costo que si puedes costear. </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- 1 Column Text : END -->

            </table>
            <!-- Email Body : END -->

            <!-- Email Footer : BEGIN -->
            <!-- <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="max-width: 680px;">
                <tr>
                    <td
                        style="padding: 20px; font-family: sans-serif; font-size: 12px; line-height: 15px; text-align: center; color: #333333;">
                        <webversion style="color: #333333; text-decoration: underline; font-weight: bold;">View as a Web
                            Page</webversion>
                        <br><br>
                        Company Name<br><span class="unstyle-auto-detected-links">123 Fake Street, SpringField, OR,
                            97477 US<br>(123) 456-7890</span>
                        <br><br>
                        <unsubscribe style="color: #333333; text-decoration: underline;">unsubscribe</unsubscribe>
                    </td>
                </tr>
            </table> -->
            <!-- Email Footer : END -->

            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>

        <!-- Full Bleed Background Section : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
            style="background-color: #f0dcc4;">
            <tr>
                <td>
                    <div align="center" style="max-width: 680px; margin: auto;" class="email-container">
                        <!--[if mso]>
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="680" align="center">
                        <tr>
                        <td>
                        <![endif]-->
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr style="text-align: center;">
                                <td>
                                    <div class="|" style="padding-top: 30px">
                                        <a href="{{ route('home') }}">
                                            <img style="width: 240px;"
                                                src="https://www.negociaecuador.com/brandon-prueba/fumimark_logo.png"
                                                alt="fumimark logo">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            {{-- <tr>
                                <img src="https://www.negociaecuador.com/brandon-prueba/icons8-facebook-100.png"
                                    alt="facebook">
                                <img src="https://www.negociaecuador.com/brandon-prueba/icons8-instagram-100.png"
                                    alt="instagram">
                                <img src="https://www.negociaecuador.com/brandon-prueba/icons8-twitter-circled-100.png"
                                    alt="twitter">
                            </tr> --}}

                            <tr>

                                <td
                                    style="padding: 20px; font-family: sans-serif; font-size: 12px; line-height: 15px; text-align: center; color: #333333;">

                                    <br><span class="unstyle-auto-detected-links">Caracas, Venezuela<br>+58
                                        424-1595718</span><br>
                                    <span>Todos los derecho reservados. <a
                                            href="{{ route('home') }}">Fumimark</a></span>
                                    <br><br>
                                </td>

                            </tr>

                        </table>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </div>
                </td>
            </tr>
        </table>
        <!-- Full Bleed Background Section : END -->

        <!--[if mso | IE]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </center>
</body>

</html>
