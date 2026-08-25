<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Akino Foundation</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333333; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
        <div style="background-color: #f9ca3e; padding: 20px; text-align: center;">
            <h2 style="margin: 0; color: #333333;">Akino Foundation</h2>
        </div>
        <div style="padding: 30px;">
            <h3>Dear {{ $submission->full_name }},</h3>
            
            @if($submission->type === 'partner')
                <p>Thank you for your interest in partnering with <strong>Akino Foundation</strong>.</p>
                <p>We have successfully received your partnership request for <strong>{{ $submission->organization_name }}</strong>. Our team is thrilled about the opportunity to collaborate and drive meaningful change together.</p>
            @else
                <p>Thank you for your interest in volunteering with <strong>Akino Foundation</strong>.</p>
                <p>We have successfully received your volunteer application. Your willingness to contribute your time and skills is highly appreciated, and we look forward to making a lasting impact together.</p>
            @endif

            <p>Our team will review your submission and get back to you as soon as possible.</p>
            
            <hr style="border: 0; border-top: 1px solid #eeeeee; margin: 20px 0;">
            
            <p style="font-size: 12px; color: #666666;">
                Best Regards,<br>
                <strong>Team Akino Foundation</strong><br>
                Email: info@akinofoundation.org<br>
                Website: <a href="https://akinofoundation.org" style="color: #f9ca3e; text-decoration: none;">akinofoundation.org</a>
            </p>
        </div>
    </div>
</body>
</html>
