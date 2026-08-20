<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We've Received Your Inquiry</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f1ec; font-family:Arial, Helvetica, sans-serif; color:#3c362e;">

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f1ec; padding:24px 12px;">
        <tr>
            <td align="center">

                <table role="presentation" width="100%" style="max-width:600px; background-color:#ffffff; border:1px solid #e6ded2; border-radius:6px; overflow:hidden;">

                    <!-- Brand header -->
                    <tr>
                        <td style="background-color:#b8966a; padding:28px 28px; text-align:center;">
                            <h1 style="margin:0; font-size:20px; color:#ffffff; letter-spacing:2px; font-family:Georgia, 'Times New Roman', serif;">Little Survivor</h1>
                            <h2 style="margin:2px 0 0; font-size:13px; font-weight:normal; color:#f7efe3; letter-spacing:4px; text-transform:uppercase;">Beach Resort</h2>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:32px 28px;">

                            <h3 style="margin:0 0 12px; font-size:20px; color:#b8966a; font-family:Georgia, 'Times New Roman', serif;">
                                Thank you, {{ $inquiry->first_name }}!
                            </h3>

                            <p style="margin:0 0 14px; font-size:14px; line-height:1.7;">
                                We have received your inquiry about
                                <strong>&ldquo;{{ $inquiry->topic }}&rdquo;</strong> and one of our
                                team members will get back to you within
                                <strong>24 hours</strong>.
                            </p>

                            <p style="margin:0 0 20px; font-size:14px; line-height:1.7;">
                                While you wait, feel free to explore our
                                <a href="https://littlesurvivorbeachresort.com" style="color:#b8966a;">website</a>,
                                or reach us directly if your plans can&#8217;t wait.
                            </p>

                            <!-- Contact details -->
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#faf7f2; border:1px solid #e6ded2; border-radius:4px;">
                                <tr>
                                    <td style="padding:18px 20px;">
                                        <p style="margin:0 0 8px; font-size:11px; letter-spacing:2px; text-transform:uppercase; color:#8a7f70;">Reach Us</p>
                                        <p style="margin:0 0 10px; font-size:13px; line-height:1.7; color:#3c362e;">
                                            Purok 8, Barangay Panan, Botolan<br>
                                            2202 Zambales, Philippines
                                        </p>
                                        <p style="margin:0; font-size:13px; line-height:1.9; color:#3c362e;">
                                            <strong>Phone:</strong> <a href="tel:+639192601511" style="color:#3c362e; text-decoration:none;">+63 919 260 1511</a><br>
                                            <strong>Email:</strong> <a href="mailto:littlesurvivorbeachresort@gmail.com" style="color:#b8966a;">littlesurvivorbeachresort@gmail.com</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin:24px 0 0; font-size:13px; line-height:1.7; color:#8a7f70;">
                                We look forward to welcoming you to the beach!<br>
                                Warm regards,<br>
                                <strong style="color:#3c362e;">The Little Survivor Team</strong>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color:#faf7f2; border-top:1px solid #e6ded2; padding:16px 28px; text-align:center;">
                            <p style="margin:0; font-size:11px; color:#a39886; line-height:1.7;">
                                Little Survivor Beach Resort &middot; Purok 8, Barangay Panan, Botolan, 2202 Zambales, Philippines<br>
                                +63 919 260 1511 &middot; littlesurvivorbeachresort@gmail.com
                            </p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>
