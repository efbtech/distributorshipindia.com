<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: #fbfbfb;font-family: sans-serif;">
    <section style="width: 700px; margin: 50px auto;background-color: whitesmoke;">
        <div style="padding: 40px 20px;">
            <img src="https://fojfit.com/web/assets/image/home/logo.svg" alt="" style="margin: 0 auto 2rem;display: block;width: 135px;">
            <p
                style="font-size: 1.6rem;font-weight: 600; margin: 0;text-align: center;padding-bottom: 0.5rem;border-top: 1px dashed silver;padding-top: 2rem;">
                Verify your Fojfit email address
            </p>
            <p style="font-size: 1.2rem;line-height: 1.6;">Dear  {{$name}},</p>
            <p style="font-size: 1.2rem;line-height: 1.6;">
            Please enter the following  code on the email verification page to verify this  email address is yours: <strong>{{ $otp }}</strong>
            </p>
            <p style="font-size: 1.2rem;line-height: 1.6;">After this email has been sent, this code will expire in 2 minutes.</p>
            <p style="font-size: 1.2rem;line-height: 1.6;"><strong>Why you received this email</strong></p>
            <p style="font-size: 1.2rem;line-height: 1.6;">When you select an email address as FojFit ID, FojFit requires verification. Your FojFit ID cannot be used until it is verified</p>

            <p style="font-size: 1.2rem;line-height: 1.6; text-align: justify;">If you did not make this request, please disregard this email. No FojFit ID will be created without verification.</p>
            <p style="margin-bottom: 0.2rem; padding-bottom: 0.5rem;"><i>Warm Regards</i></p>
            <p style="font-size: 1.3rem;font-weight: 700; margin: 0;"><i>FojFit</i></p>
        </div>
        <div style="background-color:#dfdfdf;padding: 7px 20px;">
            <p style="margin:0;line-height:13.5pt;">
                <span style="font-size: 13px;">
                    <span style="color:black;">
                        <a href="" target="_blank" data-linkindex="4">
                            <span style="color:#555555;">Terms & condition</span></a> |
                        <a href="" target="_blank" data-linkindex="5"><span style="color:#555555;">Privacy
                                Policy</span></a>
                    </span>
                </span>
            </p>
            <p style="font-size:11pt;margin:0;line-height:13.5pt;color: #555555;">
                <span style="font-size: 13px;">
                    Copyright © 2022 Fictivebox Media Pvt Ltd, Sec 63 Noida UP INDIA. All rights reserved.
                </span>
            </p>
        </div>
    </section>
</body>

</html>