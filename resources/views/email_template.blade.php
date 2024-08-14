<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0;">
        <meta name="format-detection" content="telephone=no" />

        <style>
        /* Reset styles */
        body {
            margin: 0;
            padding: 0;
            min-width: 100%;
            width: 100% !important;
            height: 100% !important;
        }

        body,
        table,
        td,
        div,
        p,
        a {
            -webkit-font-smoothing: antialiased;
            text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            line-height: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            border-collapse: collapse !important;
            border-spacing: 0;
        }

        img {
            border: 0;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        #outlook a {
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        @media all and (min-width: 560px) {
            body {
                margin-top: 30px;
            }
        }

        /* Rounded corners */
        @media all and (min-width: 560px) {
            .container {
                border-radius: 8px;
                -webkit-border-radius: 8px;
                -moz-border-radius: 8px;
                -khtml-border-radius: 8px;
            }
        }

        /* Links */
        a,
        a:hover {
            color: #127DB3;
        }

        .footer a,
        .footer a:hover {
            color: #999999;
        }
        </style>

        <!-- MESSAGE SUBJECT -->
        <title>Confirm email template</title>

    </head>

    <!-- BODY -->

    <body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%"
        style="border-collapse: collapse; border-spacing: 0; padding-top:50px; width: 100%; height: 100%; -webkit-font-smoothing: antialiased; text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; line-height: 100%;
	background-color: #F0F0F0;
	color: #000000;" bgcolor="#F0F0F0" text="#000000">
        {{-- {{$details}} --}}
        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"
            style="border-collapse: collapse; border-spacing: 0; margin: 0px; padding-top: 50px; width: 100%;"
            class="background">
            <tr>
                <td align="center" valign="top"
                    style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0;" bgcolor="#F0F0F0">
                    <table border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF" width="560"
                        style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="container">
                        <tr>
                            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 24px; font-weight: bold; line-height: 130%;
			padding-top: 5px;
			color: #000000;
			font-family: sans-serif;" class="header">
                                <h4>Help Desk</h4>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 5px;" class="line">
                                <hr color="#E0E0E0" align="center" width="100%" size="1" noshade
                                    style="margin: 0; padding: 0;" />
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
			padding-top: 25px; 
			color: #000000;
			font-family: sans-serif;" class="paragraph">
                                {{-- cHANGE THIS LINES MEANS ADD TICKETTITLES --}}
                                <span style="font-weight:500;">Hi {{$details['username']}}</span> ,<br> <span
                                    style="font-weight:500;">{{$details['ticketilte']}}</span> ,<br>
                                ticket has been resolved.
                                <br> And detailed information about agent.
                            </td>
                        </tr>

                        <tr>
                            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%;
			padding-top: 25px;" class="line">
                                <hr color="#E0E0E0" align="center" width="100%" size="1" noshade
                                    style="margin: 0; padding: 0;" />
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 17px; font-weight: 400; line-height: 160%;
			padding-top: 10px;
			padding-bottom: 5px;
			color: #000000;
			font-family: sans-serif;" class="paragraph">
                                <h5> Regards {{$details['AgentName']}}</h5>

                            </td>
                        </tr>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="560" style="border-collapse: collapse; border-spacing: 0; padding: 0; width: inherit;
	max-width: 560px;" class="wrapper">
                        <tr>
                            <td align="center" valign="top" style="border-collapse: collapse; border-spacing: 0; margin: 0; padding: 0; padding-left: 6.25%; padding-right: 6.25%; width: 87.5%; font-size: 13px; font-weight: 400; line-height: 150%;
			padding-top: 20px;
			padding-bottom: 20px;
			color: #999999;
			font-family: sans-serif;" class="footer">
                                Check out our extensive <a href="" target="_blank"
                                    style="text-decoration: underline; color: #999999; font-family: sans-serif; font-size: 13px; font-weight: 400; line-height: 150%;">FAQ</a>
                                for more information
                                or contact us through our <a href="" target="_blank"
                                    style="text-decoration: underline; color: #999999; font-family: sans-serif; font-size: 13px; font-weight: 400; line-height: 150%;">Contact
                                    Form</a>. Our support
                                team is available to help you 24 hours a day, seven days a week.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>

</html>