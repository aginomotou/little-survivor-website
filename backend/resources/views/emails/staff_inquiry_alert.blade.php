<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Website Inquiry</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f1ec; font-family:Arial, Helvetica, sans-serif; color:#3c362e;">

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f1ec; padding:24px 12px;">
        <tr>
            <td align="center">

                <table role="presentation" width="100%" style="max-width:600px; background-color:#ffffff; border:1px solid #e6ded2; border-radius:6px; overflow:hidden;">

                    <!-- Brand header -->
                    <tr>
                        <td style="background-color:#b8966a; padding:20px 28px;">
                            <h1 style="margin:0; font-size:18px; color:#ffffff; letter-spacing:1px;">Little Survivor Beach Resort</h1>
                            <p style="margin:4px 0 0; font-size:12px; color:#f7efe3;">New Website Inquiry</p>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:28px;">
                            <p style="margin:0 0 6px; font-size:13px; color:#8a7f70;">A guest has submitted the following inquiry via the website:</p>

                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid #e6ded2; border-radius:4px; margin:14px 0 20px;">
                                <tr>
                                    <td style="padding:12px 16px; background-color:#faf7f2; border-bottom:1px solid #e6ded2; font-size:12px; color:#8a7f70; width:150px;">Name</td>
                                    <td style="padding:12px 16px; border-bottom:1px solid #e6ded2; font-size:14px; font-weight:bold;">
                                        {{ $inquiry->first_name }} {{ $inquiry->last_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 16px; background-color:#faf7f2; border-bottom:1px solid #e6ded2; font-size:12px; color:#8a7f70;">Email</td>
                                    <td style="padding:12px 16px; border-bottom:1px solid #e6ded2; font-size:14px;">
                                        <a href="mailto:{{ $inquiry->email }}" style="color:#b8966a;">{{ $inquiry->email }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 16px; background-color:#faf7f2; border-bottom:1px solid #e6ded2; font-size:12px; color:#8a7f70;">Topic</td>
                                    <td style="padding:12px 16px; border-bottom:1px solid #e6ded2; font-size:14px;">{{ $inquiry->topic }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 16px; background-color:#faf7f2; border-bottom:1px solid #e6ded2; font-size:12px; color:#8a7f70;">Received</td>
                                    <td style="padding:12px 16px; border-bottom:1px solid #e6ded2; font-size:14px;">
                                        {{ $inquiry->created_at?->format('F j, Y \a\t g:i A') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 16px; background-color:#faf7f2; font-size:12px; color:#8a7f70; vertical-align:top;">Message</td>
                                    <td style="padding:12px 16px; font-size:14px; line-height:1.6; white-space:pre-wrap;">{{ $inquiry->message }}</td>
                                </tr>
                            </table>

                            <p style="margin:0; font-size:12px; color:#8a7f70;">
                                Reply directly to this email and the guest&#8217;s address will be filled in automatically.
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
