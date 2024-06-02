<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/subbrat/el@main/css/s6css.css' />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #3498db;
        }

        p {
            color: #555555;
        }

        .otp-container {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .otp {
            font-size: 24px;
            font-weight: bold;
            color: #e74c3c;
            text-decoration: underline;
        }

        .expiry-note {
            color: red;
        }

        .footer {
            color: grey;
            font-size: 14px;
        }

        .ignore-note {
            color: #555555;
            font-size: 14px;
            display: block;
            margin-top: 10px;
        }

        .ignore-note .redd {
            color: red;
        }
    </style>
</head>

<body>
    <div class='container'>
        <h1>Howdy!</h1>
        <span class="">Thanks for your interest in Oasis's Website.</span><br>
        <span class="">You are at step 1/3 of Registration 😄</span><br>
        <span class="">Your OTP for registration is:</span><br>
        <div class='otp-container s-center s-light-grey s-padding-large s-round-large'>
            <span class='otp'>$otp</span>
            <p class='expiry-note'>Kindly note that this OTP is valid for the next 5 minutes only!</p>
        </div>
        <p class='footer'>Regards,<br>Minnerva - Virtual Assistant <br>from Oasis The Ecology Club<br>IISER
            Berhampur</p>
        <span class='s-tx-blue'>This is an automated message 🤖 Please do not reply!</span>
        <span class='ignore-note'>usertoken: $mailtoken, mail was sent to: $useremail, not you? <span class='redd'>Please
                Ignore 😞</span></span>
    </div>
</body>

</html>