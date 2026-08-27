<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New ERP Consultation Request</title>
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #08040F; color: #F3F0FF; margin: 0; padding: 30px;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center">
                <table width="600" border="0" cellspacing="0" cellpadding="0" style="background-color: #120726; border: 1px solid #7E22CE; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #7E22CE 0%, #4338CA 100%); padding: 28px 32px; text-align: left;">
                            <h1 style="margin: 0; color: #FFFFFF; font-size: 20px; font-weight: 800; letter-spacing: -0.5px;">
                                New ERP Consultation Request
                            </h1>
                            <p style="margin: 6px 0 0 0; color: #E9D5FF; font-size: 13px;">
                                Incoming client lead from Nayantha Dhasun Portfolio Website
                            </p>
                        </td>
                    </tr>

                    <!-- Content Details -->
                    <tr>
                        <td style="padding: 32px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td style="padding-bottom: 16px;">
                                        <p style="margin: 0; font-size: 11px; text-transform: uppercase; color: #C084FC; font-weight: 700; letter-spacing: 0.5px;">Client Name</p>
                                        <p style="margin: 4px 0 0 0; font-size: 16px; font-weight: bold; color: #FFFFFF;">{{ $data['name'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 16px;">
                                        <p style="margin: 0; font-size: 11px; text-transform: uppercase; color: #C084FC; font-weight: 700; letter-spacing: 0.5px;">Work Email</p>
                                        <p style="margin: 4px 0 0 0; font-size: 15px; color: #E9D5FF;">
                                            <a href="mailto:{{ $data['email'] }}" style="color: #60A5FA; text-decoration: none; font-weight: 600;">{{ $data['email'] }}</a>
                                        </p>
                                    </td>
                                </tr>
                                @if(!empty($data['organization']))
                                <tr>
                                    <td style="padding-bottom: 16px;">
                                        <p style="margin: 0; font-size: 11px; text-transform: uppercase; color: #C084FC; font-weight: 700; letter-spacing: 0.5px;">Organization / Company</p>
                                        <p style="margin: 4px 0 0 0; font-size: 15px; color: #FFFFFF; font-weight: 600;">{{ $data['organization'] }}</p>
                                    </td>
                                </tr>
                                @endif
                                <tr>
                                    <td style="padding-bottom: 16px;">
                                        <p style="margin: 0; font-size: 11px; text-transform: uppercase; color: #C084FC; font-weight: 700; letter-spacing: 0.5px;">Required Service / Focus Area</p>
                                        <p style="margin: 4px 0 0 0; font-size: 15px; color: #34D399; font-weight: bold;">{{ $data['service_type'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 12px; padding-bottom: 24px; border-top: 1px solid rgba(168, 85, 247, 0.2);">
                                        <p style="margin: 0 0 8px 0; font-size: 11px; text-transform: uppercase; color: #C084FC; font-weight: 700; letter-spacing: 0.5px;">Project Scope & Requirements</p>
                                        <div style="background-color: #1A0A33; border: 1px solid rgba(168, 85, 247, 0.3); border-radius: 10px; padding: 18px; color: #F3F0FF; font-size: 14px; line-height: 1.6; white-space: pre-wrap;">{{ $data['message'] }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding-top: 8px;">
                                        <a href="mailto:{{ $data['email'] }}?subject=Re: ERP Consultation - {{ urlencode($data['service_type']) }}" 
                                           style="display: inline-block; background: linear-gradient(135deg, #9333EA 0%, #7E22CE 100%); color: #FFFFFF; text-decoration: none; padding: 14px 28px; border-radius: 10px; font-weight: bold; font-size: 14px; box-shadow: 0 4px 15px rgba(147, 51, 234, 0.4);">
                                            Reply Directly to {{ $data['name'] }} &rarr;
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #0A0414; padding: 18px 32px; border-top: 1px solid rgba(168, 85, 247, 0.15); text-align: center;">
                            <p style="margin: 0; color: #A855F7; font-size: 11px;">
                                Sent to <strong>nayanthasr@gmail.com</strong> from Nayantha Dhasun Portfolio System.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
