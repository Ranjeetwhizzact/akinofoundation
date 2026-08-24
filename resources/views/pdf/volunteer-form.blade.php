<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volunteer Donation PDF - Akino Foundation</title>
    <style>
        body {
            font-family: "DejaVu Sans", sans-serif;
            color: #000;
            background-color: #f9ca3e;
            padding: 20px;
        }
        h2, h4 {
            text-align: center;
            margin: 0;
            padding: 5px 0;
        }
        .section {
            background-color: #fff8dc;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .section-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }
        .field {
            margin-bottom: 10px;
            font-size: 14px;
        }
        .label {
            font-weight: bold;
            display: inline-block;
            width: 180px;
        }
    </style>
</head>
<body>
    <h2>AKINO FOUNDATION</h2>
    <h4>Volunteer Donation Submission</h4>

    <div class="section">
        <div class="section-title">Donor Details</div>
        <div class="field"><span class="label">Donor Name:</span> {{ $donation['full_name'] ?? '-' }}</div>
        <div class="field"><span class="label">Date of Birth:</span> {{ $donation['date_of_birth'] ?? '-' }}</div>
    </div>

    <div class="section">
        <div class="section-title">Donation Details</div>
        <div class="field"><span class="label">Donation Amount:</span> ₹{{ $donation['donation_amount'] ?? '-' }}</div>
        <div class="field"><span class="label">Transaction ID:</span> {{ $donation['transactionId'] ?? '-' }}</div>
        <div class="field"><span class="label">Payment Mode:</span> {{ $donation['payment_mode'] ?? '-' }}</div>
        <div class="field"><span class="label">Send 80G Certificate:</span> {{ $donation['send_80g'] ? 'Yes' : 'No' }}</div>
        <div class="field"><span class="label">Send on WhatsApp:</span> {{ $donation['is_whatsapp'] === 'yes' ? 'Yes' : 'No' }}</div>
    </div>

    <div class="section">
        <div class="section-title">Volunteer Details</div>
        <div class="field"><span class="label">Volunteer Name:</span> {{ $donation['volunteerName'] ?? '-' }}</div>
    </div>

    <p style="text-align: center; font-size: 12px;">Thank you for your contribution to Akino Foundation.</p>
</body>
</html>
