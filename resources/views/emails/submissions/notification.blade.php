<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Submission</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333333; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
        <div style="background-color: #333333; padding: 20px; text-align: center;">
            <h2 style="margin: 0; color: #f9ca3e;">New Submission Received</h2>
        </div>
        <div style="padding: 30px;">
            <h3>Hello Team,</h3>
            
            @if($submission->type === 'partner')
                <p>A new <strong>Partner With Us</strong> submission has been received.</p>
            @else
                <p>A new <strong>Volunteer With Us</strong> submission has been received.</p>
            @endif

            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <tr>
                    <td style="padding: 8px; border-bottom: 1px solid #eeeeee; font-weight: bold; width: 35%;">Submission Type:</td>
                    <td style="padding: 8px; border-bottom: 1px solid #eeeeee; text-transform: capitalize;">{{ $submission->type }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border-bottom: 1px solid #eeeeee; font-weight: bold;">Full Name:</td>
                    <td style="padding: 8px; border-bottom: 1px solid #eeeeee;">{{ $submission->full_name }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border-bottom: 1px solid #eeeeee; font-weight: bold;">Email:</td>
                    <td style="padding: 8px; border-bottom: 1px solid #eeeeee;">{{ $submission->email }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border-bottom: 1px solid #eeeeee; font-weight: bold;">Phone:</td>
                    <td style="padding: 8px; border-bottom: 1px solid #eeeeee;">{{ $submission->phone }}</td>
                </tr>
                <tr>
                    <td style="padding: 8px; border-bottom: 1px solid #eeeeee; font-weight: bold;">Location:</td>
                    <td style="padding: 8px; border-bottom: 1px solid #eeeeee;">{{ $submission->location }}</td>
                </tr>
                
                @if($submission->type === 'partner')
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #eeeeee; font-weight: bold;">Organization:</td>
                        <td style="padding: 8px; border-bottom: 1px solid #eeeeee;">{{ $submission->organization_name }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #eeeeee; font-weight: bold;">Website:</td>
                        <td style="padding: 8px; border-bottom: 1px solid #eeeeee;">
                            @if($submission->website)
                                <a href="{{ $submission->website }}" target="_blank">{{ $submission->website }}</a>
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #eeeeee; font-weight: bold;">Partnership Type:</td>
                        <td style="padding: 8px; border-bottom: 1px solid #eeeeee;">{{ $submission->partnership_type }}</td>
                    </tr>
                @else
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #eeeeee; font-weight: bold;">Skills/Interests:</td>
                        <td style="padding: 8px; border-bottom: 1px solid #eeeeee;">{{ $submission->skills_or_interests }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #eeeeee; font-weight: bold;">Availability:</td>
                        <td style="padding: 8px; border-bottom: 1px solid #eeeeee;">{{ $submission->availability }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #eeeeee; font-weight: bold;">Previous Exp:</td>
                        <td style="padding: 8px; border-bottom: 1px solid #eeeeee;">{{ $submission->previous_experience ?? 'N/A' }}</td>
                    </tr>
                @endif
                
                <tr>
                    <td style="padding: 8px; border-bottom: 1px solid #eeeeee; font-weight: bold; vertical-align: top;">Message:</td>
                    <td style="padding: 8px; border-bottom: 1px solid #eeeeee;">{{ $submission->message }}</td>
                </tr>
            </table>

            <p style="margin-top: 20px;">You can view and manage this submission on the Akino Foundation Admin Dashboard.</p>
        </div>
    </div>
</body>
</html>
